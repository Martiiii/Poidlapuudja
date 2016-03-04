<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <base href="<?php echo base_url()?>">
    <title>Pöidlapüüdja</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src="js/demo.js"></script>
    <script src="js/global.js"></script>

</head>

<body>



<div class="container-fluid">


    <div class="row">

        <div class="col-lg-8  col-sm-8 ">
            <div class="navbar navbar-default" role="navigation">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <span class="navbar-brand">PÖIDLAPÜÜDJA</span>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li><a href="pealeht">PEALEHT</a></li>
                        <li><a href="soidud">SÕIDUD</a></li>
                        <li><a href="kasutajad">KASUTAJAD</a></li>
                        <li><a href="minusoidud">MINU SÕIDUD</a></li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="col-lg-4 col-sm-push-0 col-sm-4">
            <div class="regbar">
                <div class="navbar-collapse collapse">
                    <button class="btn btn-default" id= "log" >Logi sisse</button>
                    <button  class="btn btn-default" data-toggle="modal" data-target="#modal">Registreeri</button>

                </div>
            </div>
        </div>



    </div>
    <div class="row">
        <div class="inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">Lähtekoht</th>
                        <th class="text-center">Sihtkoht</th>
                        <th class="text-center">Autojuht</th>
                        <th class="text-center">Lisainfo</th>
                        <th class="text-center">Aeg</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?foreach($uudistekogu as $uudis): ?>
                        <tr>
                            <td><? echo $uudis->Lahtekoht ?></td>
                            <td><? echo $uudis->Sihtkoht ?></td>
                            <td><? echo $uudis->User ?></td>
                            <td><? echo $uudis->Lisainfo ?></td>
                            <td><? echo $uudis->Aeg ?></td>

                        </tr>
                    <?endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form id="regamine" class = "form-horizontal">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">REGISTREERU</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">


                            <div class="form-group">
                                <label class="col-lg-2 control-label">Eesnimi: </label>
                                <div class="col-lg-10">
                                    <input  type="text" class="form-control" name="eesnimi" id="eesnimi" placeholder="eesnimi">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">Perenimi: </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="perenimi" id="perenimi" placeholder="perenimi">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Parool: </label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="parool" id="parool" placeholder="parool">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-lg-2 control-label">Email: </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="tenno@gmail.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Telefon: </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="telnr" id="telnr" placeholder="00000000">
                                </div>
                            </div>




                            <div class="modal-footer">
                                <button id = "regamisnupp" type = "submit" class = "btn btn-primary">Registreeri</button>
                                <button id = "closenupp" type = "submit" class = "btn btn-default" data-dismiss="modal">Sulge</button>
                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>