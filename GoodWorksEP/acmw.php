<!DOCTYPE html>
<html>
    <head>
        <title>Travis White NA</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <meta name = "description" content = "This website is for the Travis White Neighborhood Association
            in El Paso, Texas. Here we will display current events, news, and show the world our beautiful neighborhood.">
        <meta name = "keywords" content = "Travis White, Neighborhood, Association, El Paso">
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.css">
    </head>
    <body>
        <nav>
            <div class = "topNav" id = "myTopNav">
                <h3 class = "topNavItem"><strong><a href = "index.php">Home</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "who-we-are.php">Who We Are</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "calendar.php">Calendar</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "agendas.php">Agendas</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "meet-the-officers.php">Meet The Officers</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "gallery.php">Gallery</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "contact-us.php">Contact Us</a></strong></h3>
                <h3 class = "topNavItem"><strong><a href = "#" class = "menuButton" onclick = "toggleNav()">&#x2630;</a></strong></h3>
            </div>
        </nav>

        <div class = "topNavBuffer"></div>
        
        <div class = "wrapper">
            
            <img src = "Images/Header/Travis White NA Logo.jpg" class = "logo">
            <h2 class = "district">Part of District 7 in El Paso, Texas<br> Representative Henry Rivera</h2>

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




        <h2><a href = "acm\Website Creation Presentation.pdf" target = "_blank"> PowerPoint </a></h2>
        <h2><a href = "acm\css-cheat-sheet.pdf" target = "_blank"> CSS Cheat Sheet </a></h2>
        <h2><a href = "acm\The-Complete-HTML-Cheat-Sheet-(Black-and-White)-Print-Version.pdf" target = "_blank"> HTML Cheat Sheet </a></h2>

    </body>
</html> 
