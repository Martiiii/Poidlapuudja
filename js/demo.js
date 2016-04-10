$(document).ready(function(){
    //$(document.body).bind("online", checkNetworkStatus);
    //$(document.body).bind("offline", checkNetworkStatus);
    //checkNetworkStatus();


    $('#faktinupp').click(function(){
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
            success: function() {
                window.location.reload();
            }
        })

    });

    $('#eng').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEng/",
            success: function() {
                window.location.reload();
            }
        })


    });

    $('#est').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEst/",
            success: function() {
                window.location.reload();
            }

        })

    });

    $('#engout').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEng/",
            success: function(messageforyou)
            {
                window.location.href = "login/index2";
            }
        })


    });

    $('#estout').click(function () {
        $.ajax({
            type: "POST",
            url: "index/change_lang_toEst/",
            success: function(messageforyou)
            {

                window.location.href = "login/index2";

            }

        })

    });

    $('#regamisnupp').click(function(){
     
        $.ajax({

            type: "POST",

            url: "index/lisauudis/",
            data: $("#regamine :input").serializeArray()
            //success: function(messageforyou)
            //{
            //   alert("Registreerumine oli edukas!")
            //},
            //error: function(messageforyou2)
            //{
            //    alert("Registreerumine ei olnud edukas!")
            //}

        });

    });

    $('#regamisnupp').click(function() {
        $('#modal').modal('hide');
    });



    $("#regamine").submit( function() {
        return false
    });

    $('#lisasoitnupp').click(function(){

        $.ajax({

            type: "POST",

            url: "index/lisasoit/",
            data: $("#lisamine :input").serializeArray(),
            success: function(messageforyou)
            {
                alert("Lisamine oli edukas!")
            },
            error: function(messageforyou2)
            {
                alert(data + "5")

            }

        });

    });


    $('#lisasoitnupp').click(function() {
        $('#modallisa').modal('hide');
    });

    $("#lisamine").submit( function() {
        return false
    });


});

function checkNetworkStatus() {
    console.log('I am checking');
    if (navigator.onLine) {
        // Just because the browser says we're online doesn't mean we're online. The browser lies.
        // Check to see if we are really online by making a call for a static JSON resource on
        // the originating Web site. If we can get to it, we're online. If not, assume we're
        // offline.
        $.ajaxSetup({
            async: true,
            cache: false,
            context: $("#status"),
            dataType: "json",
            error: function (req, status, ex) {
                console.log("Error: " + ex);
                // We might not be technically "offline" if the error is not a timeout, but
                // otherwise we're getting some sort of error when we shouldn't, so we're
                // going to treat it as if we're offline.
                // Note: This might not be totally correct if the error is because the
                // manifest is ill-formed.
                showNetworkStatus(false);
            },
            success: function (data, status, req) {
                showNetworkStatus(true);
            },
            timeout: 5000,
            type: "GET",
            url: "ping.js"
        });
        $.ajax();
    } else {
        showNetworkStatus(false);
    }
}

var currentlyOnline = null;
function showNetworkStatus(online) {
    if (online != currentlyOnline) {
        if (online) {
            $('#off').html("no, online");
            localStorage.setItem('viimane', document.title);

        } else {
            $('#off').html(localStorage.getItem('viimane'));
        }
        currentlyOnline = online;
    }
}