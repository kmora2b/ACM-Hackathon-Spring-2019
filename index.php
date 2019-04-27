<?php
    include("base.php");
?>
<?php 
     $dummydata = array(array("Images\badges\bird.png","Title Of Event","Date Of Event", "Location Of Event", "This is text describing the event in great lengthy detail1."), 
                    array("Images\badges\bluestar.png","Title Of Event","Date Of Event", "Location Of Event", "This is text describing the event in great lengthy detail2."), 
                    array("Images\badges\goldstar.png","Title Of Event","Date Of Event", "Location Of Event", "This is text describing the event in great lengthy detail3."), 
                    array("Images\badges\hammer.png","Title Of Event","Date Of Event", "Location Of Event", "This is text describing the event in great lengthy detail4."), 
                    array("Images\badges\\tree.png","Title Of Event","Date Of Event", "Location Of Event", "This is text describing the event in great lengthy detail5."),);
                    
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