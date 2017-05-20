<h3 style="border-color:#446CB3;border-style:solid;border-bottom:-3px;border-top:0px;border-left:0px;border-right:0px;">Recent items</h3>
	<marquee direction="up" style="margin-bottom:20px;" scrollamount="5">
		<p><a href="#">Event of the week</a></p>
		<p><a href="#">Yagasana</a></p>
		<p><a href="#">New Health issues</a></p>
		<p><a href="#">Research teams</a></p>
		<p><a href="#">Next meet</a></p>
		<p><a href="#">New Doctors</a></p>
		<p><a href="#">Updated Yagasana</a></p>
	</marquee>
<script>	
	$(function() {
    $('marquee').mouseover(function() {
        $(this).attr('scrollamount',0);
    }).mouseout(function() {
         $(this).attr('scrollamount',5);
    });

});
</script>