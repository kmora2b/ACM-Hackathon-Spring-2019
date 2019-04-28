<?php
    include("base.php");
?>
<?php 
     $dummydata = array(array("Images\IMG_7767.jpg","Food Drive","April 29th, 2019", "Eastwood High School", "Volunteers needs for food drive."), 
                    array("Images\4e931b10a084e.image.jpg","Charity Drive","April 30th, 2019", "Album Park", "Help needed at Album Park for annual charity drive."), 
                    array("Images\20180515_140400.jpg","Community Night","April 30th, 2019", "Esperanza Acosta Moreno Library", "Volunteers needed for community night."), 
                    array("Images\franklin-732x360.jpg","Franklin Mountains Event","May 20th, 2019", "Franklin Mountains State Park", "Volunteered needed to help clean litter and raise awareness."),);
                    
    echo "<div class = \"feed\">";
    for ($i=0; $i < 5; $i++){ 
        
    echo "   <div class = \"feedEntry\">";
    echo "       <img class = \"feedEntryPic\" src = \"".$dummydata[$i][0]."\">";
    echo "       <h3 class = \"feedEntryTitle\"><strong>".$dummydata[$i][1]."</strong></h3>";
    echo "       <h4 class = \"feedEntryTimeDate\"><strong>".$dummydata[$i][2]."<br>".$dummydata[$i][3]."</strong></h4>";
    echo "       <p class = \"feedEntryText\">".$dummydata[$i][4]."<p>";
    echo "   </div>";
    }
           
?>
