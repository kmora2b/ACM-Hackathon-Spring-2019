<?php
    include("base.php"); 
?>
<div class = 'profile'> 
	<div class='profile-info'>
		<img class = 'user-img'src="Images\\Profile\\jane.jpg">
		<h2 class ='profile-name'>Jane Doe</h2>
			
				<h3>Skills</h3>
					<h4>Web Development</h4>
					<h4>Communication</h4>
					<h4>Fundraisers</h4>

			
	</div>


	<!--- TODO: Dynamic based on db results--->
	<div class='profile-stats'>
		<h1>Goals</h1>
		
		<div class='profile-goals'>
			<h3>Volunteer in three different categories 	
				<progress class='goal' value="1" max="3"> </progress>		
			</h3>
			
			<!--- TODO: Delete when db is implemented-->
			<h3>Educate the community in technology 	
				<progress class ='goal'value="8" max="10"> </progress>		
			</h3>
			
			<h3>Do 5 new pamphlets 	
				<progress class ='goal'value="3" max="5"> </progress>		
			</h3>
			
			<h3>Help in the agriculture category 6 times 	
				<progress class ='goal'value="3" max="6"> </progress>		
			</h3>
			<h2>Total Hours: 100</h2>
		</div>
		
	</div>
	
			<div class='profile-badges'>
			<h1>Badges</h1>
				<img class='profile-badges-img' src="Images/badges/paintbrush.png">
				<img class='profile-badges-img' src="Images/badges/soccerball.png">
				<img class='profile-badges-img' src="Images/badges/speechbubble.png">
				<img class='profile-badges-img' src="Images/badges/dog.png">
		</div>
</div>