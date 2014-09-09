<?php
    
    /***
     * Displays the details for the next match, like opposition, venue (home or
     * away), squad, date, time of kick off, google map to location.
     ***/
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Next Match</title>

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
                <div class="col-md-6">
                    <h3>Next Match</h3>
                    <div class="box">
                        <p>Date: </p>
                        <p>Opposition: </p>
                        <p>Kick Off: </p>
                        <p><a href="#">Get Directions</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <table class="table table-hover table-responsive">
                        <tr>
                            <th>Position</th>
                            <th>Name</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <th>Subs</th>
                        </tr>
                        <tr>
                            <td>16.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>18.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>19.</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td>20.</td>
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