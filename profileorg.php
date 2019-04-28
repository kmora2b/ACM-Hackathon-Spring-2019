<?php
    include("base.php"); 
?>
<div class = 'profile'> 
	<div class='profile-info'>
		<img class = 'user-img'src="Images\\Profile\\c4k.jpg">
		<h2 class ='profile-name'>Cleats 4 Kids</h2>

				<h3>Looking For</h3>
					<h4>Teaching</h4>
					<h4>Communication</h4>
					<h4>Excel</h4>
			
	</div>


	<!--- TODO: Dynamic based on db results--->
	<div class='profile-stats'>
		<h1>Goals</h1>
		
		<div class='profile-goals'>
			<h3>Acquire 20 new volunteers	
				<progress class='goal' value="19" max="20"> </progress>		
			</h3>
			
			<!--- TODO: Delete when db is implemented-->
			<h3>Fundraise $100 	
				<progress class ='goal'value="75" max="100"> </progress>		
			</h3>
			
			<h3>Colloborate with two other organizations 	
				<progress class ='goal'value="1" max="2"> </progress>		
			</h3>
			<h2>Total Volunteer Hours: 350</h2>
		</div>
		
	</div>
	
			<div class='profile-badges'>
			<h1>Badges</h1>
				<img class='profile-badges-img' src="Images/badges/soccerball.png">
				<img class='profile-badges-img' src="Images/badges/goldstar.png">
		</div>
</div>
