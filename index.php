<?php
    
    /***
     * Home page. Will display snapshot of the last game (who,when,score link to
     * report), and snapshot of next game (who, where, when)
     ***/
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>

        <!-- Bootstrap -->
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="includes/css/rugby.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>   
    <body>
        <div class="container">
            <?php include('includes/php/head.php');?>
            <div class="row">
                <div class="col-md-4 box">
                    <h3>Next Match</h3>
                    <p>Date:</p>
                    <p>Opposition: </p>
                    <p>Kick Off: </p>
                    <p>Venue: </p>
                </div>
                <div class="col-md-4 col-md-offset-1 box">
                    <h3>Last Match</h3>
                    <p>Date:</p>
                    <p>Opposition: </p>
                    <p>Score: </p>
                    <p><a href="#">Report >></a></p>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>