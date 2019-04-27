<?php
    include("base.php");
?> <
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
		$events = array("Franklin Mountains Exploration", "Trans Mountain Junction","2019-04-27");
		
			echo "<div class = 'event'> 
			<h2>
				<img src = 'Images/Agenda/doc.jpg' class = 'docPic'>".$events[0]."</h2> 
				<h3>Location: ".$events[1]."</h3>
				<h3>Date: ".$events[2]."</h3>
			<button>Join</button> 
			
			</div>";
			
		
		?>
	
  
	
	