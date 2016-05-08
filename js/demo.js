$(document).ready(function () {
    "use strict";
    $('#faktinupp').click(function () {
        if ($('#soitekokku').is(':hidden')) {
            $('#soitekokku').removeClass('hidden');
            $('#kasutajaidkokku').removeClass('hidden');
        } else {
            $('#soitekokku').addClass('hidden');
            $('#kasutajaidkokku').addClass('hidden');
        }

    });

    $('#logout').click(function () {
        $.ajax({
            type: "POST",
            url: "index/logout/",
            success: function () {
                window.location.reload();
            }
        });

    });

    $('#eng').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEng/",
            success: function () {
                window.location.reload();
            }
        });


    });

    $('#est').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEst/",
            success: function () {
                window.location.reload();
            }

        });

    });

    $('#engout').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEng/",
            success: function (messageforyou) {
                window.location.href = "login/index2";
            }
        });


    });

    $('#estout').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEst/",
            success: function (messageforyou) {
                window.location.href = "login/index2";

            }

        });

    });

    $('#regamisnupp').click(function () {

        $.ajax({

            type: "POST",

            url: "index/lisauudis/",
            data: $("#regamine :input").serializeArray(),
            success: function (messageforyou) {
                window.location.reload();
            },
            error: function (messageforyou2) {
                window.location.reload();
            }
        });

    });

    $('#regamisnupp').click(function () {
        $('#modal').modal('hide');
    });


    $("#regamine").submit(function () {
        return false;
    });

    $('#lisasoitnupp').click(function () {
        console.log($("#lisamine :input").serializeArray() + " JEJEJEJ");
        $.ajax({

            type: "POST",

            url: "index/lisasoit/",
            data: $("#lisamine :input").serializeArray(),
            success: function (messageforyou) {
                //alert("Lisamine oli edukas!");
                window.location.reload();
            },
            error: function (messageforyou2) {
                alert(data + "5");

            }

        });

    });


    $('#lisasoitnupp').click(function () {
        $('#modallisa').modal('hide');
    });

    $("#lisamine").submit(function () {
        return false;
    });


});
