<?php
session_start();

$user_name = isset($_SESSION['email']) ? callme() : "";
function callme()
{
	$mail = $_SESSION['email'];
	include("login/database/db_conection.php");
	$get_user_name_query="select * from users WHERE user_email='$mail'";
    $run_query=mysqli_query($dbcon,$get_user_name_query);
	$query_row=mysqli_fetch_assoc($run_query);
	$user=$query_row['user_name'];
	
	return $user;
}
	
?>


<html>
<head>
<title><?php echo $page_title; ?></title>

<!--Declare the default home path-->
<?php
$home_dir ="http://localhost/yoga_site";
?>

<!--Bootstrap-->
<?php include('bootstrap.php'); ?>
<style>
.nav_val
{
	color:white;
}
.nav_val:hover
{
	color:blue;
}
</style>

</head>
<body>

<!--Header container-->
<div  style="background-color:#1abc9c"; class="container-fluid">
  <div>
  <div class="col-md-2"></div>
  <div class="col-md-2">
	<center><img class="img" src="<?php echo $home_dir?>/images/logo.png" style="margin:10px;" height="100px" width="150"></img></center>
  </div>
  </div>
  <div class="col-md-4">
	<center><h1 style="color:#000;font-size:70px;font-family: 'Tangerine', serif;">Yogasana</h1></center>
  </div>
  <div>
  <div class="col-md-2" style="color:#000;margin-left:30px;">
	</br><b>
	<h3>E-Mail</h3>
	<h4>yagasana@gmail.com</h4></b>
  </div>
  <div class="col-md-2"></div>
  </div>
</div>  
  
<!--Nav bar-->
<div class="container-fluid" style="background-color:#50216D;>

<nav class="navbar" style="margin:150px;">
 
    <ul class="nav navbar-nav" style="font-size:19px;"> <!-- center of nav bar position:relative;left:50%;transform:translatex(-50%);-->
      <li><a href="<?php echo $home_dir?>/index.php" class="nav_val">Home</a></li>
      <li><a href="<?php echo $home_dir?>/menu/yoga.php" class="nav_val">Yoga</a></li>
      <li><a href="<?php echo $home_dir?>/menu/health_issue.php" class="nav_val">Health Issue</a></li>
      <li><a href="<?php echo $home_dir?>/menu/r_and_d.php" class="nav_val">Research & Development</a></li>
	  <li><a href="<?php echo $home_dir?>/menu/contact.php" class="nav_val">Contact us</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<?php 
		if($user_name)
		{
			
			echo '<li><a class="nav_val" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;<b style="font-size:20px;">'.$user_name.'</b></a></li>';
			echo '<li><a class="nav_val" href="http://localhost/yoga_site/login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
		}
		else
		{
			echo '<li><a class="nav_val" href="http://localhost/yoga_site/login/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
			echo '<li><a class="nav_val" href="http://localhost/yoga_site/login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
		}
		?>
    </ul>
  
</nav>
</div>  
</body>
</html>