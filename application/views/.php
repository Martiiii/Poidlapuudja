<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Example payment usage - Ipizza Testpank - Pangalink-net</title>
    </head>
    <body>
<?php

// THIS IS AUTO GENERATED SCRIPT
// (c) 2011 - 2016 Kreata OÜ www.pangalink.net

// STEP 1. Setup bank certificate
// ==============================

$public_key = openssl_pkey_get_public("-----BEGIN CERTIFICATE-----
MIIDljCCAn4CCQCUr3xDlDchRDANBgkqhkiG9w0BAQUFADCBjDELMAkGA1UEBhMC
RUUxETAPBgNVBAgTCEhhcmp1bWFhMRAwDgYDVQQHEwdUYWxsaW5uMQ0wCwYDVQQK
EwRUZXN0MREwDwYDVQQLEwhiYW5rbGluazEXMBUGA1UEAxMObG9jYWxob3N0IDgw
ODAxHTAbBgkqhkiG9w0BCQEWDnRlc3RAbG9jYWxob3N0MB4XDTE2MDQwODE1NTEw
N1oXDTM2MDQwMzE1NTEwN1owgYwxCzAJBgNVBAYTAkVFMREwDwYDVQQIEwhIYXJq
dW1hYTEQMA4GA1UEBxMHVGFsbGlubjENMAsGA1UEChMEVGVzdDERMA8GA1UECxMI
YmFua2xpbmsxFzAVBgNVBAMTDmxvY2FsaG9zdCA4MDgwMR0wGwYJKoZIhvcNAQkB
Fg50ZXN0QGxvY2FsaG9zdDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEB
AMZ+34IR26j3LIob7Yyq7P5FlAdDPjMCHr0NCbBiPZg+lSM2sbvyplbr8tsCfUzd
6j0zfrdNeWfl17tu2909Q7BkgAV0Svs36mCuTffrKVZ78a864tHCPwiLVHMpTzCO
rJsEF35hZGARkPeXpLgonS7B0TFE8alI+xbzpFvhNYVI3l5+CWlJkGn0K7y3cnnq
1Ec0Qef7YvVZMROlWcwjOO88qJwXfFaimmbE3i5rNrYvkc0eSa1PCJYD25gur1I9
bXIGwSFe+1kRTyDWKE7EqKkCfA/dKMXQQdKO9XAJH5fqHBksZ+xHgwsT+CX7acQG
UWj3uObCSep2q70ZSxags6UCAwEAATANBgkqhkiG9w0BAQUFAAOCAQEAZ5VoMyar
O/YDXlBXxOp9AmaI0nONKBZMqLpAiZ5+tJ/x/q+FAuDvfC3rvUaZKRrswAXAuoUf
OQls/nAd5bHEeguCW/bH3E43NGdjGra+pO1kBEA9aI90HLVnN57OF5DTHrXYjbyD
quA5UqmXaH8UOYOeTymJq2kkj/Yb9N4XXhd+CseNfuJcAmiMdfsdlliAS2RtC7J5
pbYy/S9PmyzQhXERJHrmDm9ce6uE8y+RjveSdDxxAkba5RsYhedJlU6nXjKBaiOS
X+k5iQtUktkqyLE8UWr+rgGnizp4wKL1WMgOINoGHCeNXpafTnCZ2LUteA+EV9mH
EQN7c/mxiP7jJQ==
-----END CERTIFICATE-----");

// STEP 2. Define payment information
// ==================================
// NB! In a real application, you should read the values either from `$_POST`, `$_GET` or `$_REQUEST`.

$fields = array(
        "VK_SERVICE"     => "1911",
        "VK_VERSION"     => "008",
        "VK_SND_ID"      => "GENIPIZZA",
        "VK_REC_ID"      => "uid100065",
        "VK_STAMP"       => "12345",
        "VK_REF"         => "1234561",
        "VK_MSG"         => "Annetus",
        "VK_ENCODING"    => "utf-8",
        "VK_LANG"        => "EST",
        "VK_MAC"         => "g2YAmY1tY/MyPDMC1yz3L6mHhGrMflzeSef6dDh6CC7rUvjG29+nJTwhOIGOgwsXrJ4B0iV3U39U9v/PSgrix2RXj1/HtvPJDSXroe1/I9XxlrwXoEI+R566TWvqJCwWMwQN2Fw2+bZhe5+LLIkUjhX6aMvlrYkUuCdp83ZfB9VAgRUb1XY9LJwXJFqlNkOVd4ywXQYNLZv+W0VfeFMZ4KcCVeVc2oa/PyrYteRO7U4Q+1m/Sn7cpebxG0qaWa+FbplhkWehAAL44jRJNpCx0SVaeO9tGWC9a7fotApp2PUcT4EGLhGpj2U7CbuiWaMLt21K9EeNQSyiQO8GfpNCxw==",
        "VK_AUTO"        => "N"
);

// STEP 3. Generate data to be verified
// ====================================

// Data to be verified is in the form of XXXYYYYY where XXX is 3 char
// zero padded length of the value and YYY the value itself
// NB! Ipizza Testpank expects symbol count, not byte count with UTF-8,
// so use `mb_strlen` instead of `strlen` to detect the length of a string

$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1911 */
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* GENIPIZZA */
        str_pad (mb_strlen($fields["VK_REC_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_REC_ID"] .     /* uid100065 */
        str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
        str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
        str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_MSG"];         /* Annetus */

/* $data = "0041911003008009GENIPIZZA009uid100065005123450071234561007Annetus"; */

// STEP 4. Verify the data with RSA-SHA1
// =====================================

if (openssl_verify ($data, base64_decode($fields["VK_MAC"]), $public_key) !== 1) {
    $signatureVerified = false;
}else{
    $signatureVerified = true;
}

// STEP 5. Display output of the received payment
// ==============================================
?>

    <h2>Payment results</h2>

    <p>Payment: <?php echo $fields["VK_SERVICE"] == "1111" ? "received" : "cancelled" ?></p>
    <p>Signature: <?php echo $signatureVerified ? "verified" : "not verified" ?></p>
    
    </body>
</html>
