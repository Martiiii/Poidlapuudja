<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo base_url()?>">

    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $this->lang->line('pealeht_title') ?></title>

    <!-- Bootstrap core CSS -->
    
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]<script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="js/ie-emulation-modes-warning.js"></script> -->



</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
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
                        <li><a href="anneta"><?php echo $this->lang->line('toeta_meid'); ?></a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-lg-4 col-sm-push-0 col-sm-4">
            <div class="regbar">
                <div class="navbar-collapse collapse">
                    <button id="engout" class="btn btn-primary" data-hinttext="<?php echo $this->lang->line('inglise'); ?>" >ENG</button>
                    <button id="estout" class="btn btn-primary" data-hinttext="<?php echo $this->lang->line('eesti'); ?>" >EST</button>
                    <button id="loginButton" class="btn btn-primary" data-hinttext="<?php echo $this->lang->line('Sisene Facebookiga'); ?>" onclick="authUser()"><?php echo $this->lang->line('Sisene Facebookiga'); ?></button>
                    <button class="btn btn-default" data-toggle="modal" data-hinttext="<?php echo $this->lang->line('Logi_sisse'); ?>" data-target="#modallogin"><?php echo $this->lang->line('Logi'); ?></button>
                    <button class="btn btn-default" data-toggle="modal" data-hinttext="<?php echo $this->lang->line('Registreerimiseks vajuta'); ?>" data-target="#modal"><?php echo $this->lang->line('Rega'); ?></button>
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
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="resources/stock1.jpg" class="img-rounded" alt="1">
                            </div>

                            <div class="item">
                                <img src="resources/stock2.jpg" class="img-rounded" alt="2">
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
        <div class="col-lg-2 col-md-2 col-xs-2"></div>
        <div class="col-lg-3 col-md-3 col-xs-2"></div>
        <div class="col-lg-3 col-md-2">
            <div class="map">
                <div id="googleMap" class="gmaps"></div>
            </div>
       </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <a href="kontakt"><?php echo $this->lang->line('kontakt'); ?></a>
        </div>
    </div>


    <div id="modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form id="regamine" class = "form-horizontal" action="http://poial.cs.ut.ee/index/lisauudis" method="post" accept-charset="utf-8" >
                <div class="modal-content">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $this->lang->line('Registreeru'); ?></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">

                            <div class="form-group">
                                <label class="col-lg-4 control-label"><?php echo $this->lang->line('Kasutajanimi');?>*</label>
                                <div class="col-lg-8">
                                    <input title="kasutajanimi" type="text" class="form-control" name="kasutajanimi" id="kasutajanimi" placeholder="<?php echo $this->lang->line('Kasutajanimi1');?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label"><?php echo $this->lang->line('Eesnimi');?>*</label>
                                <div class="col-lg-8">
                                    <input title="eesnimi" type="text" class="form-control" name="eesnimi" id="eesnimi" placeholder="<?php echo $this->lang->line('Eesnimi1');?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label"><?php echo $this->lang->line('Perenimi');?>*</label>
                                <div class="col-lg-8">
                                    <input title="perenimi" type="text" class="form-control" name="perenimi" id="perenimi" placeholder="<?php echo $this->lang->line('Perenimi1');?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-lg-4 control-label"><?php echo $this->lang->line('Parool');?>*</label>
                                <div class="col-lg-8">
                                    <input title="parool" type="password" class="form-control" name="parool" id="parool" placeholder="<?php echo $this->lang->line('Parool1');?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-4 control-label"><?php echo $this->lang->line('Email');?>*</label>
                                <div class="col-lg-8">
                                    <input title="email" type="text" class="form-control" name="email" id="email" placeholder="<?php echo $this->lang->line('Email1');?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-lg-4 control-label"><?php echo $this->lang->line('Telefon'); ?>*</label>
                                <div class="col-lg-8">
                                    <input title="telnr" type="text" class="form-control" name="telnr" id="telnr" placeholder="00000000">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button id = "regamisnupp" type = "submit" class = "btn btn-primary"><?php echo $this->lang->line('Rega'); ?></button>
                                <button id = "closenupp" class = "btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('Sulge'); ?></button>
                            </div>

                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>




    <div id="modallogin" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form id="logimine" class = "form-horizontal" action="http://poial.cs.ut.ee/verifylogin" method="post" accept-charset="utf-8">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $this->lang->line('Logi_sisse'); ?></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12">
                            <div class="form-group">
                                <label for="username" class="col-lg-2 control-label"><?php echo $this->lang->line('Kasutajanimi');?></label>
                                <div class="col-lg-10">
                                    <input title="kasutajanimi" type="text" class="form-control" name="kasutajanimi" id="username" placeholder="<?php echo $this->lang->line('Kasutajanimi1');?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-lg-2 control-label"><?php echo $this->lang->line('Parool');?></label>
                                <div class="col-lg-10">
                                    <input title="parool" type="password" class="form-control" name="parool" id="password" placeholder="<?php echo $this->lang->line('Parool1');?>">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button id = "logimisnupp" type = "submit" value="Login" class = "btn btn-primary"><?php echo $this->lang->line('Logi'); ?></button>
                                <button id = "closenupplog" type = "button" class = "btn btn-default" data-dismiss="modal"><?php echo $this->lang->line('Sulge'); ?></button>
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
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js">\x3C/script>')</script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js">\x3C/script>')</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js">\x3C/script>')</script>
<script src="js/demo.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=initialize"
        async defer></script>
<script src="js/map.js"></script>
<!--<script src="http://connect.facebook.net/en_US/all.js"></script>-->
<script src="js/facebook.js"></script>
<script src="js/interactiveinfo.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>