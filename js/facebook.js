/*function statusChangeCallback(response) {
    console.log(response);

    if (response.status === 'connected') {
        // Logged into your app and Facebook.
        window.location.replace('./fbapp/login-callback.php');

    } else if (response.status === 'not_authorized') {
    } else {
    }
}

function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}

*/
window.fbAsyncInit = function() {
    FB.init({
        appId      : '949338485173565',
        xfbml      : true,
        version    : 'v2.5'
    });
};


function authUser() {
    FB.login(checkLoginStatus, {scope: 'email'});

    function checkLoginStatus(response) {
        if (!response || response.status !== 'connected') {
            //alert('User is not authorized');
            document.getElementById('loginButton').style.display = 'block';
        } else {
            //alert('User is authorized');
            document.getElementById('loginButton').style.display = 'none';
            //console.log('Access Token: ' + response.authResponse.accessToken);

            //This has to be in your callback!
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;

            testAPI();
            //console.log(andmed);
            //getFBData();


            /*$.ajax({

             type: "POST",

             url: "verifylogin/fb/",
             data: andmed,
             success: function(messageforyou)
             {

             window.location.href = "pealeht";

             }


             });
             }*/
        }
    }
}

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        //console.log('Good to see you, ' + response.name + '.' + response.id);
        //console.log(response);
        $.ajax({

            type: "POST",

            url: "verifylogin/fb/",
            data: response,
            success: function(messageforyou)
            {

                window.location.href = "pealeht";

            }


        });


    });

};

function getFBData () {
    FB.api('/me', function(data){
        //alert(data.name + data.id);
    })
};

function fbLogout() {
    FB.getLoginStatus(function(response) {
        console.log('here');
        console.log(response.status);
        console.log(response);
        if (response && response.status === 'connected') {
            console.log('and here');
            FB.logout(function(response) {
                document.location.reload();
            });
        }
    });
}

/*function fbLogout() {
    FB.logout(function (response) {
        //window.location.replace("http://stackoverflow.com"); is a redirect
       // window.location.reload();

    });
    $.ajax({

        type: "POST",

        url: "index/logout/",
        //data: andmed,
        success: function(messageforyou)
        {

            window.location.href = "index_out";

        }


    });
}
*/
(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));