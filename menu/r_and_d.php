<html>
<head>

<?php
$home_dir ="http://localhost/yoga_site";
$location ="menu/r_and_d.php";
?>

<!--Header-->
<?php
$page_title = "Research &amp Development";
include('../header.php');
?>
<?php include('../bootstrap.php'); ?>
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
</head>
<body>

<!--Full Content-->

<div class="container-fluid" style="background-color:white;text-align: justify;";>

  <!--Main Content-->
  <div class="col-md-9">
	<center><h3><b>Research and Development</b></h3></center><br>
		
	<div>
		<div class="col-md-2 con">
		    <center><img src="r_and_d_img/man2.jpg" class="img-circle img_size" alt="Pulpit Rock" ></center>
		</div>
		<div class="col-md-4 con">
			<h3>Dr.Name</h3>
			<p>Dr.Information</p>			
        </div>
	</div>		
	<div>
        <div class="col-md-2 con">
            <center><img src="r_and_d_img/man3.png" class="img-circle img_size" alt="Pulpit Rock" ></center>
		</div>
		<div class="col-md-4 con">
		   <h3>Dr.Name</h3>
           <p>Dr.Information</p>
        </div>
	</div>
	<div>
		<div class="col-md-2 con">
		    <center><img src="r_and_d_img/man2.jpg" class="img-circle img_size" alt="Pulpit Rock" ></center>
		</div>
		<div class="col-md-4 con">
			<h3>Dr.Name</h3>
			<p>Dr.Information</p>
        </div>
	</div>
	<div>
        <div class="col-md-2 con">
            <center><img src="r_and_d_img/man3.png" class="img-circle img_size" alt="Pulpit Rock" ></center>
		</div>
		<div class="col-md-4 con">
		   <h3>Dr.Name</h3>
           <p>Dr.Information</p>	
        </div>
	</div>
	<div>
		<div class="col-md-2 con">
		    <center><img src="r_and_d_img/man2.jpg" class="img-circle img_size" alt="Pulpit Rock" ></center>
		</div>
		<div class="col-md-4 con">
			<h3>Dr.Name</h3>
			<p>Dr.Information</p>
        </div>
	</div>
	<div>
        <div class="col-md-2 con">
            <center><img src="r_and_d_img/man3.png" class="img-circle img_size" alt="Pulpit Rock" ></center>
		</div>
		<div class="col-md-4 con">
		   <h3>Dr.Name</h3>
           <p>Dr.Information</p>	
        </div>
	</div>	
		
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