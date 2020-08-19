<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "VR Glove";
            include "includes/head.html"
        ?>
    </head>
    <body>
        <?php
            include "includes/title.html"
        ?>
        <?php
            include "includes/navbar.html"
        ?>
        <?php
            $date = "19/08/2020";
            $content = "<p>Towards the end of my first year at university, 
                        I made a glove that a player could wear and use in 
                        order to play a simple game.</p>

                        <p>It was made from a wetsuit glove, some flexible resistors 
                        (the resistances of which vary dependant upon how bent they are), 
                        a gyroscope, and an Arduino.</p> 
                        
                        <p><img src='images/vr_glove_gif1.gif' height=265px;></img>
                        
                        <iframe width='50%' height='265' src='https://www.youtube-nocookie.com/embed/8h514OOkddc' 
                        frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' 
                        allowfullscreen></iframe>
                        
                        </p>";
            include "includes/post.php"
        ?>
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
