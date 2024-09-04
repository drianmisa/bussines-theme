<?php

/*
    Template Name: Contact
 */

 get_header();?>

 


<!-- about banner -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="banner-info-grid px-md-5">
                <h2 class="w3l-title-breadcrumb mb-3">Contact Us</h2>
                <p class="inner-page-para px-lg-5">Feel free to learn more about our team and company on this page. We are always happy to help you!</p>
            </div>
        </div>
    </div>
</section>
<!-- //about banner -->



<!-- contact -->
<section class="w3l-contacts-12">
    <div class="contact-top pt-5">
        <div class="container py-lg-4">
            <div class="d-grid cont-main-top mt-lg-5 mt-4">
                <!-- contact form -->
                <div class="contacts12-main">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Name" name="w3lName" id="w3lName" required="">
                            <input type="email" name="email" placeholder="Email" id="w3lSender" required="">
                        </div>
                        <input type="text" placeholder="Phone Number" name="w3lName" id="w3lName" required="">
                        <textarea placeholder="Message" name="w3lMessage" id="w3lMessage" required=""></textarea>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-style">Submit Now</button>
                        </div>
                    </form>
                </div>
                <!-- //contact form -->
                <!-- contact address -->
                <div class="contact">
                    <div class="cont-subs">
                        <div class="cont-add">
                            <h4>Company Location:</h4>
                            <p class="contact-text-sub"> Intelligence, 10001, 5th Avenue, #06 lane street, NY - 62617.</p>
                        </div>
                        <div class="cont-add">
                            <h4>Email Address:</h4>
                            <a href="mailto:info@example.com">
                                <p class="contact-text-sub">info@example.com</p>
                            </a>
                        </div>
                        <div class="cont-add">
                            <h4>Phone Number:</h4>
                            <a href="tel:+1(21) 234 4567"><p class="contact-text-sub">+1(21) 234 4567</p>
                            </a>
                        </div>
                        <div class="social-icons-con">
                            <h4 class="mb-3">Connect with us:</h4>
                            <a href="#facebook"><span class="fab fa-facebook-square" aria-hidden="true"></span></a>
                            <a href="#twitter"><span class="fab fa-twitter-square" aria-hidden="true"></span></a>
                            <a href="#instagram"><span class="fab fa-instagram" aria-hidden="true"></span></a>
                            <a href="#linkedin"><span class="fab fa-linkedin-in" aria-hidden="true"></span></a>
                        </div>
                    </div>
                </div>
                <!-- //contact address -->
            </div>
        </div>
        <!-- map -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281066703!2d-0.24168144921176335!3d51.5287718408761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1569921526194!5m2!1sen!2sin"
                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->




 <?php get_footer();?>