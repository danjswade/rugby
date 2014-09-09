<?php

/***
 * Takes a url variable and pulls the data from the DB and displays. Will show
 * information like squad for that game, score, who scored what, match report
 ***/

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Match History</title>

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
            
            <div class="row-fluid">
                <div class="col-md-12">
                    <h3>Match Details</h3>
                    <p>Date: </p>
                    <p>Opposition: </p>
                    <p>Score: </p>
                    <p>Result: </p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>Match Report</h3>
                    <p>Lorem ipsum dolor sit amet, sed ad alii falli dolorum. An minim legimus usu, in nemore conceptam consetetur sit. Persius disputando sea eu, omnis altera disputationi has ad. His eirmod aliquip debitis no, quo et atqui salutatus scripserit. Pri movet forensibus constituam te, sit ut vocibus principes gubergren. Primis legimus omittantur ius ea, quo te soluta gubergren.</p>

                    <p>Aliquando temporibus ad nam, imperdiet adversarium no mel, id tota timeam molestiae mel. Eam esse intellegat id, pri te placerat recusabo democritum. Has viderer feugait et, stet tempor usu cu. Id qui eius doctus detraxit. Eum quando vituperata ea. Per ut tibique epicuri, sit tota labitur ei.</p>

                    <p>Vis ex oporteat explicari laboramus. Id temporibus scribentur pro, ut mea illud repudiare. Option alienum consequat ne eos. Ne esse labitur theophrastus sit, ignota reprimique ius no, an vel debitis torquatos. Ne simul everti sententiae sit, pro ne omnium adipisci disputationi.</p>

                    <p>Nec legimus adipisci sapientem no, ei sed audire facilisi atomorum. At nam adhuc veniam, ex vix causae conclusionemque, ridens placerat mei id. Quis ceteros salutatus eam ne, dissentiunt voluptatibus ut vis. Ut mea impedit corpora principes, his vidisse forensibus in, sea id quem scripta volumus.</p>

                    <p>Ius an tractatos suscipiantur, eam te doctus corrumpit. Alia errem oporteat te nam. Autem ipsum oportere ut per. Et suas laudem detracto sea, vim reque decore te.</p>
                    
                    <h3>Scorers</h3>
                    <h5>Tries</h5>
                    <p>TBA x 3</p>
                    <br/>
                    <h5>Conversions</h5>
                    <p>TBA x 3</p>
                    <br/>
                    <h5>Penalties</h5>
                    <p>TBA x 3</p>
                    <br/>
                    <h5>Drop Goals</h5>
                    <p>TBA x 3</p>
                    <br/>
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