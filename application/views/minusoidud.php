﻿<!DOCTYPE html>
<html lang="et" manifest="/manifest.appcache">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <base href="<?php echo base_url() ?>">
    <title><?php echo $this->lang->line('minusoidud_title') ?></title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="js/ie-emulation-modes-warning.js"></script> -->



</head>

<body>

<?php

//include('lang.php');
//$default = ($_GET['lang']=='') ? 'en' : $_GET['lang'];
?>

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
                        <div id="hintbox"></div>
                        <li><a href="pealeht"><?php echo $this->lang->line('pealeht') ?></a></li>
                        <li><a href="soidud"><?php echo $this->lang->line('Soidud') ?> </a></li>
                        <li><a href="kasutajad"><?php echo $this->lang->line('Kasutajad') ?> </a></li>
                        <li><a href="minusoidud"><?php echo $this->lang->line('Minusoidud') ?> </a></li>
                        <li><a href="liitutudsoidud"><?php echo $this->lang->line('liitutud_soidud') ?> </a></li>
                    </ul>

                </div>

            </div>
        </div>

        <div class="col-lg-4 col-sm-push-0 col-sm-4">
            <div class="regbar">
                <div class="navbar-collapse collapse">
                    <button id="eng" class="btn btn-primary"
                            data-hinttext="<?php echo $this->lang->line('inglise'); ?>">ENG
                    </button>
                    <button id="est" class="btn btn-primary" data-hinttext="<?php echo $this->lang->line('eesti'); ?>">
                        EST
                    </button>
                    <button id="logout" class="btn btn-primary"
                            data-hinttext="<?php echo $this->lang->line('logivalja'); ?>"><?php echo $this->lang->line('logout') ?></button>
                    <p><?php echo $this->lang->line('Tere, ') ?><?php echo $this->session->userdata['logged_in']['username'] ?></p>
                </div>
            </div>

        </div>
        <div id="modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <form id="lisasoit" class="form-horizontal" action="http://poial.cs.ut.ee/index/lisasoit" method="post"
                      accept-charset="utf-8">
                    <div class="modal-content">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo $this->lang->line('Registreeru'); ?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-8 col-xs-12">

                                <div class="form-group">
                                    <label
                                        class="col-lg-4 control-label"><?php echo $this->lang->line('Kasutajanimi'); ?></label>
                                    <div class="col-lg-8">
                                        <input title="kasutajanimi" type="text" class="form-control" name="kasutajanimi"
                                               id="kasutajanimi"
                                               placeholder="<?php echo $this->lang->line('Kasutajanimi1'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label
                                        class="col-lg-4 control-label"><?php echo $this->lang->line('Eesnimi'); ?></label>
                                    <div class="col-lg-8">
                                        <input title="eesnimi" type="text" class="form-control" name="eesnimi"
                                               id="eesnimi" placeholder="<?php echo $this->lang->line('Eesnimi1'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label
                                        class="col-lg-4 control-label"><?php echo $this->lang->line('Perenimi'); ?></label>
                                    <div class="col-lg-8">
                                        <input title="perenimi" type="text" class="form-control" name="perenimi"
                                               id="perenimi"
                                               placeholder="<?php echo $this->lang->line('Perenimi1'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label
                                        class="col-lg-4 control-label"><?php echo $this->lang->line('Parool'); ?></label>
                                    <div class="col-lg-8">
                                        <input title="parool" type="password" class="form-control" name="parool"
                                               id="parool" placeholder="<?php echo $this->lang->line('Parool1'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label
                                        class="col-lg-4 control-label"><?php echo $this->lang->line('Email'); ?></label>
                                    <div class="col-lg-8">
                                        <input title="email" type="text" class="form-control" name="email" id="email"
                                               placeholder="<?php echo $this->lang->line('Email1'); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label
                                        class="col-lg-4 control-label"><?php echo $this->lang->line('Telefon'); ?></label>
                                    <div class="col-lg-8">
                                        <input title="telnr" type="text" class="form-control" name="telnr" id="telnr"
                                               placeholder="00000000">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button id="regamisnupp" type="submit"
                                            class="btn btn-primary"><?php echo $this->lang->line('Rega'); ?></button>
                                    <button id="closenupp" class="btn btn-default"
                                            data-dismiss="modal"><?php echo $this->lang->line('Sulge'); ?></button>
                                </div>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="inner">
            <div class="table-responsive">
                <table class="table" id="tabel">
                    <thead>
                    <tr>
                        <th class="text-center"><?php echo $this->lang->line('Lähtekoht') ?></th>
                        <th class="text-center"><?php echo $this->lang->line('Sihtkoht') ?></th>
                        <th class="text-center"><?php echo $this->lang->line('Autojuht') ?></th>
                        <th class="text-center"><?php echo $this->lang->line('Lisainfo') ?></th>
                        <th class="text-center"><?php echo $this->lang->line('Aeg') ?></th>
                        <th class="text-center"></th>

                    </tr>
                    </thead>
                    <tbody id="tablebody">
                    <?
                    $i = 0;
                    foreach ($uudistekogu as $uudis):
                    ++$i;
                    ?>
                    <tr>
                        <td><? echo $uudis->Lahtekoht ?></td>
                        <td><? echo $uudis->Sihtkoht ?></td>
                        <td><? echo $uudis->Autojuht ?></td>
                        <td><? echo $uudis->Lisainfo ?></td>
                        <td><? echo $uudis->Aeg ?></td>
                        <? endforeach ?>
                        <? if ($i != 0) echo "<td><button class=\"btn-default\" id=\"kustutanupp\">Kustuta</button></td>" ?>


                    </tr>
                    </tbody>
                </table>
            </div>
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
<script src="js/global.js"></script>
<script src="js/interactiveinfo.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/table.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>