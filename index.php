<?php
$wrongCode;
if (!empty($_GET[ 'wrongCode' ])){
    $wrongCode = $_GET[ 'wrongCode' ];
}
include("header.php"); ?>
    <body class="start">
    <div class="container start">

        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1">
            <div class="jumbotron">
                <h2>UniTalk</h2>
                <p>Access the questions of your lecture</p>

                <?php
                if (!empty($wrongCode) && $wrongCode == true  ) { ?>
                   <h4><php? echo ?>Enter valid six digit lecture code</h4>
                <?php } ?>

                <div class="input-group">
                    <form method="GET" action="lecture.php">
                        <input type="text" class="form-control" placeholder="Code of lecture..." name="lectureCode" />

                            <button id="go" type="submit" class="btn btn-primary">Go!</button>

                    </form>
                </div><!-- /input-group -->
            </div>
        </div>
        </div>
    </div>

    <div class="footnote">
        <h3>UniTalk</h3>
    </div>

<?php include("footer.php"); ?>