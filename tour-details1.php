<?php $head_title = "Cheers lanka travels - Experience Paradise, One Journey at a Time" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<!-- header -->
<?php require_once('parts/header/header3.php'); ?>
<?php
$page_title = "Tour Details";
require_once('parts/page-title.php');
?>

<!-- Tour Header Area start -->
<section class="tour-header-area pt-70 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 text-center">
                <div class="tour-header-content mb-15" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <span class="location d-inline-block mb-10"><i class="fal fa-map-marker-alt"></i> Sri Lanka</span>
                    <div class="section-title pb-5">
                        <h2>2 Days / 1 Night - Sri Lanka</h2>
                    </div>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

        </div>
        <hr class="mt-50 mb-70">
    </div>
</section>
<!-- Tour Header Area end -->


<!-- Tour Details Area start -->
<section class="tour-details-page pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tour-details-content">
                    <h3>Explore Tours</h3>
                    <p>Explore Sri Lanka in 2 days! Discover cultural landmarks, stunning
                        landscapes, and unique experiences with an overnight stay included. </p>

                </div>



                <h3>Itinerary</h3>
                <div class="accordion-two mt-25 mb-60" id="faq-accordion-two">
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwoOne">
                                Day 1: Arrival and Cultural Exploration
                            </button>
                        </h5>
                        <div id="collapseTwoOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-two">
                            <div class="accordion-body">
                                <p>Embark on your journey upon arrival at Bandaranaike International Airport, where a warm welcome from our friendly guide awaits. Your adventure begins in the historic city of Kandy, renowned for the revered Temple of the Sacred Tooth Relic. Immerse yourself in Sri Lanka's rich cultural heritage as you visit this UNESCO World Heritage site, and conclude the day with an enchanting traditional cultural show.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwoTwo">
                                Day 2: Nature and Adventure in the Hill Country
                            </button>
                        </h5>
                        <div id="collapseTwoTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion-two">
                            <div class="accordion-body">
                                <p>On your second day, prepare to be mesmerized by the vibrant greenery of Sri Lanka's hill country. Journey to Nuwara Eliya, affectionately called “Little England,” famous for its refreshing climate and colonial elegance. Delight in a picturesque train ride through rolling tea plantations, tour a tea factory to witness the art of crafting Ceylon tea, and soak in the stunning views of cascading waterfalls along the route.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwoThree">
                                Day 3: Wildlife Safari and Departure
                            </button>
                        </h5>
                        <div id="collapseTwoThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-two">
                            <div class="accordion-body">
                                <p>Conclude your journey with an unforgettable wildlife adventure at one of Sri Lanka’s famed national parks. Embark on an exciting jeep safari to witness elephants, leopards, and other fascinating animals in their natural surroundings. After this thrilling experience, head back to the airport for your departure, carrying cherished memories of your Sri Lankan escapade.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-4 px-5">
                <div class="row">
                    <div style="width: 200px; height: 200px; background-image: url('assets/images/banner/side1.jpg'); background-size: cover; background-position: center; border-radius: 50%;"></div>
                </div>
                <div class="row justify-content-end">
                    <div style="width: 250px; height: 250px; background-image: url('assets/images/banner/side.jpg'); background-size: cover; background-position: center; border-radius: 50%;"></div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Tour Details Area end -->



 <?php require_once('parts/footer/footer.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>