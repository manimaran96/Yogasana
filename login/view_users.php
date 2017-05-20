<?php
session_start();

if(!$_SESSION['admin_name'])
{

    header("Location: admin_login.php");//redirect to admin login page to secure the view users page without login access.
}

?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>View Users</title>
</head>
<?php
$home_dir ="http://localhost/yoga_site";
?>
<?php include('../bootstrap.php'); ?>
<style>
    .login-panel 
	{
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>
<div class="container-fluid">
<div class="table-scrol">
    <h1 align="center" style="color:green;">All Details</h1><hr>
<center><h3><b>Don't Forget Logout !</b> </b><a href="admin_logout.php" style="color:red;">Admin Logout here</a></h3></center>
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

	<center><h2 style="color:#7a2325"><b><u>1. Users details</u></b></h2></center>
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>User Id</th>
            <th>User Name</th>
            <th>User E-mail</th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from users";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_name=$row[0];
            $user_email=$row[2];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
        </div>
		
		
		
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

	<center><h2 style="color:#7a2325"><b><u>2. Fix appointment details</u></b></h2></center>
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Name</th>
            <th>Mobile No</th>
			<th>E-mail</th>
            <th>Fix Date</th>
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from fix_appointment";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $fix_name=$row[0];
            $fix_mobile=$row[1];
            $fix_mail=$row[2];
            $fix_date=$row[3];

        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $fix_name;  ?></td>
            <td><?php echo $fix_mobile;  ?></td>
            <td><?php echo $fix_mail;  ?></td>
            <td><?php echo $fix_date;  ?></td>
            <td><a href="delete.php?del_fix=<?php echo $fix_mail ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
        </div>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->

	<center><h2 style="color:#7a2325"><b><u>3. Final appointment details</u></b></h2></center>
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Name</th>
            <th>Mobile No</th>
			<th>E-mail</th>
            <th>Date</th>
            <th>Time</th>
            <th>Reason</th>
		
		</tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from final_appointment";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $fix_name=$row[0];
            $fix_mobile=$row[1];
            $fix_mail=$row[2];
            $fix_date=$row[3];
            $fix_time=$row[4];
            $fix_reason=$row[5];

        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $fix_name;  ?></td>
            <td><?php echo $fix_mobile;  ?></td>
            <td><?php echo $fix_mail;  ?></td>
            <td><?php echo $fix_date;  ?></td>
            <td><?php echo $fix_time;  ?></td>
            <td><?php echo $fix_reason;  ?></td>
            <td><a href="delete.php?del_final=<?php echo $fix_mail ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
        </div>

		
</div>
</div>

</body>

</html>
