<html>
<head>
<?php
$home_dir ="http://localhost/yoga_site";
$location ="menu/contact.php";
?>

<!--Header-->
<?php
$page_title = "Contact &amp Appointment Form ";
include('../header.php');
?>

<!--Bootstrap-->
<?php include('../bootstrap.php'); ?>

<link href="<?php echo $home_dir?>/date_picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">


<style>
 .con
 {
	height:160px; 
 }
 .img_size
 {
	 height:110px;
	 width:110px;
 }
 </style>
 
 <script>
$(document).ready(function()
{
	
        $("#name").bind("blur",name_empty);
		$("#mobile").bind("blur",mobile_empty);
		$("#email").bind("blur",email_empty);
		$("#date").bind("blur",date_empty);
		$("#time").bind("blur",time_empty);
		$("#reason").bind("blur",reason_empty);
});
	function name_empty()	
	{
		var n=$("#name").val();
		if(n=="")
		{
		$("#err").html("Fill the name");
		}
		else
		{
			$("#err").html("");
		}
	}
	function mobile_empty()	
	{	
		var m=$("#mobile").val();
		if(m=="")
		{
		$("#err").html("Fill the mobile number");
		}
		else
		{
			$("#err").html("");
		}
	}
	function email_empty()	
	{	
		var e=$("#email").val();
		if(e=="")
		{
		$("#err").html("Fill the E-mail");
		}
		else
		{
			$("#err").html("");
		}
	}
	function date_empty()	
	{	
		var d=$("#date").val();
		if(d=="")
		{
		$("#err").html("Fill the date");
		}
		else
		{
			$("#err").html("");
		}
    }
	function time_empty()	
	{
		var t=$("#time").val();
		if(t=="")
		{
		$("#err").html("Fill the time");
		}
		else
		{
			$("#err").html("");
		}
	}
	function reason_empty()	
	{
		var r=$("#reason").val();
		if(r=="")
		{
		$("#err").html("Fill the reason");
		}
		else
		{
			$("#err").html("");
		}
	}

</script>
 
</head>
<body>

<!--Full Content-->

<div class="container-fluid" style="background-color:white;text-align: justify;";>

  <!--Main Content-->
  <div class="col-md-9">
  <div class="col-md-16">
	<center><h3><b>Appointment Form</b></h3></center><hr><br>
	<p id="err" style="color:red;"></p>
  </div>
	<div class="col-md-3"></div>
	<div class="col-md-8">
  <form class="form-horizontal" method="post" action="<?php echo $home_dir?>/menu/contact.php">
    <div class="form-group">
      <div class="col-sm-8">          
	    <label>Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
      </div>
    </div>
	<div class="form-group">
      <div class="col-sm-8">
	    <label>Mobile no:</label>
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-8">
	    <label>E-Mail:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
      </div>
    </div>
	
    <div class="form-group" style="margin-right:30px;margin-left:2px;">
	  <label>Date:</label>
	  <div class="input-group date form_date col-sm-8" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input1" data-link-format="yyyy-mm-dd">
        <input class="form-control" size="16" type="text" id="date" name="date" readonly placeholder="Select date">
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
      </div>
    </div>
	
	<div class="form-group" style="margin-right:30px;margin-left:2px;">
	  <label>Time:</label>
	  <div class="input-group date form_time col-sm-8" data-date="" data-date-format="HH:00 p" data-link-field="dtp_input3" data-link-format="">
        <input class="form-control" size="16" type="text" id="time" name="time" readonly placeholder="Select Time">
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
      </div>
	</div>
	
	<div class="form-group">
      <div class="col-sm-8">
	    <label>Reason for appointment:</label>
	    <textarea class="form-control" rows="2" id="reason" name="reason" placeholder="Enter reason for appointment" required></textarea>
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-0 col-sm-8">
        <button type="submit" class="btn btn-info btn-block" name="final_submit">Submit</button>
      </div>
    </div>
	</br>
  </form>
  </div>
  <div class="col-md-3"></div>
<!--Date Picker script-->
<script type="text/javascript" src="<?php echo $home_dir?>/date_picker/main/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo $home_dir?>/date_picker/main/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $home_dir?>/date_picker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo $home_dir?>/date_picker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
	$('.form_date').datetimepicker({
        language:  'en',
		pickerPosition: "top-left",
        weekStart: 1,
        todayBtn:  0,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	
	$('.form_time').datetimepicker({
        language:  'en',
		pickerPosition: "top-left",
        weekStart: 0,
        todayBtn:  0,
		autoclose: 1,
		todayHighlight: 0,
		startView: 1,
		minView: 1,
		showMeridian: 1,
		forceParse: 0
    });
</script>
		
  </div>
  
  <!--Site Content-->
  <div>
	
	<!--Recent items Content-->
	<div class="col-md-3">
		<?php
		include '../recent_items.php';
 		?>
	</div>
  
   <!-- Calendar Content-->
   <div class="col-md-3">
	<h3 style="border-color:#446CB3;border-style:solid;border-bottom:-3px;border-top:0px;border-left:0px;border-right:0px;">Calendar</h3>
	<center>
	<?php
		include '..\calendar\cal.php';
	?>
	</center>
	</br>
  </div>
  
  </div>
  
  
 </div>
 
  </hr>
<!--Footer-->
<?php
include('..\footer.php');
?>
</body>
</html>



<?php
include("../login/database/db_conection.php");//make connection here
if(isset($_POST['final_submit']))
{
    $user_name=$_POST['name'];//here getting values from the post array after submitting the form.
    $user_mobile=$_POST['mobile'];//same
	$user_mail=$_POST['email'];//same
	$user_date=$_POST['date'];//same
	$user_time=$_POST['time'];
	$user_reason=$_POST['reason'];
    
	if($user_date == '')
    {
        echo"<script>alert('Please select the date')</script>";
		exit();
    }
	if($user_time == '')
    {
        echo"<script>alert('Please select the time')</script>";
		exit();
    }
	if(strlen($user_mobile) < 10 && strlen($user_mobile) > 10)
    {
        echo"<script>alert('Please enter correct mobile')</script>";
		exit();
    }

//insert the user into the database.

    $insert_fix_app="insert into final_appointment (name,mobile,mail,date,time,reason) VALUE ('$user_name','$user_mobile','$user_mail','$user_date','$user_time','$user_reason')";
    if(mysqli_query($dbcon,$insert_fix_app))
    {	
	    echo"<script>alert('Your Appointment Confirmed..!')</script>";
		echo"<script>window.open('http://localhost/yoga_site/index.php','_self')</script>";
    }
	else
	{
		echo"<script>alert('Try again...! Your Appointment Not Confirmed..!')</script>";
		echo"<script>window.open('http://localhost/yoga_site/menu/contact.php','_self')</script>";
	}

}
