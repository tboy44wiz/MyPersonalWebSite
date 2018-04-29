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
             <div class="row padding-10">
                 <h3>MY PORTFOLIO</h3>
             </div>

             <!--Front End Web Designer-->
             <div class="row portfolio-main-box">
                 <div class="col-12">
                     <div class="row">
                         <div class="col-12">
                             <h4>Front End Web Designer</h4>
                             <p>The images below are screenshots of some of my Front-End web works.</p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-4 portfolio-mini-box">
                             <img src="img/tochtech_index.png" alt="Tochtech Index Image" class="portfolio-web-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>TochTech Secondary Schools</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-4 portfolio-mini-box">
                             <img src="img/foretrust_index.png" alt="ForeTrust Index Image" class="portfolio-web-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>ForeTrust Digital Center</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-4 portfolio-mini-box">
                             <img src="img/biggold_index.png" alt="Big Gold Index Image" class="portfolio-web-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>Big Gold Call</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!--Mobile Application Development-->
             <div class="row portfolio-main-box">
                 <div class="col-12">
                     <div class="row">
                         <div class="col-12">
                             <h4>Mobile Application Development</h4>
                             <p>The images below are screenshots of some of my Mobile works.</p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-4 portfolio-mini-box">
                             <img src="img/bbcourtcounter.png" alt="B-B Court Counter Image" class="portfolio-android-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>Basket Ball Counter</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-4 portfolio-mini-box">
                             <img src="img/tictactoe.png" alt="Tic Tac Toe Game Image" class="portfolio-android-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>Tic Tac Toe Game</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-4 portfolio-mini-box">
                             <img src="img/bmicalc.png" alt="BMI Calculator Image" class="portfolio-android-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>Body Mass Index Calculator</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!--Graphics Designer-->
             <div class="row portfolio-main-box">
                 <div class="col-12">
                     <div class="row">
                         <div class="col-12">
                             <h4>Graphics Designer</h4>
                             <p>The images below are screenshot of some of my 2D Graphics works.</p>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-4 portfolio-mini-box">
                             <img src="img" alt="graphics 1" class="portfolio-graphics-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>2D Graphics 1</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-4 portfolio-mini-box">
                             <img src="img" alt="graphics 2" class="portfolio-graphics-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>2D Graphics 2</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
                         <div class="col-4 portfolio-mini-box">
                             <img src="img" alt="graphics 3" class="portfolio-graphics-image">
                             <hr class="hr-1"/>
                             <div class="row">
                                 <div class="col-10">
                                     <p><small>2D Graphics 3</small></p>
                                 </div>
                                 <div class="col-2">
                                     <button class="more-image-button">More</button>
                                 </div>
                             </div>
                         </div>
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
