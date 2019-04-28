<?php
    include("base.php"); 
?>
<div class = 'profile'> 
	<div class='profile-info'>
		<img class = 'user-img'src="Images/Profile/user.png">
		<h2 class ='profile-name'>John Doe</h2>
			
				<h3>Skills</h3>
					<h4>SKILL</h4>

			
	</div>


	<!--- TODO: Dynamic based on db results--->
	<div class='profile-stats'>
		<h1>Goals</h1>
		
		<div class='profile-goals'>
			<h3>Volunteer 100 hours 	
				<progress class='goal' value="22" max="100"> </progress>		
			</h3>
			
			<!--- TODO: Delete when db is implemented-->
			<h3>Meet 2 new friends 	
				<progress class ='goal'value="1" max="2"> </progress>		
			</h3>
			
			<h3>Network with 20 people 	
				<progress class ='goal'value="11" max="20"> </progress>		
			</h3>
			<h2>Total Hours: 23</h2>
		</div>
		
	</div>
	
			<div class='profile-badges'>
			<h1>Badges</h1>
				<img class='profile-badges-img' src="Images/badges/hammer.png">
				<img class='profile-badges-img' src="Images/badges/computer.png">
		</div>
</div>