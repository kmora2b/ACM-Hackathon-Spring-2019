<?php
    include("base.php");
?>

<div class = "gallery">

    <ul class = "tabs">
        <li>
            <input type="radio" name="tabs" id="tab-0">
            <label for="tab-0">Child Crisis Center School Drive</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/ChildCrisisCenterSchoolDrive2018");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-1">
            <label for="tab-1">Haunted House 2017</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/HauntedHouse2017");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-2">
            <label for="tab-2">Independence Day 2017</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/IndependenceDay2017");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-3" checked>
            <label for="tab-3">Independence Day 2018</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/IndependenceDay2018");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-4">
            <label for="tab-4">Neighborhood</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/Neighborhood");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-5">
            <label for="tab-5">Neighborhood Night Out</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/NeighborhoodNightOut2017");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-6">
            <label for="tab-6">Neighborhood Showcase</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/NeighborhoodShowcase");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-7">
            <label for="tab-7">Posadas at the Park 2017</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/PosadasAtThePark2017");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-8">
            <label for="tab-8">Rummage Sale 2018</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/RummageSale2018");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-9">
            <label for="tab-9">Travis White Artwork Unveiling</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/UnveilingOfTravisWhiteParkArtwork");
                ?>
            </div>
        </li>
        <li>
            <input type="radio" name="tabs" id="tab-10">
            <label for="tab-10">Walk to School Day 2017</label>
            <!-- <center><h4>Photography Credit: </h4></center> -->
            <div class="galleryContainer">
                <?php
                    walkPath("Images/EastwoodHeightsWalkToSchoolDay2017");
                ?>
            </div>
        </li>
    </ul>

    <?php 
        function walkPath($path){
            if ($handle = opendir($path)) {
                while (false !== ($file = readdir($handle))) {
                    if ('.' === $file) continue;
                    if ('..' === $file) continue;
                    if (strpos($file, ".mp4")) continue;

                    list($width, $height) = getimagesize($path."/".$file);
                    if ($width > $height) {
                        $orientation = "landscape";
                    } else {
                        $orientation = "portrait";
                    }
                    echo "<div class = \"".$orientation."\"> <img src = \"".$path."/".$file."\" alt = \"".$file."\" class = \"image\" ></div>";
                }
                closedir($handle);
            }
        }
    ?>
</div>