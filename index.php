<?php
/**
 * Created by PhpStorm.
 * User: OsonduTochukwu
 * Date: 4/26/2018
 * Time: 12:44 PM
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

        <!--The Header-->
        <?php
            include "header.php";
        ?>

        <!--The Main Body Starts Here-->
        <div class="container-mini">
            <div class="row">
                <div class="col-4">
                    <img class="center" id="profile_image" src="img/profile.jpg"/>
                    <p class="text-gray text-center">Osondu Tochukwu Andrew</p>
                    <p class="text-green text-center text-small padding-20">
                        Web Developer, Mobile Developer, Graphics Designer and
                        Lover of Code writing
                    </p>
                </div>

                <div class="col-8 color-light-gray padding-5">
                    <article class="col-12 padding-5">
                        <h3 class="text-green">Intro:</h3>
                        <p class="text-dim-gray">
                            Osondu Tochukwu Andrew, an entrepreneur and founder of Golden Software Technology
                            (GoldenSoftTech), a web developer and instructor at Foretrust Digital Consulting Limited,
                            android application developer, enthusiast in graphics works and a lover of computer geeks.
                            I studied Computer Science @ University od Nigeria Nsukka(UNN).
                        </p>
                    </article>
                    <a href="biography.php">
                        <button class="button color-green text-white" id="my_biography">My Biography</button>
                    </a>

                </div>
            </div>

            <hr class="hr-1" />

            <br />

            <div class="row" id="my_profession_box" style="margin-bottom: 100px">
                <div class="col-4 my-profession">
                    <img src="img/laptop.png" class="center icon-large">
                    <div class="padding-5 text-center">
                        <h5 class="text-green">Front End Web Developer</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
                <div class="col-4 my-profession">
                    <img src="img/mobile.png" class="center icon-large">
                    <div class="padding-5 text-center">
                        <h5 class="text-green">Mobile Application Developer</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
                <div class="col-4 my-profession">
                    <img src="img/graphics.png" class="center icon-large">
                    <div class="padding-5 text-center">
                        <h5 class="text-green">Graphics Designer</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    </div>
                </div>
            </div>
        </div>

        <!--The Footer-->
        <?php
            include "footer.php";
        ?>
    </body>
</html>