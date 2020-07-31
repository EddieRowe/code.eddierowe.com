<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "Website";
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
            $content = "I wrote this website using HTML, CSS, and PHP. <br/><br/>
                        You can view the source on github below.";
            include "includes/post.php"
        ?>
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
