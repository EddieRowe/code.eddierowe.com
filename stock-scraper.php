<!DOCTYPE html>
<html lang = "en">
    <head>
        <?php
            $title = "Stock Scraper";
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
            $content = "<p>First project written in Python, uses <i>BeautifulSoup</i> 
                        for scraping, and <i>tkinter</i> for gui.</p> 
                        
                        <p><img src='images/scraper_screenshot.jpg' width=600px;></img></p>
                        
                        <p><a href='https://github.com/EddieRowe/StockScraper' target='_blank'>
                        View source on GitHub.</a></p>";
            include "includes/post.php"
        ?>
        <?php
            include "includes/footer.html"
        ?>        
    </body>
</html>
