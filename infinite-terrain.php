<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "Infinite Procedural Terrain";
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
            $content = "<p>Infinite Terrain Generation Project I created 
                        whilst at university.</p> 
                        
                        <p>Written in C# with Unity.</p>
                        
                        <p><img src='images/inf_terrain.gif' width=400px; height=265px;></img>
                        
                        <video width='50%' height='265' controls>
                            <source src='videos/terrain.webm' type='video/mp4'>
                            Your browser does not support this video type.
                        </video> 
                        </p>
                        
                        ";
            include "includes/post.php"
        ?>
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
