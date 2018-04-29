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
                <h3>MY BIOGRAPHY</h3>
            </div>

            <div class="row">
                <!--This is the Biography Data-->
                <aside class="col-7" id="my_biography_left_aside">
                    <div class="row" id="personal_data">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 heading">
                                    <img src="img/personal.png" class="icon-medium"> <h3 class="text-green" style="display: inline">Personal Data:</h3>
                                </div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/profile.png">
                                    </div>
                                    <div class="col-3">
                                        <strong>Name:</strong>
                                    </div>
                                    <div class="col-8">
                                        Osondu Tochukwu Andrew.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/male.png">
                                    </div>
                                    <div class="col-3">
                                        <strong>Gender:</strong>
                                    </div>
                                    <div class="col-8">
                                        Male.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/flag.png">
                                    </div>
                                    <div class="col-3">
                                        <strong>Country:</strong>
                                    </div>
                                    <div class="col-8">
                                        Nigeria.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/map.png">
                                    </div>
                                    <div class="col-3">
                                        <strong>State:</strong>
                                    </div>
                                    <div class="col-8">
                                        Enugu State.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/location.png">
                                    </div>
                                    <div class="col-3">
                                        <strong>Address:</strong>
                                    </div>
                                    <div class="col-8">
                                        No 17 Tunade Street, Ikeja Lagos.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/phone.png">
                                    </div>
                                    <div class="col-3">
                                        <strong>Phone:</strong>
                                    </div>
                                    <div class="col-8">
                                        +234-8036802243, +234-8117402121.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/email.png">
                                    </div>
                                    <div class="col-3">
                                        <strong>Email:</strong>
                                    </div>
                                    <div class="col-8">
                                        tosolife@yahoo.com.
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="row" id="educational_background">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 heading">
                                    <img src="img/education.png" class="icon-medium"> <h3 class="text-green" style="display: inline">My Education:</h3>
                                </div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/book.png">
                                    </div>
                                    <div class="col-11">
                                        <strong>B.Sc. Computer Science. </strong> <p>University Of Nigeria, Nsukka (UNN).</p>
                                        <small class="text-teal">December, 2010 - September, 2014 - (NG).</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/book.png">
                                    </div>
                                    <div class="col-11">
                                        <strong>West Africa Examination Council. (W.A.E.C)</strong> <p>Special Science School Ukehe, Enugu State.</p>
                                        <small class="text-teal">September, 2003 - September, 2006 - (NG).</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/book.png">
                                    </div>
                                    <div class="col-11">
                                        <strong>National Examination Council. (N.E.C.O)</strong> <p>Special Science School Ukehe, Enugu State.</p>
                                        <small class="text-teal">September, 2003 - September, 2006 - (NG).</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/book.png">
                                    </div>
                                    <div class="col-11">
                                        <strong>First School Leaving Examination</strong> <p>Kings Kids Nursary and Primary School, Achara Layout, Enugu State.</p>
                                        <small class="text-teal">September, 1194 - July, 2000 - (NG).</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


					<div class="row" id="skills">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 heading">
                                    <img src="img/skills.png" class="icon-medium"> <h3 class="text-green" style="display: inline">Skills:</h3>
                                </div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/star.png">
                                    </div>
                                    <div class="col-11">
                                        <p>Web Application Design (UI/UX).</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/star.png">
                                    </div>
                                    <div class="col-11">
                                        <p>Average Knowledge of Mobile Application Development (Android).</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/star.png">
                                    </div>
                                    <div class="col-11">
                                        <p>Graphics Design.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/star.png">
                                    </div>
                                    <div class="col-11">
                                        <p>Average Knowledge of Computer Hardware.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row" id="work_experience">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 heading">
                                    <img src="img/education.png" class="icon-medium"> <h3 class="text-green" style="display: inline">Work Experiences: </h3>
                                </div>
                            </div>
                            <div class="box">
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/star.png">
                                    </div>
                                    <div class="col-11">
                                        <p>Computer/Website-Design Instructor at De-World Computer
                                            Institute Enugu.
                                        </p>
                                        <small class="text-teal">October, 2008 - September, 2010 - (NG).</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 margin_right center-icon">
                                        <img src="img/star.png">
                                    </div>
                                    <div class="col-11">
                                        <p>Web Designer and Instructor at ForeTrust Digital Consulting Limited</p>
                                        <small class="text-teal">August, 2016 - June, 2017 - (NG).</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </aside>

                <hr class="hr-2" id="leftAsideBottom_hr"/>

                <!--This is the Biography Image-->
                <aside class="col-5" id="my_biography_right_aside">
                    <img class="center" id="profile_image_2" src="img/profile_2.jpg"/>
                </aside>
            </div>
        </div>


        <!--The Footer-->
        <?php
            include "footer.php";
        ?>
    </body>
</html>