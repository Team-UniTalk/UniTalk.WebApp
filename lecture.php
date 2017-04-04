<?php include("header.php"); ?>
<?php include("database.php"); ?>
<body>
<?php include("navbar.php");
$res = fetch_posts();
$title = fetch_lecture();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="list-group">
                <div class="list-group-item active">
                    <?php foreach($title AS $row): echo $row["title"];  endforeach;?>
                </div>
                <?php foreach ($res AS $row): ?>
                    <div class="list-group-item">
                        <?php echo $row["content"];?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="jumbotron null">
        <button class="btn btn-primary refresh" onClick="window.location.reload()">Refresh!</button>
    </div>
</div>

<div class="footnote">
    <h3>UniTalk</h3>
</div>

<?php include("footer.php"); ?>
