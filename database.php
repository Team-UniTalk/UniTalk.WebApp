<?php

$servername = 'localhost';
$username = 'root';
$password = 'dahskufhjio32knklhioh(Z(/H§I$H/(§Z$IUHDughiuhsjkfdh';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=dba', $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

// For local tests

//$pdo = new PDO(
//    'mysql:host=localhost;dbname=unitalk',
//    'root',
//    ''
//);


function fetch_lecture()
{
    global $param;
    global $pdo;

    if(!empty($pdo)) {
        try {
            if (!empty($param)) {
                return $pdo->query("SELECT DISTINCT title
                                    FROM lecture
                                    WHERE code=$param
                                    LIMIT 1");
            }
        }
        catch(PDOException $e)
        {
            echo "Query failed: " . $e->getMessage();
        }
    }
};

function fetch_posts()
{
    global $param;
    global $pdo;

    if(!empty($pdo)) {
        try {
            if (!empty($param)) {
                return $pdo->query("SELECT p.content
                    FROM post AS p
                    JOIN lecture AS l ON l.id = p.lectureid
                    WHERE l.code =$param
                    ORDER BY p.likes DESC
                    LIMIT 5");

                //local tests
                // return $pdo->query("SELECT * FROM `posts` WHERE `lecture`=$param");
            }
        }
        catch(PDOException $e)
        {
            echo "Query failed: " . $e->getMessage();
        }
    }
};



if ($_GET[ 'lectureCode' ] == "" /*|| !lecture_exists()*/) {
  redirect("../index.php?wrongCode=true");
};

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
};

$param = $_GET[ 'lectureCode' ];

function lecture_exists()
{
    global $param;
    global $pdo;

    if (!empty($param)) {
        $e = $pdo->query("SELECT title FROM lecture WHERE code=$param");
        echo $e;
        return !empty($e);
    }


};
