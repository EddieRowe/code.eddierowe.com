<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "code.eddierowe.com";
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
            $content = "<p>I wrote this website using HTML, CSS, and PHP.</p> 
                        <p><a href='https://github.com/EddieRowe/code.eddierowe.com' target='_blank'>
                        View source on GitHub.</a></p>";
            include "includes/post.php"
        ?>
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
