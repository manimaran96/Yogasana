<?php

include("login/database/db_conection.php");//make connection here
if(isset($_POST['name'])&&!empty($_POST['name']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_mobile=$_POST['mobile'];//same
	$user_mail=$_POST['email'];//same
	$user_date=$_POST['date'];//same


	
	if($user_date == '')
    {
        echo"<script>alert('Please select the date')</script>";
		echo"<script>window.open('http://localhost/yoga_site/index.php','_self')</script>";
		exit();
	}
	
	if(strlen($user_mobile) < 10 && strlen($user_mobile) > 10)
    {
        echo"<script>alert('Please enter correct mobile')</script>";
		exit();
    }

//insert the user into the database.
    $insert_fix_app="insert into fix_appointment (name,mobile,email,date) VALUE ('$user_name','$user_mobile','$user_mail','$user_date')";
    if(mysqli_query($dbcon,$insert_fix_app))
    {	
		echo"<script>alert('You Fix the Appointment Successfully..!')</script>";
		echo"<script>window.open('http://localhost/yoga_site/index.php','_self')</script>";
    }

}