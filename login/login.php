<?php
session_start();//session starts here

?>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
 
		$_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.
		
		#setcookie("username", $user_email, time() + (86400 * 30)); // 86400 = 1 day
		
	    echo "<script>window.open('http://localhost/yoga_site/index.php','_self')</script>";
	}
	else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login</title>
	
<?php
$home_dir ="http://localhost/yoga_site";
?>
<?php include('../bootstrap.php'); ?>

</head>
<style>
    .login-panel 
	{
        margin-top: 50px;
	}
</style>

<body>

<center><h1 style="color:green;">Login</h1></center><hr>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
					<center><b>You Don't registered ?</b> <br></b><a href="registration.php">Register here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

