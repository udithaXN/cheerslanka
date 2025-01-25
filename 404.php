<?php $head_title="Page not found"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "Page Not Found";
require_once('parts/page-title.php');
?>       
        
        <!-- 404 Error Area start -->
        <section class="error-area pt-70 pb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="error-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <h1>OPPS! </h1>
                            <div class="section-title mt-15 mb-25">
                                <h2>This Page Can’t be Found</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="error-images" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <img src="assets/images/newsletter/404.png" alt="404 Error">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404 Error Area end -->
        

<?php require_once('parts/footer/footer.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?> 