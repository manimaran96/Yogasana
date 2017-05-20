<html>
<head>
<!--Declare the default home path-->
<?php
$home_dir ="http://localhost/yoga_site";
?>

<!--Bootstrap-->
<?php include('bootstrap.php'); ?>

<link href="<?php echo $home_dir?>/date_picker/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $home_dir?>/date_picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script>
$(document).ready(function()
{
	
        $("#name").bind("blur",name_empty);
		$("#mobile").bind("blur",mobile_empty);
		$("#email").bind("blur",email_empty);
		$("#date").bind("blur",date_empty);
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

</script>

<style>
body
{
background-color : #2c3e50;
font-family: 'Tangerine', serif;
}

.fb
{
background :url("<?php echo $home_dir?>/images/fb1.png") no-repeat 0px 0px;
text-indent :-100000px;
height :36px;
width :36px;
float :left;
}
.fb:hover
{
background :url("<?php echo $home_dir?>/images/fb1.png") no-repeat -36px 0px;
}
.twitter
{
background :url("<?php echo $home_dir?>/images/twitter.png") no-repeat 0px 0px;
text-indent :-100000px;
height :36px;
width :36px;
float :left;
}
.twitter:hover
{
background :url("<?php echo $home_dir?>/images/twitter.png") no-repeat -36px 0px;
}
.gplus
{
background :url("<?php echo $home_dir?>/images/gplus.png") no-repeat 0px 0px;
text-indent :-100000px;
height :36px;
width :36px;
float :left;
}
.gplus:hover
{
background :url("<?php echo $home_dir?>/images/gplus.png") no-repeat -36px 0px;
}



</style>

</head>
<body>
<center>
<!--Footer head-->
<div  style="background-color:#2d4878;color:white;" class="container-fluid">
  
  <!--Quick links-->
  <div class="col-md-4">
	<h3>Quick link</h3>
	<ul class="nav-stacked" style="color:black;font-size:17px;text-align:justify;margin-left:50px;">
	  <li><a href="<?php echo $home_dir?>/index.php" style="color:#000;">Home</a></li>
      <li><a href="<?php echo $home_dir?>/menu/yoga.php" style="color:#000;">Yoga</a></li>
      <li><a href="<?php echo $home_dir?>/menu/health_issue.php" style="color:#000;">Health Issue</a></li>
      <li><a href="<?php echo $home_dir?>/menu/r_and_d.php" style="color:#000;">Research & Development</a></li>
	  <li><a href="<?php echo $home_dir?>/menu/contact.php" style="color:#000;">Contact us</a></li>
    </ul>
  </div>
  
  <!--Contact us-->
  <div class="col-md-4" style="font-size:18px">
	<h3>Contact us</h3>
	<div style="color:#000;">
	<p>Yogasana</p>
	<p>yogasana@gmail.com</p>
	<p>937737775</p>
	</div>
	</br>
	</br>
  </div>
  
  <!--Fix appointment Form-->
  <div class="col-md-4">
	<h3>Fix appointment</h3>
  <form class="form-horizontal" style="margin-left:30px;" method="post" action="<?php echo $home_dir?>/fix_submit.php">
    <p id="err" style="color:red;"></p>
	<div class="form-group">
      <div class="col-sm-11">          
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
      </div>
    </div>
	<div class="form-group">
      <div class="col-sm-11">
        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile number" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-11">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
      </div>
    </div>
	
    <div class="form-group" style="margin-right:30px;margin-left:2px;">
	  <div class="input-group date form_date col-sm-12" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
        <input class="form-control" size="16" type="text" name="date" id="date" readonly placeholder="Select date">
        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-1 col-sm-9">
        <button type="submit" class="btn btn-info" name="fix_submit" id="fix_submit">Submit</button>
      </div>
    </div>
  </form>
  
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
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>
  
    
  </div>
  
</div>

<!--Footer tail-->
<div  style="background-color:black;color:white;"; class="container-fluid">
  
  <!--Hits-->
  <div class="col-md-4">
	<h3>Site Hits</h3>
	<p>
	
	<?Php
  $host="localhost";
  $username="root";
  $password="";
  $databasename="users";

  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  #   $stmt = mysql_query("select totalvisit from totalview where page='yourpage' ");
 
function hit_count()
{
  // gets the user IP Address
  $user_ip=$_SERVER['REMOTE_ADDR'];
  #$user_ip="198.4.35.2";
  $select = mysql_query("select * from hitcount");
  if(mysql_num_rows($select)>=1)
  {
	  $check_ip = mysql_query("select ip from hitcount where ip='$user_ip'");
	  if(mysql_num_rows($check_ip)==0)
	  {
		 $insert = mysql_query("insert into hitcount values('$user_ip','1')"); 
		 #$updateview = mysql_query("update totalview set totalvisit = totalvisit+1 where page='yourpage' ");
	  }
  }
  else
  {
	  $insert = mysql_query("insert into hitcount values('$user_ip','1')");
  }
  
  $sel = mysql_query("select *from hitcount");
  $count = mysql_num_rows($sel);	
	
	echo $count;
	
	
}
hit_count();
?>

		
	</p>
  </div>
  
  <!--License-->
  <div class="col-md-4">
	<h3>Copyrights</h3>
	<p>&copy yogasana</p>
	</br>
  </div>
  
  <!--Like-->
  <div class="col-md-4">
	<h3>Follow on</h3>
	<table style="width:45%;color:black;border-width: 0px 0px 0px 0px;">
 
	<tr>
		<th><div><a href="www.facebook.com" class="fb"></a></div></th>
		<th><div><a href="www.gmail.com" class="gplus"></a></div></th> 
		<th><div><a href="www.twitter.com" class="twitter"></a></div></th>
	</tr>
	</table>
  </div>
</div>
</center>
</body>
</html>