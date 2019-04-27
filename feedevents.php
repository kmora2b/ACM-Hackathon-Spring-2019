<?php
    include("base.php");
?> <
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<div class = "minutesSection">
        <h1 class = "mainTitle"> Events </h1>
        <div class = "divider"></div>
        <h3 class = "file"><img src = "Images/Agenda/doc.jpg" class = "docPic">
            <a href = "Documents/1-11-18 TWNA Minutes (Officer Meeting).pdf" target = "_blank">
            May 11th, 2019 Franklin Mountains Exploration </a></h3>
        <h3 class = "file"><img src = "Images/Agenda/doc.jpg" class = "docPic">
            <a href = "Documents/3-6-18 TWNA Minutes (Officer Meeting).pdf" target = "_blank">
            March 6th, 2019 Animal Shelter Volunteer Event </a></h3>
        <h3 class = "file"><img src = "Images/Agenda/doc.jpg" class = "docPic">
            <a href = "Documents/4-3-18 TWNA Minutes (General Meeting).pdf" target = "_blank">
            June 3rd, 2019 El Dorado High School Band Fundraiser </a></h3>
        <h3 class = "file"><img src = "Images/Agenda/doc.jpg" class = "docPic">
            <a href = "Documents/6-5-18 TWNA Minutes (General Meeting).pdf" target = "_blank">
            June 5th, 2019 UTEP Alumni Gathering </a></h3>
		</div>
		<?php 
		$events = array("Franklin Mountains Exploration", "ESW","Trans Mountain Junction","2019-04-27");
		$events2 = array("UTEP Alumni Reunion", "UTEP","UGLC","2019-04-20");
		
			echo "<div class = 'event'> 
			<h2>
				<img src = 'Images/Agenda/doc.jpg' class = 'docPic'>".$events[0]."</h2>
				<h3>Organization: ".$events[1]."
				<h3><i class='material-icons' style='font-size:20px'>place</i>Location: ".$events[2]."</h3>
				<h3><i class='material-icons' style='font-size:20px'>rate_review</i>Date: ".$events[3]."</h3>
			<button>Join</button> 
			
			</div>";
			
			//TODO: Delete this when db is implmented
			echo "<div class = 'event'> 
			<h2>
				<img src = 'Images/Agenda/doc.jpg' class = 'docPic'>".$events2[0]."</h2>
				<h3>Organization: ".$events[1]."
				<h3><i class='material-icons' style='font-size:20px'>place</i>Location: ".$events2[2]."</h3>
				<h3><i class='material-icons' style='font-size:20px'>rate_review</i>Date: ".$events2[3]."</h3>
			<button>Join</button> 
			
			</div>";
			
		
		?>
	
  
	
	