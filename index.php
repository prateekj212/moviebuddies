<!DOCTYPE html>
<html>
<head>
    <title>Welcome to MovieBuddies</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://getbootstrap.com/examples/signin/signin.css"/>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>


    <div class="container">
    <div class="jumbotron">
      <h1>Movie Buddies</h1>
      <p>Movie reviews of your friends that matter</p>
    </div>
      <form role="form" class="form-signin" id='myform' style='max-width: 600px;'>
        <h4 class="form-signin-heading" style="text-align: center;">Please sign in using your facebook account</h4>
<!--        <input type="email" autofocus="" required="" placeholder="Email address" class="form-control">
        <input type="password" required="" placeholder="Password" class="form-control">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
        <button type="submit" class="btn btn-lg btn-primary btn-block">Facebook Login</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
    <script type="text/javascript">
        $('#myform').submit(function(e){
            e.preventDefault();
            window.location.href    =   'http://moviebuds/dashboard.php';
        });
    
    </script>
</body>

</html>