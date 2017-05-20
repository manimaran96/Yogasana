<html>
<head>

<!--Header-->
<?php
$page_title = "Yogasanam";
include('../header.php');
$location ="menu/yoga.php";
?>

<!--Boostrap-->
<?php include('../bootstrap.php'); ?>

<style>
.img_hover
{
	width:150px;
	height:150px
}
.img_hover:hover
{
	width:165px;
	height:165px
}
.con_hover
{
	width:150px;
	height:250px;
	color:white;
}

.con_hover:hover
{
	color:#5624d7;
}

</style>

</head>
<body>

<!--Full Content-->
<div class="container-fluid" style="text-align: justify;";>

  <!--Main Content-->
  <center>
  <div class="col-md-9">
	<h2 style="color:white;">Yoga Details</h2>
		<div class="col-md-4 con_hover">
		<h3>Padmasanam</h3>    
        <img src="yoga_img/1.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Balasanam</h3>    
        <img src="yoga_img/2.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Ustrasanam</h3>    
        <img src="yoga_img/3.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Uttanasanam</h3>    
        <img src="yoga_img/4.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Sarvangasanam</h3>    
        <img src="yoga_img/5.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Kapalbhatiyasanam</h3>    
        <img src="yoga_img/6.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Vajrasanam</h3>    
        <img src="yoga_img/7.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Vrikshasanam</h3>    
        <img src="yoga_img/8.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Dhanusurasanam</h3>    
        <img src="yoga_img/9.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
	
<!--Pager view-->
<div>
  <h2 style="color:white;">Page 1</h2><hr>
  <ul class="pager">
    <li class="previous"><a href="#">Previous</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul>
</div>

	
	
  </div>
  </center>
  
  <!--Site Content-->
  <div>
	
	<!--Recent items Content-->
	<div class="col-md-3" style="color:white;">
		<?php
		include '../recent_items.php';
 		?>
	</div>
  
   <!-- Calendar Content-->
   <div class="col-md-3" style="color:white;">
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