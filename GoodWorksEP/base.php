<!DOCTYPE html>
<html>
    <head>
        <title>Good Works EP</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <meta name = "description" content = "This website is for the Good Works El Paso nonprofit
            in El Paso, Texas. Here we will display current events, news, and show the world our beautiful city.">
        <meta name = "keywords" content = "Community, Volunteer, El Paso">
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
    </head>
    <body>
        <nav>
            <div class = "topNav" id = "myTopNav">
                <h3 class = "topNavItem"><strong><a href = "index.php">Home</a></strong></h3>
                <!---<h3 class = "topNavItem"><strong><a href = "who-we-are.php">Who We Are</a></strong></h3>--->
                <h3 class = "topNavItem"><strong><a href = "calendar.php">Community Calendar</a></strong></h3> 
                <h3 class = "topNavItem"><strong><a href = "agendas.php">Find Events</a></strong></h3>
                <!--<h3 class = "topNavItem"><strong><a href = "meet-the-officers.php">Meet The Officers</a></strong></h3>-->
                <h3 class = "topNavItem"><strong><a href = "gallery.php">Gallery</a></strong></h3>
                <!--<h3 class = "topNavItem"><strong><a href = "contact-us.php">Contact Us</a></strong></h3>-->
				<h3 class = "topNavItem"><strong><a href = "gallery.php">Profile</a></strong></h3>

                <h3 class = "topNavItem"><strong><a href = "#" class = "menuButton" onclick = "toggleNav()">&#x2630;</a></strong></h3>
				
            </div>
        </nav>

        <div class = "topNavBuffer"></div>
        
        <div class = "wrapper">
            
            <img src = "Images/Header/goodworksep.png" class = "logo">
            <h2 class = "district">Connecting the inner kindness of El Paso, Texas<br> </h2>

            <h3 class = "date">
                <?php
                    echo date("l\, F jS\, Y") . "   </br>";
                ?>
            </h3>

        </div>
        

        <script>
            function toggleNav() {
                console.log("Hit");
                var x = document.getElementById("myTopNav");
                console.log(x);
                if (x.className === "topNav") {
                    x.className = "topNavResponsive";
                } else {
                    x.className = "topNav";
                }
            }
        </script>
    </body>
</html> 
