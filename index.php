<html>
<head>

<!--Declare the default home path-->
<?php
$home_dir ="http://localhost/yoga_site";
$location ="index.php";
?>

<!--Header-->
<?php
$page_title = "Home";
include('header.php');
?>

<style>
.con
{
	background-color:white;
	color:black;
	text-align: justify;
}
</style>

</head>
<body>

<!--Full Content-->

<div class="container-fluid con">

  <!--Main Content-->
  <div class="col-md-9">
    
	<!--Content 1-->
	<div class="col-md-12">
	   <center><h3>What are we?</h3></center><hr>
	</div>
	
	<div class="col-md-1"></div>
	<div class="col-md-2">
	   <center><img class="img-circle" src="<?php echo $home_dir?>/images/logo1.jpg" height="150px" width="150"></img></center>
	</div>
	<div class="col-md-8">
	   <p>
		What is Yoga?
		Derived from the Sanskrit word yuj, Yoga means union of the individual consciousness or soul with the Universal Consciousness or Spirit. Yoga is a 5000-year-old Indian body of knowledge. Though many think of yoga only as a physical exercise where people twist, turn, stretch, and breathe in the most complex ways, these are actually only the most superficial aspect of this profound science of unfolding the infinite potentials of the human mind and soul. The science of Yoga imbibes the complete essence of the Way of Life.
		As Gurudev Sri Sri Ravi Shankar says, “Yoga is not just exercise and asanas. It is the emotional integration and spiritual elevation with a touch of mystic element, which gives you a glimpse of something beyond all imagination.”
	   </p>
	   <br>
	</div>
	<div class="col-md-1"></div>

	<!--Content 2-->
	<div class="col-md-12">
	   <center><h3>Our Methods</h3></center><hr>
	</div>
	
	<div class="col-md-1"></div>
	<div class="col-md-8">
	   <p>
		What is Yoga?
		Derived from the Sanskrit word yuj, Yoga means union of the individual consciousness or soul with the Universal Consciousness or Spirit. Yoga is a 5000-year-old Indian body of knowledge. Though many think of yoga only as a physical exercise where people twist, turn, stretch, and breathe in the most complex ways, these are actually only the most superficial aspect of this profound science of unfolding the infinite potentials of the human mind and soul. The science of Yoga imbibes the complete essence of the Way of Life.
		As Gurudev Sri Sri Ravi Shankar says, “Yoga is not just exercise and asanas. It is the emotional integration and spiritual elevation with a touch of mystic element, which gives you a glimpse of something beyond all imagination.”
	   </p>
	</div>
	<div class="col-md-2">
	   <center><img class="img-circle" src="<?php echo $home_dir?>/images/logo1.jpg" height="150px" width="150"></img></center>
	</div>
	<div class="col-md-1"></div>
	
	
  
  </div>
  
  <!--Site Content-->
  <div>
	
	<!--Recent items Content-->
	<div class="col-md-3">
		<?php
		include 'recent_items.php';
 		?>
	</div>
  
   <!-- Calendar Content-->
   <div class="col-md-3">
	<h3 style="border-color:#446CB3;border-style:solid;border-bottom:-3px;border-top:0px;border-left:0px;border-right:0px;">Calendar</h3>
	<center>
	<?php
	include 'calendar\cal.php';
 
	?>
	</center>
	</br>
  </div>
  
  </div>
  
  
 </div>
 
  </hr>
<!--Footer-->
<?php
include('footer.php');
?>

</body>
</html>