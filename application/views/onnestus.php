<!DOCTYPE html>
<html lang="et" manifest="/manifest.appcache">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <base href="<?php echo base_url()?>">
    <title>Pöidlapüüdja - Toetamine</title>
    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js">\x3C/script>')</script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js">\x3C/script>')</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js">\x3C/script>')</script>
    <script src="js/demo.js"></script>
    <script src="js/interactiveinfo.js"></script>
    <script src="js/loadafterusers.js"></script>


</head>
<body>
<div class="container">

    <?php

    // STEP 1. Setup bank certificate
    // ==============================

    // STEP 2. Define payment information
    // ==================================
    $fields = array ();
    foreach ((array)$_REQUEST as $key => $val) {
        if (substr($key, 0, 2) == "VK") {
            $fields[$key] = $val;
        }
    }
    // STEP 3. Generate data to be verified
    // ====================================
    $data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1111 */
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* GENIPIZZA */
        str_pad (mb_strlen($fields["VK_REC_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_REC_ID"] .     /* uid100010 */
        str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
        str_pad (mb_strlen($fields["VK_T_NO"], "UTF-8"),      3, "0", STR_PAD_LEFT) . $fields["VK_T_NO"] .       /* 10002 */
        str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 150 */
        str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),      3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
        str_pad (mb_strlen($fields["VK_REC_ACC"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_REC_ACC"] .    /* EE871600161234567892 */
        str_pad (mb_strlen($fields["VK_REC_NAME"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_REC_NAME"] .   /* ÕIE MÄGER */
        str_pad (mb_strlen($fields["VK_SND_ACC"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_SND_ACC"] .    /* EE871600161234567892 */
        str_pad (mb_strlen($fields["VK_SND_NAME"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_NAME"] .   /* Tõõger Leõpäöld */
        str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
        str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Torso Tiger */
        str_pad (mb_strlen($fields["VK_T_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_T_DATETIME"];  /* 2016-04-07T20:07:18+0300 */
    // STEP 4. Verify the data with RSA-SHA1
    // =====================================

    // STEP 5. Display output of the received payment
    // ==============================================
    ?>
    <h3> <?php echo $fields["VK_SERVICE"] == "1111" ? "Makse sooritatud." : "Makse ebaõnnestus." ?></h3>

    Teid suunatakse tagasi avalehele.
    <?php header("refresh:3;url=index_out" ); ?>

</div>
</body>
</html>