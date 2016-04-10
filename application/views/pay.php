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
    <base href="<?php echo base_url() ?>">
    <title>Pöidlapüüdja - Toetamine</title>
    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
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
    function aeg()
    {
        $aeg = new DateTime('now', new DateTimeZone('Europe/Helsinki'));
        return $aeg->format('Y-m-d\TH:i:s\+0200');
    }


    // THIS IS AUTO GENERATED SCRIPT
    // (c) 2011-2016 Kreata OÜ www.pangalink.net

    // File encoding: UTF-8
    // Check that your editor is set to use UTF-8 before using any non-ascii characters
    $private_key = openssl_pkey_get_private(
        "-----BEGIN RSA PRIVATE KEY-----
MIIEpQIBAAKCAQEAuOIA/Nrtz/qCfSOWDcfWX2DF+6H3+ol53vkIqqoRodoWpTlV
Z2lrdbVWf926FEBwNeOXxgAdvbPbvoB3q9G0PgRB9iDpgkhDw91P6NUXbpIIOfqI
SWtBuz8eULtXroMCVc5Alu7G+OnUh2ofiJbmjhicjBCHDiE6aXw41plRk68vsnX6
zOWrOo8CzgcfgJTHu6UIgTSFuAD9oqirrkHr/QmULIlHjZqVdRsBsy8VhZPvkHaD
89AbkJ7s/42+IDGXZDx8TFDuYuKV0o+M035+GngwbePvHublMxw68eeiDkw4MZU/
QpZSQyQH1tYrzfHeudcoRF3mzFiMxjsvlqZwBwIDAQABAoIBAQCsCeJRaIeS2NFE
ETE4cZSR/EM+/GD8yaCWU7Y02Ty/F2mrJcbLC9XrGmr7YSAeaDgCbV516PXD6PG6
O2EgiWrnqp6WodmoWgZ05CPPzTqYsVrmWLMpXp0z2HAlP68/vLkXj22bBWYxiaUy
vRXKzGCOKWjDDT4fb9wi/G0HhHPcr7rfPOpOFDluMf+CK1JO/vwf30qemNZOLorb
YwT7sr99YA9dixjAPxlnkJftuEpAA6X/7XllJxNLjU69vWP0PTuiulv6RvkpcoxM
qfOagvLiQMgUk09MDEbRcEWETLasfwoSxDCBfwGI3+OcGIJWBteIQHrWTA6YLy+a
jsMzfmTBAoGBAODWmNr5V4+qjjc0uIWxv/O4v/PW9Ttb645qRF03gcgxoEWMAYDT
PC2+VwLWeNACVANWlUyxYOyESFYY0IHTTIOklqFH9OMdyqMBpCTPfiUUnPfieUHc
qdcJ6zt6+sGSEPcQzaGPwNEYLNW7PLs1iKXTvJGMr+Zsq6tLwn5EAFPlAoGBANKB
wznF7T/Jt5hM/ttijkIQ85yMi7QuuhXh7PPUcnMu6x4TpCCMIE3Tzl/sQoMz3oqn
WCjooezYjSbKNdLPhq1SaYNY10cUJe2lzo7I5u/JbQbR5G5T40+FroAZqDi8N0Ob
BxLG87dWR/oCF8i44WQXAAMPXlKzTiUsbrHIlY17AoGBAMXAuczPRg5cap1vx2P/
xN7ufhZP2H2PCY3HNb3vVjzoORkyXRgbsnBhW1JppPT/NzmAa+x6js84Qg9H4Axv
9npKxxmvmlowF8xrYx3lSgP/L1hvX0todBFo7fbw4aBjgnxr0RDqySKfar/J4U6f
dUK1CsPRw9yddBhDmBtKYCdpAoGBAIUnncT6pQL3ZtHIymEda1zw+hfpcylLcVwM
J+VoWejwIbtJs0T/PiPcuatFeCEj+z37crGVzW9S355MxFUP/mG+Qo3Z8Xq9jOxR
OGJrRGEjKXrp47PCDoQrzGCtWhJhRBfYhVXkUR+ETU0ga8kE4VV9kv1ciE6JqwGq
pG6Csc7nAoGAWB9ZE5V1/pSMbtQyE6/nLe+U2txgcm1h+VBUmkVmLuzNNV+cMtOD
vfzS9ww5+28tKRzz2hgaGWEtTEB6rN0Rkvuz40HALNKvepnn6DYqvu4Udir040oE
2nTakGTAYCHW1PZqqFbdmf4SlUTE0sjKyt7g3Klh347/gXEfjr55k/U=
-----END RSA PRIVATE KEY-----");


    // STEP 1. Setup private key
    // =========================

    // STEP 2. Define payment information
    // ==================================

    $fields = array(
        "VK_SERVICE" => "1011",
        "VK_VERSION" => "008",
        "VK_SND_ID" => "uid100065",
        "VK_STAMP" => "12345",
        "VK_AMOUNT" => "50",
        "VK_CURR" => "EUR",
        "VK_ACC" => "EE871600161234567892",
        "VK_NAME" => "MTÜ Pöidlapüüdja",
        "VK_REF" => "1234561",
        "VK_LANG" => "EST",
        "VK_MSG" => "Annetus",
        "VK_RETURN" => 'http://www.poial.cs.ut.ee/onnestus',
        "VK_CANCEL" => 'http://www.poial.cs.ut.ee/ebaonnestus',
        "VK_DATETIME" => aeg(),
        "VK_ENCODING" => "utf-8",
    );
    // http://localhost:8080/project/EZX5U64dyWRkvQDf?payment_action=success
    // http://localhost:8080/project/EZX5U64dyWRkvQDf?payment_action=cancel
    // STEP 3. Generate data to be signed
    // ==================================

    // Data to be signed is in the form of XXXYYYYY where XXX is 3 char
    // zero padded length of the value and YYY the value itself
    // NB! Ipizza Testpank expects symbol count, not byte count with UTF-8,
    // so use `mb_strlen` instead of `strlen` to detect the length of a string

    $data = str_pad(mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1011 */
        str_pad(mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad(mb_strlen($fields["VK_SND_ID"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* uid100065 */
        str_pad(mb_strlen($fields["VK_STAMP"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
        str_pad(mb_strlen($fields["VK_AMOUNT"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 150 */
        str_pad(mb_strlen($fields["VK_CURR"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
        str_pad(mb_strlen($fields["VK_ACC"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_ACC"] .        /* EE871600161234567892 */
        str_pad(mb_strlen($fields["VK_NAME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_NAME"] .       /* MTÜ Pöidlapüüdja */
        str_pad(mb_strlen($fields["VK_REF"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
        str_pad(mb_strlen($fields["VK_MSG"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Torso Tiger */
        str_pad(mb_strlen($fields["VK_RETURN"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .     /* http://localhost:8080/project/EZX5U64dyWRkvQDf?payment_action=success */
        str_pad(mb_strlen($fields["VK_CANCEL"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_CANCEL"] .     /* http://localhost:8080/project/EZX5U64dyWRkvQDf?payment_action=cancel */
        str_pad(mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"];    /* 2016-04-08T18:51:12+0300 */

    /* $data = "0041011003008009uid10006500512345003150003EUR020EE871600161234567892016MTÜ Pöidlapüüdja0071234561011Torso Tiger069http://localhost:8080/project/EZX5U64dyWRkvQDf?payment_action=success068http://localhost:8080/project/EZX5U64dyWRkvQDf?payment_action=cancel0242016-04-08T18:51:12+0300"; */

    // STEP 4. Sign the data with RSA-SHA1 to generate MAC code
    // ========================================================

    openssl_sign($data, $signature, $private_key, OPENSSL_ALGO_SHA1);

    $fields["VK_MAC"] = base64_encode($signature);

    // STEP 5. Generate POST form with payment data that will be sent to the bank
    // ==========================================================================
    ?>


    <form method="post" action="http://localhost:8080/banklink/ipizza"></form>
    <!-- include all values as hidden form fields -->
    <?php foreach ($fields as $key => $val): ?>
        <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($val); ?>"/>
    <?php endforeach; ?>

    <h1>Toetamine</h1>
    <!-- draw table output for demo -->

    <div class="row">

        Siin saate meie projekti toetada, et saaksime luua Teile parema rakenduse. asd


    </div>
    <div class="row">


        <input type="submit" id="toetameid" class="toetanupp" value="TOETA"/>

    </div>


</div>



</body>
</html>
