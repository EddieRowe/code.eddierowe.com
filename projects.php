<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "Projects";
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
            $date = "28/07/2020";
            $content = file_get_contents('includes/projects.html');
            include "includes/post.php"
        ?>        
        <?php
            include "includes/footer.html"
        ?>        
    </body>    
</html>
