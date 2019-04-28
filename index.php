<?php
    include("base.php");
?>
<?php 
     $dummydata = array(array("Images\ehs.jpg","Food Drive","April 29th, 2019", "Eastwood High School", "Volunteers needed for food drive. 14/20 filled spots. From 2:30 PM - 3:30 PM."), 
                    array("Images\park.jpg","Charity Drive","April 30th, 2019", "Album Park", "Help needed at Album Park for annual charity drive. 34/40 filled spots. From 8 AM - 12 PM."), 
                    array("Images\library.jpg","Community Night","April 30th, 2019", "Esperanza Acosta Moreno Library", "Volunteers needed for community night."), 
                    array("Images\frank.jpg","Franklin Mountains Event","May 20th, 2019", "Franklin Mountains State Park", "Volunteers needed to help clean litter and raise awareness."),);
                    
    echo "<div class = \"feed\">";
    for ($i=0; $i < 4; $i++){ 
        
    echo "   <div class = \"feedEntry\">";
    echo "       <img class = \"feedEntryPic\" src = \"".$dummydata[$i][0]."\">";
    echo "       <h3 class = \"feedEntryTitle\"><strong>".$dummydata[$i][1]."</strong></h3>";
    echo "       <h4 class = \"feedEntryTimeDate\"><strong>".$dummydata[$i][2]."<br>".$dummydata[$i][3]."</strong></h4>";
    echo "       <p class = \"feedEntryText\">".$dummydata[$i][4]."<p>";
    echo "   </div>";
    }
           
?>
