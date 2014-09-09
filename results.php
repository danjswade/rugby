<?php

/***
 * Page to go through DB and print off results in chronological order.
 * Report link will go through to match-history.php with url variable
 * showing which opposition and which game (as play opposition at least
 * twice in a season)
 ***/

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Results</title>

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
                <div class="col-md-8 col-md-offset-1">
                    <h3>Results</h3>
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Date</th>
                            <th>Opposition</th>
                            <th>Score</th>
                            <th>Result</th>
                            <th>Report</th>
                        </tr>
                        <tr>    
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                            <td>#</td>
                        </tr>
                    </table>
                </div>
            </div>
            
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>