<?php
include("header.php");
?>

<section class="map-section">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28549.63648482186!2d78.74486232506108!3d26.56175742990187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e3192cd94a7b953!2sModel%20School%20Bhind!5e0!3m2!1sen!2sin!4v1597838693273!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <div class="container">
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="about.html">contact us</a></li>
        </ul>
    </div>
</section>



<section class="contact-us">
    <div class="upper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Address</a></h4>
                            <p>Model School Bhind, Gwalior Rd, Near Shivhare Petrol Pump, Bhind, Madhya Pradesh 477001</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-technology-2"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Phone number</a></h4>
                            <p>+(91) 90393 63836</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-interface"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Email id</a></h4>
                            <p>Nashville@Support.com </p>
                            <p>YourAddress@info.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="section-title center">
                <h2>Drop A <span>message</span></h2>
            </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12">
                <div class="contact-box">

                    <form method="post" action="http://world5.commonsupport.com/html2/kindergarten/sendemail.php" class="contact-form" novalidate="novalidate">

                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="First Name*">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="Last Name*">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="email" name="email" value="" placeholder="Email*">
                            </div>


                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="Phone No">
                            </div>


                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>

                            <div class="form-group col-lg-12 center">
                                <button type="submit" name="submit" class="btn-style-one center">Submit now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
   <?php
include("footer.php");
?>