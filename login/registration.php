
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registration</title>
	
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
	.succ
	{
        margin-top: 20px;
	}
</style>
<body>
<center><h1 style="color:green;">Registration</h1></center><hr>
<div class="container"><!-- container class is used to centred  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of columns in the grid also use for medium and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Username" name="name" type="text" autofocus required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Enter E-mail" name="email" type="email" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Password" name="pass" type="password" required>
                            </div>
							<div class="form-group">
                                <input class="form-control" placeholder="Re-Enter Password" name="repass" type="password" required>
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_email=$_POST['email'];//same
	$user_pass=$_POST['pass'];//same
	$user_repass=$_POST['repass'];//same


	
	if($user_pass != $user_repass)
    {
        echo"<script>alert('Please enter the Same password')</script>";
		exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
		echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
		exit();
    }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {	
		
	    #echo '<div class="alert alert-success alert-dismissable succ">';
		#echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
		#echo '<strong>Success!</strong> You are registered.';
		#echo '</div>';

		echo"<script>alert('You Registered Successful..!')</script>";
        echo"<script>window.open('http://localhost/yoga_site/login/login.php','_self')</script>";
    }

}

?>
