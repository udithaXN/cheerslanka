<?php $head_title = "Cheers lanka travels - Experience Paradise, One Journey at a Time - Enquiry Now" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "Enquiry Form";
require_once('parts/page-title.php');
?>


<!-- Contact Form Area start -->
<section class="contact-form-area py-70 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="comment-form bgc-lighter z-1 rel mb-30 rmb-55">
                    <div id="" class="contactContainer" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title">
                            <h2>Enquiry Now</h2>
                        </div>
                        <div class="row mt-35">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" id="fullName" class="form-control" placeholder="Your Name" required data-error="Please enter your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneNumber">Phone Number (with country code)</label>
                                    <input type="text" id="phoneNumber" class="form-control" placeholder="Phone" required data-error="Please enter your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="emailAddress">Email Address</label>
                                    <input type="email" id="emailAddress" class="form-control" placeholder="Enter Email" required data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="checkinDate">Check-in Date</label>
                                    <input type="date" id="checkinDate" class="form-control" required data-error="Please enter your Check-in Date">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="checkoutDate">Check-out Date</label>
                                    <input type="date" id="checkoutDate" class="form-control" required data-error="Please enter your Check-out Date">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="adultsCount">Number of Adults</label>
                                    <input type="number" id="adultsCount" class="form-control" placeholder="" required data-error="Please enter the number of Adults">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="childrenCount">Number of Children</label>
                                    <input type="text" id="childrenCount" class="form-control" placeholder="" required data-error="Please enter the number of Children">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="budget">Budget (USD)</label>
                                    <input type="text" id="budget" class="form-control" placeholder="Budget" required data-error="Please enter your Budget">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" id="country" class="form-control" placeholder="Country" required data-error="Please enter your Country">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nationality">Nationality</label>
                                    <input type="text" id="nationality" class="form-control" placeholder="Nationality" required data-error="Please enter your Nationality">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="specialNote">Special Note</label>
                                    <textarea id="specialNote" class="form-control" rows="5" placeholder="Message" required data-error="Please enter your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="radio-filter mb-25">
                                    <li>
                                        <label class="text-danger d-none" id="alert-lable"></label>
                                    </li>
                                </ul>
                                <div class="form-group mb-0">
                                    <button id="submitButton" class="theme-btn style-two" onclick="sendForm();">
                                        <span data-hover="Submit">Submit</span>
                                        <i class="fal fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-images-part" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="row">
                        <div class="col-12">
                            <img src="assets/images/contact/contact1.jpg" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="assets/images/contact/contact2.jpg" alt="Contact">
                        </div>
                        <div class="col-6">
                            <img src="assets/images/contact/contact3.jpg" alt="Contact">
                        </div>
                    </div>
                    <div class="circle-logo">
                        <img src="assets/images/contact/icon.png" alt="Logo">
                        <span class="title h2">Cheers Lanka</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Area end -->

<script src="js.js"></script>

<?php require_once('parts/footer/footer.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>