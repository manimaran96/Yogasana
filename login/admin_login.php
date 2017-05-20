<?php
session_start();//session starts here

?>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Admin Login</title>
	
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
<center><h1 style="color:brown;">Admin</h1></center><hr>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
					<h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="admin_login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="" required>
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.
{
    $admin_name=$_POST['admin_name'];
    $admin_pass=$_POST['admin_pass'];

    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";

    $run_query=mysqli_query($dbcon,$admin_query);

    if(mysqli_num_rows($run_query)>0)
    {

        $_SESSION['admin_name']=$admin_name;
		$admin = $_SESSION['admin_name'];
		#setcookie("username",$admin,time()+20);
		echo "<script>window.open('view_users.php','_self')</script>";
    }
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}
}

?>