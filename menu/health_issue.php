<html>
<head>

<!--Header-->
<?php
$page_title = "Health Issue";
include('../header.php');
$location ="menu/r_and_d.php";
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
	<h2 style="color:white;">Health Issues</h2>
		<div class="col-md-4 con_hover">
		<h3>Head ache</h3>    
        <img src="health_issue_img/1.png" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Fracture</h3>    
        <img src="health_issue_img/2.png" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Tension</h3>    
        <img src="health_issue_img/3.png" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Cold</h3>    
        <img src="health_issue_img/4.png" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Vomit</h3>    
        <img src="health_issue_img/5.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Stomach ache</h3>    
        <img src="health_issue_img/6.png" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Vomit</h3>    
        <img src="health_issue_img/5.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Vomit</h3>    
        <img src="health_issue_img/5.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
		</div>
		
		<div class="col-md-4 con_hover">
		<h3>Vomit</h3>    
        <img src="health_issue_img/5.jpg" class="img-rounded img_hover" alt="Pulpit Rock">
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