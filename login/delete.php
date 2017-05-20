<?php

include("database/db_conection.php");

if(isset($_GET['del']))
{
$delete_id=$_GET['del'];
$delete_query_id ="delete  from users WHERE id='$delete_id'";//delete query
$run_id=mysqli_query($dbcon,$delete_query_id);
if($run_id)
{
//javascript function to open in the same window
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";
}
}

if(isset($_GET['del_fix']))
{
$delete_fix=$_GET['del_fix'];
$delete_query_fix="delete  from fix_appointment WHERE email='$delete_fix'";//delete query
$run_fix=mysqli_query($dbcon,$delete_query_fix);
if($run_fix)
{
//javascript function to open in the same window
    echo "<script>window.open('view_users.php?deleted=".$delete_fix." has been deleted','_self')</script>";
}
}

if(isset($_GET['del_final']))
{
	
$delete_final=$_GET['del_final'];
$delete_query_final="delete  from final_appointment WHERE mail='$delete_final'";//delete query
$run_final=mysqli_query($dbcon,$delete_query_final);
if($run_final)
{
//javascript function to open in the same window
    echo "<script>window.open('view_users.php?deleted=".$delete_final." has been deleted','_self')</script>";
}
}


?>