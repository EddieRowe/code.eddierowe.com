<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "Covid19 UK Data Graphing";
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
            $date = "18/08/2020";
            $content = "<p>Grabs latest figures from the Public Health England API 
                        and uses Dash, Plotly, and Pandas to show the data graphically.</p> 
                        
                        <p><img src='images/covid_graphing.jpg' width=600px;></img></p>
                        
                        <p><a href='https://coronavirus.eddierowe.com/' target='_blank'>
                        View live demo.</a>
                        
                        <a href='https://github.com/EddieRowe/covid19-uk-graphing' target='_blank'>
                        View source on GitHub.</a></p>";
                        
            include "includes/post.php"
        ?>
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
