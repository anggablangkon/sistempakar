<!-- angga kurniawan -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login Admin</title>

    <?php include 'function/css.php'; ?>

  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" action="function/proseslogin.php">
		        <h2 class="form-login-heading">SISTEM PAKAR CERTAINTY FACTOR</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="username" name="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    

    <?php include 'function/js.php'; ?>

  </body>
</html>
