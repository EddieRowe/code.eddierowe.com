<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "This Website";
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
            $content = "<p>I wrote the <i>code.eddierowe.com</i> website using HTML, CSS, and PHP.</p> 
            
                        <p><img src='images/website.jpg' width=600px;></img>
            
                        <p><a href='https://github.com/EddieRowe/code.eddierowe.com' target='_blank'>
                        View source on GitHub.</a></p>";
            include "includes/post.php"
        ?>
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
