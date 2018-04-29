<?php
/**
 * Created by PhpStorm.
 * User: OsonduTochukwu
 * Date: 4/26/2018
 * Time: 1:11 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name= "Description" content= "This is a web page that teaches about the website layout" />
        <meta name= "keyword" content= "html layout, web design, web layout, layout design" />
        <meta name= "author" content= "Osondu Tochukwu Andrew" />
        <meta name= "viewport" content= "width=device-width, initial-scale= 1.0" />

        <title>Osondu Andrew</title>

        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/myStyle.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!--The Footer-->
        <footer class="row color-gray padding-20" id="footer-container">
            <div class="col-6">
                <form method="post" class="center">
                    <p class="padding-5 text-egg-shell">Subscribe to our news feed</p>
                    <input class="news-feed margin-10" type="email" name="news_feed" placeholder="Enter your email address">
                    <a href="#">
                        <button class="button color-green text-white" id="news_feed_button">Submit</button>
                    </a>
                </form>
            </div>
            <div class="col-6">
                <p class="padding-5 text-egg-shell">Meet me on:</p>
                <div class="row">
                    <a href="#">
                        <img src="img/facebook.png" class="margin-10 icon-small">
                    </a>
                    <a href="#">
                        <img src="img/twitter.png" class="margin-10 icon-small">
                    </a>
                    <a href="#">
                        <img src="img/google_plus.png" class="margin-10 icon-small">
                    </a>
                    <a href="#">
                        <img src="img/skype.png" class="margin-10 icon-small">
                    </a>
                    <a href="#">
                        <img src="img/whatsapp.png" class="margin-10 icon-small">
                    </a>
                </div>
            </div>
        </footer>
        <div class="row padding-10" id="copyright">
            <p class="text-white text-small text-center center">Copyright &copy; reserve, 2018. <a href="#" class="footer-goldsofttech">Golden Software Technology</a></p>
        </div>
    </body>


</html>
