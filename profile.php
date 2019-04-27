<?php
    include("base.php"); 
?>

<div class='profile-info'>
	<img src="Images/profile/user.png">
	<h2>John Doe</h2>
		<div class='profile-skills'>
			<h3>Skills</h3>
			<h4>
				<ul>
					<li>Web Developer</li>
					<li>Origami</li>
					<li>Communications</li>
				</ul>
			</h4>
		</div>
</div>

<div class='profile-stats'>
	<h2>Total Hours: 23</h2>
	
	<div class='profile-goals'>
		<h3>Volunteer 100 hours 	
			<progress value="22" max="100"> </progress>		
		</h3>
		
		<!--- TODO: Delete when db is implemented-->
		<h3>Meet 2 new friends 	
			<progress value="90" max="100"> </progress>		
		</h3>
	</div>
	
	<div class='profile-badges'>
		<img src="Images/badges/bird.png" style='border-radius: 50%;'>
		<img src="Images/badges/tree.png">
	</div>
</div>