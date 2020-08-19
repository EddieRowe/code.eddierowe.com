<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "Ascension";
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
            $content = "<p>Ascension is a multiplayer online first-person 
                        shooter game, for which I was the lead programmer, 
                        within a team of 10.</p>
                        
                        <p>
                        I built the multiplayer framework utilising the features of 
                        Photon’s PUN plugin, and did the majority of the game-play 
                        programming.</p> 
                        
                        <p>
                        Code written in C# with Unity, using JSON for databases of weapons, etc.
                        </p>
                        
                        <p><img src='images/ascension.jpg' height=265px;></img>
                        
                        <iframe width='50%' height='265' src='https://www.youtube-nocookie.com/embed/wRZ-0OqTe50' 
                        frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' 
                        allowfullscreen></iframe>
                        </p>
                        
                        
                        
                        ";
            include "includes/post.php"
        ?>
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
