<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
<script>
    function sendDataToServer(userResponse,userFriends){
        /* Send the data using post and put the results in a div */
         $.ajax({
             url: "login",
             type: "post",
             data: {userdata: userResponse, userfriends:userFriends.data},
             success: function(){
                 console.log("success");
                 
             },
             error:function(){
                 alert("failure");
             }
         });        
    }
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
      console.log("============================");
      FB.api('/me', function(userresponse){
          console.log('And the response is...');
          FB.api('/me/friends',function(userfriends){
            console.log(userresponse);
            sendDataToServer(userresponse,userfriends);              
          });
      });
      
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      $('#status').html('');
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      $('#status').html('');
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '723721787690104',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        console.log(response);
        console.log('Successful login for: ' + response.name);
//      document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.name + '!';
        $('#status').append('<img src="http://graph.facebook.com/'+response.id+'/picture?type=square" />');
        
    });
    
    FB.api('/me/friends',function(response){
        var friendsSale = response.data;
        var picArray    = [];
        var len = friendsSale.length;

        for (var i = 0; i < len; i++){
            (function() {
                var j = i;
                picArray[i] = 'http://graph.facebook.com/'+friendsSale[i].id+'/picture?type=square';
//                FB.api(friendsSale[i].id+'/picture', function(response) {
//                    friendsSale[j].pictureUrl = response;
//                });
            })();
        }
        console.log(picArray);
        if(response && !response.error){
            console.log("My friends are...");
            console.log(response.data);
        }
    });
    
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope="public_profile,email,user_friends" onlogin="checkLoginState();">
</fb:login-button>

<fb:login-button autologoutlink="true"></fb:login-button>

<div id="status">
</div>

{{ HTML::Script('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
{{ HTML::Script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js') }}
</body>
</html>
