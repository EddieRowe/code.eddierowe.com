<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "Eddie Rowe<br>Programmer";
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
            $date = "31/07/2020";
            $content = file_get_contents('includes/about.html');
            include "includes/post.php"
        ?>        
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
