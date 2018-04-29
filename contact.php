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
                <h3>MY CONTACTS</h3>
            </div>

            <div class="row" style="margin-bottom: 100px">
                <!--The Left Aside-->
                <div class="col-5 margin_right">
                    <aside class="box-shadow padding-5" id="contact_left_aside">
                        <div class="row padding-bottom">
                            <div class="col-2">
                                <img src="img/home2.png" alt="Company Image" class="icon-medium">
                            </div>
                            <div class="col-10">
                                <span>No 17 Tunade Street, Ikeja, Lagos State.</span>
                            </div>
                        </div>
                        <div class="row padding-bottom">
                            <div class="col-2">
                                <img src="img/phone2.png" alt="Telephone Image" class="icon-medium">
                            </div>
                            <div class="col-01">
                                <span>+234-8036802243, +234-8117402121</span>
                            </div>
                        </div>
                        <div class="row padding-bottom">
                            <div class="col-2">
                                <img src="img/email2.png" alt="Email Image" class="icon-medium">
                            </div>
                            <div class="col-10">
                                <span>tosolife@yahoo.com</span>
                            </div>
                        </div>
                    </aside>
                </div>

                <!--The Right Aside-->
                <div class="col-7 color-dim-gray">
                    <aside id="contact_right_aside">
                        <form class="padding-10" id="contact_form" action="mailto:tosolife@yahoo.com" method="post" enctype="text/plain">
                            <div>
                                <label class="text-white">Name: <span class="text-red">*</span></label><br>
                                <input class="form-input" type="text" required placeholder="Enter Your Names..."/>
                            </div>
                            <div>
                                <label class="text-white">Email: <span class="text-red">*</span></label><br>
                                <input class="form-input" type="email" required placeholder="Enter Your Email Address..."/>
                            </div>
                            <div>
                                <label class="text-white">Phone Number:</label><br>
                                <input class="form-input" type="tel" placeholder="Enter Your Phone Number..."/>
                            </div>
                            <div>
                                <label class="text-white">Comments: <span class="text-red">*</span></label><br>
                                <textarea class="form-textarea" required placeholder="Leave your comments here..."></textarea>
                            </div>
                            <button class="button color-green text-white" type="submit" id="contact_send_button">Send</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>

        <!--The Footer-->
        <?php
            include "footer.php";
        ?>
    </body>
</html>