<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo base_url()?>">

    <link rel="icon" href="../../favicon.ico">

    <title>PĆ¶idlapĆ¼Ć¼dja</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/demo.js"></script>

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

                    <span class="navbar-brand">PĆ–IDLAPĆĆDJA</span>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li><a href="pealeht">PEALEHT</a></li>
                        <li><a href="soidud">SĆ•IDUD</a></li>
                        <li><a href="kasutajad">KASUTAJAD</a></li>
                        <li><a href="minusoidud">MINU SĆ•IDUD</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-sm-push-0 col-sm-4">
            <div class="regbar">
                <div class="navbar-collapse collapse">
                    <button class="btn btn-default">Logi sisse</button>
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal">Registreeri</button>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="inner">

            <div class="caro">
                <div id="myCarousel" class="carousel slide container" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="resources/bemm.jpg" class="img-rounded" alt="RĆ¤nk bemm">
                        </div>

                        <div class="item">
                            <img src="resources/velg.jpg" class="img-rounded" alt="RĆ¤nk velg">
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="row">

        <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>CONTACT at martimutso@gmail.com for more information.</p>
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