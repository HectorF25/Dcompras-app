<?php
include '../../Config/appConfig.php';
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from templates.g5plus.net/thedir/listing-details-full-map.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2020 18:47:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>𝗗𝗰𝗼𝗺𝗽𝗿𝗮𝘀 | Detalles</title>
    <link rel="apple-touch-icon" href="../../App/assets/img/Recurso 1LogoD.png">
    <link rel="shortcut icon" href="../../App/assets/img/Recurso 1LogoD.png">
    <script src="../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./vendors/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="./vendors/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="./vendors/slick/slick.css">
    <link rel="stylesheet" href="./vendors/animate.css">
    <link rel="stylesheet" href="./vendors/air-datepicker/css/datepicker.min.css">
    <link rel="stylesheet" href="./vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= APP_DIR; ?>assets/css/styleIndex.css">
    <link rel="stylesheet" href="<?= APP_DIR; ?>assets/css/style.css">
</head>

<body>

    <div id="site-wrapper" class="site-wrapper explore-details explore-details-full-map">

        <?php
        require_once 'modules/headerIndex.php';
        ?>

        <div id="wrapper-content" class="wrapper-content pb-0 pt-0">
            <div class="map">
                <div id="googleMap" data-google-map="true" class="explore-details-full-map" style="width:100%;height:560px;"></div>
                <div id="pano" data-google-map="true" class="explore-details-full-map" style="width:100%;height:560px;"></div>
                <div class="container">
                    <div class="map-content position-relative">
                        <div class="map-content-wrapper position-absolute bg-dark text-white">
                            <div class="mb-2 lh-1">Features</div>
                            <ul class="list-inline mb-0 d-flex align-items-center ">
                                <li class="list-inline-item d-flex align-items-center justify-content-center rounded-sm">
                                    <a href="#" class="text-white font-size-h5"><i class="fal fa-map-marker-alt"></i></a>
                                </li>
                                <li class="list-inline-item d-flex align-items-center justify-content-center rounded-sm">
                                    <a href="#" class="text-white font-size-h5">
                                        <svg class="icon icon-map">
                                            <use xlink:href="#icon-map"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item d-flex align-items-center justify-content-center rounded-sm">
                                    <a href="#" class="text-white font-size-h5">
                                        <svg class="icon icon-camera-flip">
                                            <use xlink:href="#icon-camera-flip"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item d-flex align-items-center justify-content-center rounded-sm">
                                    <a href="#" class="text-white font-size-h5">
                                        <svg class="icon icon-camera-play">
                                            <use xlink:href="#icon-camera-play"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="list-inline-item d-flex align-items-center justify-content-center rounded-sm">
                                    <a href="#" class="text-white font-size-h5">
                                        <svg class="icon icon-car">
                                            <use xlink:href="#icon-car"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-title bg-gray-06 pt-8 pb-9">
                <div class="container">
                    <ul class="breadcrumb breadcrumb-style-03 mb-6">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Foods & Restaurants </a></li>
                        <li class="breadcrumb-item">Thai’s Taste Restaurant</li>
                    </ul>
                    <div class="explore-details-top d-flex flex-wrap flex-lg-nowrap">
                        <div class="store">
                            <div class="d-flex flex-wrap">
                                <h2 class="text-dark mr-3 mb-2">Thai’s Taste Restaurant
                                </h2>
                                <span class="check font-weight-semibold text-green mb-2">
                                    <svg class="icon icon-check-circle">
                                        <use xlink:href="#icon-check-circle"></use>
                                    </svg>
                                    Verified
                                </span>
                            </div>
                            <ul class="list-inline store-meta d-flex flex-wrap align-items-center">
                                <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span>
                                    <span>4 rating</span>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item">
                                    <a href="#" class=" text-link text-decoration-none d-flex align-items-center">
                                        <span class="d-inline-block mr-2 font-size-md">
                                            <svg class="icon icon-bed">
                                                <use xlink:href="#icon-bed"></use>
                                            </svg>
                                        </span>
                                        <span>Hotel</span>
                                    </a>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item">
                                    <span class="mr-1"><i class="fal fa-clock"></i></span>
                                    <span>Posted 15 hours ago</span>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-0 ml-lg-auto mt-4 mt-lg-0 d-flex flex-wrap flex-sm-nowrap">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-white font-size-md mb-3 mb-sm-0 py-1 px-2 rounded-sm">
                                        <span class="d-inline-block mr-1">
                                            <i class="fal fa-exclamation-triangle"></i>
                                        </span>
                                        Report</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-white font-size-md mb-3 mb-sm-0 py-1 px-3 rounded-sm">
                                        <span class="d-inline-block mr-1">
                                            <i class="fal fa-share-alt"></i>
                                        </span>
                                        Share</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-white font-size-md mb-3 mb-sm-0 py-1 px-4 rounded-sm">
                                        <span class="d-inline-block mr-1">
                                            <i class="fal fa-bookmark"></i>
                                        </span>
                                        Save</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-white font-size-md mb-3 mb-sm-0 py-1 px-2 rounded-sm">
                                        <span class="d-inline-block">
                                            <svg class="icon icon-chart-bars">
                                                <use xlink:href="#icon-chart-bars"></use>
                                            </svg>
                                        </span>
                                        Compare</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="page-container">
                    <div class="row">
                        <div class="page-content col-12 col-xl-8 mb-8 mb-xl-0">
                            <div class="images-gallery">
                                <div class="slick-slider slider-for" data-slick-options='{"slidesToShow": 1, "autoplay":false,"dots":false,"infinite": true,"asNavFor": ".slider-nav"}'>
                                    <div class="box"><img src="images/shop/nav-slider-lg-01.jpg" alt="Gallery 01"></div>
                                    <div class="box"><img src="images/shop/large-slider-01.jpg" alt="Gallery 02"></div>
                                    <div class="box"><img src="images/shop/nav-slider-lg-03.jpg" alt="Gallery 03"></div>
                                    <div class="box"><img src="images/shop/nav-slider-lg-04.jpg" alt="Gallery 04"></div>
                                    <div class="box"><img src="images/shop/nav-slider-lg-05.jpg" alt="Gallery 05"></div>
                                    <div class="box"><img src="images/shop/nav-slider-lg-04.jpg" alt="Gallery 06"></div>
                                    <div class="box"><img src="images/shop/nav-slider-lg-05.jpg" alt="Gallery 07"></div>
                                </div>
                                <div class="slick-slider slider-nav" data-slick-options='{"slidesToShow": 5, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-for","focusOnSelect": true}'>
                                    <div class="box"><img src="images/shop/nav-slider-01.jpg" alt="Gallery 01"></div>
                                    <div class="box"><img src="images/shop/nav-slider-02.jpg" alt="Gallery 02"></div>
                                    <div class="box"><img src="images/shop/nav-slider-03.jpg" alt="Gallery 03"></div>
                                    <div class="box"><img src="images/shop/nav-slider-04.jpg" alt="Gallery 04"></div>
                                    <div class="box"><img src="images/shop/nav-slider-05.jpg" alt="Gallery 05"></div>
                                    <div class="box"><img src="images/shop/nav-slider-04.jpg" alt="Gallery 06"></div>
                                    <div class="box"><img src="images/shop/nav-slider-05.jpg" alt="Gallery 07"></div>
                                </div>
                            </div>
                            <div class="collapse-tabs mt-7">
                                <div class="tabs bg-gray-06 px-4 py-2 mb-6 d-none d-sm-block">
                                    <ul class="nav nav-pills tab-style-01" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews & Rating </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="booking-tab" data-toggle="tab" href="#booking" role="tab" aria-controls="booking" aria-selected="false">Booking</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="collapse-tabs-accordion">
                                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                            <div class="card bg-transparent mb-4 mb-sm-0">
                                                <div class="card-header d-block d-sm-none bg-transparent px-0 py-1" id="headingDescription">
                                                    <h5 class="mb-0">
                                                        <button class="btn text-uppercase btn-block" data-toggle="collapse" data-target="#description-collapse" aria-expanded="true" aria-controls="description-collapse">
                                                            Description
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="description-collapse" class="collapse show collapsible" aria-labelledby="headingDescription" data-parent="#collapse-tabs-accordion">
                                                    <div class="card-body p-sm-0 border-sm-0">
                                                        <div class="mb-6">
                                                            <h6 class="d-block font-size-md mb-4">Introduce</h6>
                                                            <p class="mb-6">Thai’s Taste Restaurant (often shortened
                                                                to
                                                                Thai‘s
                                                                Flavour)
                                                                is a 1950s
                                                                style
                                                                diner located
                                                                in Madison, Wisconsin. Opened in 1946 by Daniel
                                                                Raclift,
                                                                and
                                                                located
                                                                just
                                                                across the street from Camp Randall Stadium,
                                                                it has become a popular game day Thai’s Taste
                                                                Restaurant
                                                                (often
                                                                shortened to
                                                                Thai‘s Taste)
                                                                is a 1950s style diner located in Madison,
                                                                Wisconsin.<br>
                                                                Opened in 1946 by Robert Downey Jr, and located just
                                                                across
                                                                the
                                                                street
                                                                from
                                                                Camp Randall Stadium, it has become a popular game
                                                                day
                                                                tradition
                                                                amongst
                                                                many Badger fans. The diner is well known for its
                                                                breakfast
                                                                selections,
                                                                especially the Scrambler, which is a large mound of
                                                                potatoes,
                                                                eggs,
                                                                cheese,
                                                                gravy, and a patrons’ choice of other toppings.
                                                            </p>
                                                            <p class="mb-0">
                                                                Thai‘s Taste has also been featured on “Todd’s Taste
                                                                of
                                                                the
                                                                Town”
                                                                during
                                                                one
                                                                of ESPN’s college football
                                                                broadcasts adition amongst many Badger fans.
                                                                The diner is well known for its breakfast
                                                                selections,
                                                                especially
                                                                the
                                                                Scrambler,
                                                                which is a large mound of potatoes, eggs, cheese,
                                                                gravy,
                                                                and
                                                                a
                                                                patrons’
                                                                choice of other toppings.
                                                            </p>
                                                        </div>
                                                        <div class="mb-6">
                                                            <h6 class="d-block font-size-md mb-4">Menu’s Restaurant</h6>
                                                            <img src="images/shop/thai-menu-restaurant.jpg" alt="Thai menu">
                                                        </div>
                                                        <h6 class="font-size-md mb-5">
                                                            Features
                                                        </h6>
                                                        <div class="row">
                                                            <div class="col-md-4 mb-4 mb-md-0">
                                                                <ul class="list-group list-group-flush list-group-borderless">
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Takes Reservations</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-dark-red d-inline-block mr-2">
                                                                            <i class="fas fa-times-circle"></i></span>
                                                                        <span class="text-gray">Accepts Credit Cards</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Wheelchair Accessible</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Outdoor Seating</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Has TV</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4 mb-4 mb-md-0">
                                                                <ul class="list-group list-group-flush list-group-borderless">
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Delivery</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Take-away</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Good for Kids</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Immediacy</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Waiter Service</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <ul class="list-group list-group-flush list-group-borderless">
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Wifi</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Good for Breakfast, Brunch</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Good for Group</span>
                                                                    </li>
                                                                    <li class="list-group-item bg-transparent p-0 lh-19">
                                                                        <span class="text-green d-inline-block mr-2"><i class="fas fa-check-circle"></i></span>
                                                                        <span class="text-dark">Support Online</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                            <div class="card bg-transparent mb-4 mb-sm-0">
                                                <div class="card-header d-block d-sm-none bg-transparent px-0 py-1" id="headingReview">
                                                    <h5 class="mb-0">
                                                        <button class="btn text-uppercase btn-block collapsed" data-toggle="collapse" data-target="#reviews-collapse" aria-expanded="true" aria-controls="description-collapse">
                                                            Reviews & Rating
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="reviews-collapse" class="collapse collapsible" aria-labelledby="headingReview" data-parent="#collapse-tabs-accordion">
                                                    <div class="card-body p-sm-0 border-sm-0">
                                                        <div class="block-review">
                                                            <h6 class="font-size-md mb-1">02 Reviews for Thai’s Taste
                                                                Restaurant</h6>
                                                            <div class="reviews">
                                                                <div class="py-6 media border-top">
                                                                    <a href="#" class="author-image">
                                                                        <img src="images/listing/jobs-testimonial-1.png" alt="Author 1" class="rounded-circle">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="mb-4 row flex-md-nowrap mb-5">
                                                                            <div class="col-12 col-md-10">
                                                                                <div class="h5 mb-1">Great place and
                                                                                    very
                                                                                    love it!
                                                                                </div>
                                                                                <ul class="list-inline text-gray">
                                                                                    <li class="list-inline-item">
                                                                                        <span>by</span>
                                                                                        <a href="#">Ron Weasley</a>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <span>|</span>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <span>15 hours ago</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ml-0 ml-md-auto text-left text-md-right col-12 col-md-2 mt-2 mt-md-0">
                                                                                <span class="badge badge-success d-inline-block font-size-h5 font-weight-semibold">5.0</span>
                                                                                <span class="text-dark font-weight-semibold font-size-md d-block">Excellent</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-0">This place is the epitome of
                                                                            an
                                                                            amazing
                                                                            college
                                                                            town diner! Badger decor, huge portions,
                                                                            completely
                                                                            affordable,
                                                                            hearty meals and awesome service!
                                                                        </p>
                                                                        <div class="images d-flex flex-wrap">
                                                                            <img src="images/listing/review-01.jpg" alt="Review 1" class="mt-4">
                                                                            <img src="images/listing/review-02.jpg" alt="Review 2" class="mt-4">
                                                                            <img src="images/listing/review-03.jpg" alt="Review 3" class="mt-4">
                                                                        </div>
                                                                        <div class="icons d-flex mt-4">
                                                                            <div class="mr-5 like">
                                                                                <i class="fal fa-thumbs-up"></i>
                                                                                12
                                                                            </div>
                                                                            <div class="love">
                                                                                <i class="fal fa-heart"></i>
                                                                                8
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="py-6 media border-top">
                                                                    <a href="#" class="author-image">
                                                                        <img src="images/listing/review-athor-01.jpg" alt="Author 2" class="rounded-circle">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="mb-4 row flex-md-nowrap mb-5">
                                                                            <div class="col-12 col-md-10">
                                                                                <div class="h5 mb-1">Delicious &
                                                                                    Fast
                                                                                    Support
                                                                                </div>
                                                                                <ul class="list-inline d-flex text-gray">
                                                                                    <li class="list-inline-item">
                                                                                        <span>by</span>
                                                                                        <a href="#">Anna Molly </a>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <span>|</span>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <span>17 hours ago</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="rating ml-0 ml-md-auto text-left text-md-right col-12 col-md-2 mt-2 mt-md-0">
                                                                                <span class="badge badge-success d-inline-block font-size-h5 font-weight-semibold">5.0</span>
                                                                                <span class="text-dark font-weight-semibold font-size-md d-block">Excellent</span>
                                                                            </div>
                                                                        </div>
                                                                        <p class="mb-0">This place is the epitome of
                                                                            an
                                                                            amazing
                                                                            college
                                                                            town diner! Badger decor, huge portions,
                                                                            completely
                                                                            affordable,
                                                                            hearty meals and awesome service! The
                                                                            ambiance
                                                                            is very
                                                                            chill
                                                                            and
                                                                            comfy. Just moved to Thai’s Taste and
                                                                            already
                                                                            went here
                                                                            twice (two
                                                                            days in a row) because there's really
                                                                            nothing
                                                                            like this
                                                                            place. It's
                                                                            going to be hard to find another place
                                                                            like
                                                                            this
                                                                            in
                                                                            regards
                                                                            to
                                                                            service, taste, portions & price! My
                                                                            husband
                                                                            and
                                                                            I will
                                                                            definitely
                                                                            be regulars here!
                                                                        </p>
                                                                        <div class="icons d-flex mt-4">
                                                                            <div class="like mr-5">
                                                                                <i class="fal fa-thumbs-up"></i>
                                                                                5
                                                                            </div>
                                                                            <div class="love">
                                                                                <i class="fal fa-heart"></i>
                                                                                3
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-form-review bg-gray-06 px-5 pb-6">
                                                            <h6 class="font-size-md pb-1 border-bottom pt-4 mb-4">
                                                                Rate Us & Write A Review
                                                            </h6>
                                                            <form>
                                                                <div class="row mb-4 flex-md-nowrap align-items-center">
                                                                    <div class="form-group d-flex form-rate col-md-6 align-items-center mb-4 mb-md-0">
                                                                        <span class="d-inline-block mr-2">Select your rating</span>
                                                                        <div class="rate-input d-flex">
                                                                            <input type="radio" id="star5" name="rate" value="5" />
                                                                            <label for="star5" title="text" class="mb-0">
                                                                                <svg class="icon icon-ionicons_svg_md-star">
                                                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                                                </svg>
                                                                            </label>
                                                                            <input type="radio" id="star4" name="rate" value="4" checked />
                                                                            <label for="star4" title="text" class="mb-0">
                                                                                <svg class="icon icon-ionicons_svg_md-star">
                                                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                                                </svg>
                                                                            </label>
                                                                            <input type="radio" id="star3" name="rate" value="3" />
                                                                            <label for="star3" title="text" class="mb-0">
                                                                                <svg class="icon icon-ionicons_svg_md-star">
                                                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                                                </svg>
                                                                            </label>
                                                                            <input type="radio" id="star2" name="rate" value="2" />
                                                                            <label for="star2" title="text" class="mb-0">
                                                                                <svg class="icon icon-ionicons_svg_md-star">
                                                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                                                </svg>
                                                                            </label>
                                                                            <input type="radio" id="star1" name="rate" value="1" />
                                                                            <label for="star1" title="text" class="mb-0">
                                                                                <svg class="icon icon-ionicons_svg_md-star">
                                                                                    <use xlink:href="#icon-ionicons_svg_md-star"></use>
                                                                                </svg>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="upload-file col-md-6 text-left text-md-right">
                                                                        <input type="file" id="file" /><label for="file" class="btn btn-white btn-icon-left mb-0 px-6"><i class="fas fa-cloud-upload"></i>Add a
                                                                            Photo</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row mx-0">
                                                                    <div class="col-sm-4 form-group mb-4 pl-0 pr-0 pr-sm-3">
                                                                        <input class="form-control" placeholder="Name">
                                                                    </div>
                                                                    <div class="col-sm-4 form-group pl-0 mb-4 pr-0 pr-sm-3">
                                                                        <input class="form-control" placeholder="Email Address">
                                                                    </div>
                                                                    <div class="col-sm-4 form-groupmb-4 px-0">
                                                                        <input class="form-control" placeholder="Subject">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group mb-4">
                                                                    <textarea class="form-control" placeholder="Write your review here..."></textarea>
                                                                </div>
                                                                <div class="text-center">
                                                                    <button class="btn btn-primary font-size-md btn-lg lh-base">
                                                                        Sign Up
                                                                        & Submit Review
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                                            <div class="card bg-transparent mb-4 mb-sm-0">
                                                <div class="card-header d-block d-sm-none bg-transparent px-0 py-1" id="headingBooking">
                                                    <h5 class="mb-0">
                                                        <button class="btn text-uppercase btn-block collapsed" data-toggle="collapse" data-target="#booking-collapse" aria-expanded="true" aria-controls="description-collapse">
                                                            Booking
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="booking-collapse" class="collapse collapsible" aria-labelledby="headingBooking" data-parent="#collapse-tabs-accordion">
                                                    <div class="card-body p-sm-0 border-sm-0">
                                                        <div class="widget reservation">
                                                            <div class="form-reservation form-reservation-lg text-center">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <div class="datepicker-style-01" data-datepicker="true" data-picker-option='{"inline":true,"language":"my-lang"}'></div>
                                                                        <input type="hidden" id="datepicker_send">
                                                                    </div>
                                                                    <div class="text-dark mb-5">Time available</div>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-bordered">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check mb-0">
                                                                                            <input class="form-check-input" type="radio" name="time" id="time1" value="option1" checked>
                                                                                            <label class="form-check-label mb-0" for="time1">
                                                                                                09:30AM
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check mb-0">
                                                                                            <input class="form-check-input" type="radio" name="time" id="time2" value="option1">
                                                                                            <label class="form-check-label mb-0" for="time2">
                                                                                                11:30AM
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check mb-0">
                                                                                            <input class="form-check-input" type="radio" name="time" id="time3" value="option1">
                                                                                            <label class="form-check-label mb-0" for="time3">
                                                                                                01:30PM
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check mb-0">
                                                                                            <input class="form-check-input" type="radio" name="time" id="time4" value="option1">
                                                                                            <label class="form-check-label mb-0" for="time4">
                                                                                                03:30PM
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check mb-0">
                                                                                            <input class="form-check-input" type="radio" name="time" id="time5" value="option1">
                                                                                            <label class="form-check-label mb-0" for="time5">
                                                                                                05:30PM
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check mb-0">
                                                                                            <input class="form-check-input" type="radio" name="time" id="time6" value="option1">
                                                                                            <label class="form-check-label mb-0" for="time6">
                                                                                                07:30PM
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check mb-0">
                                                                                            <input class="form-check-input" type="radio" name="time" id="time7" value="option1">
                                                                                            <label class="form-check-label mb-0" for="time7">
                                                                                                09:30PM
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check mb-0 none">
                                                                                            <input class="form-check-input" type="radio" name="time" id="time8" value="option1">
                                                                                            <label class="form-check-label mb-0" for="time8">
                                                                                                none
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <button class="btn btn-primary px-7 font-size-h5" type="submit">
                                                                        Book
                                                                        Now
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-more-listing mt-8 border-top pt-6">
                                <div class="font-size-md font-weight-semibold mb-5 text-dark">More Listing By <span class="text-danger">Ron Weasley</span></div>
                                <div class="slick-slider arrow-top store-grid-style" data-slick-options='{"slidesToShow": 2, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 1}}]}'>
                                    <div class="box">
                                        <div class="store card rounded-0 border-0">
                                            <div class="position-relative store-image">
                                                <a href="listing-details-full-image.html">
                                                    <img src="images/shop/popular-place-1.jpg" alt="store 1" class="card-img-top rounded-0">
                                                </a>
                                                <div class="image-content position-absolute d-flex align-items-center">
                                                    <div class="content-right ml-auto d-flex">
                                                        <a href="images/shop/full-popular-place-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                            <svg class="icon icon-expand">
                                                                <use xlink:href="#icon-expand"></use>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pb-4 border-right border-left">
                                                <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Japan Rice Mixed Seafood</span></a>
                                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                    <li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">5.0</span><span class="number">4 rating</span>
                                                    </li>
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.0</span>
                                                    </li>
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="text-green">Open now!</span>
                                                    </li>
                                                </ul>
                                                <div class="media">
                                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body lh-14 font-size-sm">Overlooking
                                                        Bloomsbury’s
                                                        Russell
                                                        Square and a 2
                                                        minutes’ walk from the tube station of the same name...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
                                                <div class="border-top pt-3">
                                                    <span class="d-inline-block mr-1">
                                                        <i class="fal fa-map-marker-alt"></i>
                                                    </span>
                                                    <a href="#" class="text-secondary pr-3 text-decoration-none address">534
                                                        Salem Rd
                                                        St,
                                                        Newark, NY</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="store card rounded-0 border-0">
                                            <div class="position-relative store-image">
                                                <a href="listing-details-full-image.html">
                                                    <img src="images/shop/popular-place-2.jpg" alt="store 1" class="card-img-top rounded-0">
                                                </a>
                                                <div class="image-content position-absolute d-flex align-items-center">
                                                    <div class="content-right ml-auto d-flex">
                                                        <a href="images/shop/full-popular-place-2.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                            <svg class="icon icon-expand">
                                                                <use xlink:href="#icon-expand"></use>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pb-4 border-right border-left">
                                                <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Fruit Cake - Halsey St </span></a>
                                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                    <li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">4.8</span><span class="number">2 rating</span>
                                                    </li>
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$4.0</span>
                                                    </li>
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="text-green">Open now!</span>
                                                    </li>
                                                </ul>
                                                <div class="media">
                                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body lh-14 font-size-sm">They specialize in
                                                        makgeolli
                                                        at this
                                                        Korean-style pub in Seorae Village. And they use...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
                                                <div class="border-top pt-3">
                                                    <span class="d-inline-block mr-1">
                                                        <i class="fal fa-map-marker-alt"></i>
                                                    </span>
                                                    <a href="#" class="text-secondary pr-3 text-decoration-none address">92
                                                        Halsey St,
                                                        Brooklyn, NY</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="store card rounded-0 border-0">
                                            <div class="position-relative store-image">
                                                <a href="listing-details-full-image.html">
                                                    <img src="images/shop/popular-place-1.jpg" alt="store 1" class="card-img-top rounded-0">
                                                </a>
                                                <div class="image-content position-absolute d-flex align-items-center">
                                                    <div class="content-right ml-auto d-flex">
                                                        <a href="images/shop/full-popular-place-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                            <svg class="icon icon-expand">
                                                                <use xlink:href="#icon-expand"></use>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pb-4 border-right border-left">
                                                <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Japan Rice Mixed Seafood</span></a>
                                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                    <li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">5.0</span><span class="number">4 rating</span>
                                                    </li>
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$9.0</span>
                                                    </li>
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="text-green">Open now!</span>
                                                    </li>
                                                </ul>
                                                <div class="media">
                                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body lh-14 font-size-sm">Overlooking
                                                        Bloomsbury’s
                                                        Russell
                                                        Square and a 2
                                                        minutes’ walk from the tube station of the same name...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
                                                <div class="border-top pt-3">
                                                    <span class="d-inline-block mr-1">
                                                        <i class="fal fa-map-marker-alt"></i>
                                                    </span>
                                                    <a href="#" class="text-secondary pr-3 text-decoration-none address">534
                                                        Salem Rd
                                                        St,
                                                        Newark, NY</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="store card rounded-0 border-0">
                                            <div class="position-relative store-image">
                                                <a href="listing-details-full-image.html">
                                                    <img src="images/shop/popular-place-2.jpg" alt="store 1" class="card-img-top rounded-0">
                                                </a>
                                                <div class="image-content position-absolute d-flex align-items-center">
                                                    <div class="content-right ml-auto d-flex">
                                                        <a href="images/shop/full-popular-place-2.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quick view" data-gtf-mfp="true">
                                                            <svg class="icon icon-expand">
                                                                <use xlink:href="#icon-expand"></use>
                                                            </svg>
                                                        </a>
                                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pb-4 border-right border-left">
                                                <a href="listing-details-full-image.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Fruit Cake - Halsey St </span></a>
                                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                                    <li class="list-inline-item"><span class="badge badge-success mr-1 d-inline-block">4.8</span><span class="number">2 rating</span>
                                                    </li>
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$4.0</span>
                                                    </li>
                                                    <li class="list-inline-item separate"></li>
                                                    <li class="list-inline-item"><span class="text-green">Open now!</span>
                                                    </li>
                                                </ul>
                                                <div class="media">
                                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body lh-14 font-size-sm">They specialize in
                                                        makgeolli
                                                        at this
                                                        Korean-style pub in Seorae Village. And they use...
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent border-left border-right border-bottom">
                                                <div class="border-top pt-3">
                                                    <span class="d-inline-block mr-1">
                                                        <i class="fal fa-map-marker-alt"></i>
                                                    </span>
                                                    <a href="#" class="text-secondary pr-3 text-decoration-none address">534
                                                        Salem Rd
                                                        St,
                                                        Newark, NY</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar col-xl-4">
                            <div class="card p-4 widget infomation border-0 bg-gray-06 rounded-0 mb-6">
                                <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                                    <span class="text-secondary mr-3"><i class="fas fa-info-circle"></i></span>
                                    <span> Information</span>
                                </div>
                                <div class="card-body px-0 pt-3 pb-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <span class="item-icon mr-3"><i class="fal fa-map-marker-alt"></i></span>
                                            <span class="card-text">125 Mountain St, Brooklyn, NY</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <span class="item-icon mr-3">
                                                <svg class="icon icon-telephone">
                                                    <use xlink:href="#icon-telephone"></use>
                                                </svg>
                                            </span>
                                            <span class="card-text">(301) 453-8688</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <span class="item-icon mr-3"><i class="fal fa-globe"></i></span>
                                            <span class="card-text"><a href="#">www.thaistaste.com</a></span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0 pb-2 pt-5">
                                            <div class="social-icon origin-color si-square">
                                                <ul class="list-inline text-center">
                                                    <li class="list-inline-item si-facebook">
                                                        <a target="_blank" title="Facebook" href="#">
                                                            <i class="fab fa-facebook-f">
                                                            </i>
                                                            <span>Facebook</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item si-twitter">
                                                        <a target="_blank" title="Twitter" href="#">
                                                            <i class="fab fa-twitter">
                                                            </i>
                                                            <span>Twitter</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item si-google">
                                                        <a target="_blank" title="Google plus" href="#">
                                                            <svg class="icon icon-google-plus-symbol">
                                                                <use xlink:href="#icon-google-plus-symbol"></use>
                                                            </svg>
                                                            <span>Google plus</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item si-tumblr">
                                                        <a target="_blank" title="Tumblr" href="#">
                                                            <i class="fab fa-tumblr"></i>
                                                            <span>Tumblr</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item si-rss">
                                                        <a target="_blank" title="RSS" href="#">
                                                            <i class="fas fa-rss"></i>
                                                            <span>RSS</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card p-4 widget border-0 schedule bg-gray-06 mb-6 rounded-0">
                                <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                                    <span class="text-secondary mr-3"><i class="fal fa-clock"></i></span>
                                    <span> Opening Hours</span>
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <div class="d-flex align-items-center mb-2 font-size-md">
                                        <label class="text-dark font-weight-semibold mb-0">Today</label>
                                        <span class="text-green ml-auto">Open Now!</span>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0 border-top-0">
                                            <label class="text-dark font-weight-semibold mb-0">Monday</label>
                                            <span class="text-dark ml-auto">08:00AM - 09:00PM</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="text-dark font-weight-semibold mb-0">Tuesday</label>
                                            <span class="text-dark ml-auto">08:00AM - 09:00PM</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="text-dark font-weight-semibold mb-0">Wednesday</label>
                                            <span class="text-dark ml-auto">08:00AM - 09:00PM</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="text-dark font-weight-semibold mb-0">Thursday</label>
                                            <span class="text-dark ml-auto">08:00AM - 09:00PM</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="text-dark font-weight-semibold mb-0">Friday</label>
                                            <span class="text-dark ml-auto">08:00AM - 09:00PM</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="text-dark font-weight-semibold mb-0">Saturday</label>
                                            <span class="text-dark ml-auto">08:00AM - 09:00PM</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="text-dark font-weight-semibold mb-0">Sunday</label>
                                            <span class="text-dark ml-auto">08:00AM - 09:00PM</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card p-4 widget border-0 price-status bg-gray-06 mb-6 rounded-0">
                                <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                                    <span class="text-secondary mr-3">
                                        <svg class="icon icon-dollar-sign">
                                            <use xlink:href="#icon-dollar-sign"></use>
                                        </svg>
                                    </span>
                                    <span>Price status</span>
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="font-weight-semibold text-dark mb-0">Status</label>
                                            <span class="text-green ml-auto">Ultra High End</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="font-weight-semibold text-dark mb-0">Price Range</label>
                                            <span class="text-danger font-weight-semibold font-size-md ml-auto">$10.00 - $55.00</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="font-italic mb-0">Own or work here?</label>
                                            <a href="#claim-popup" class="font-weight-semibold font-size-md ml-auto text-decoration-none" data-gtf-mfp="true" data-mfp-options='{"type":"inline"}'>Claim Now!</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card p-4 widget border-0 addition-detail bg-gray-06 mb-6 rounded-0">
                                <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                                    <span>additional details</span>
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="mb-0">Accept Card Pay</label>
                                            <span class="font-weight-semibold text-danger ml-auto">No</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="mb-0">Accept Bitcoin Pay</label>
                                            <span class="font-weight-semibold text-green ml-auto">Yes</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="mb-0">Car Parking</label>
                                            <span class="font-weight-semibold text-green ml-auto">Yes</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="mb-0">Good for Kids</label>
                                            <span class="font-weight-semibold text-green ml-auto">Yes</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="mb-0">Good for Groups</label>
                                            <span class="font-weight-semibold text-green ml-auto">Yes</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0">
                                            <label class="mb-0">Smoking</label>
                                            <span class="font-weight-semibold text-danger ml-auto">No</span>
                                        </li>
                                        <li class="list-group-item bg-transparent d-flex text-dark px-0 pt-3">
                                            <a href="#">Show More <span class="d-inline-block ml-2"><i class="fal fa-chevron-down"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card p-4 widget border-0 contact bg-gray-06 mb-6 rounded-0">
                                <div class="card-title mb-0 border-bottom pb-2 pt-1">
                                    <div class="media">
                                        <div class="image mr-3"><img src="images/listing/jobs-testimonial-1.png" alt="Contact me" class="rounded-circle"></div>
                                        <div class="media-body lh-14">
                                            <span class="font-weight-semibold text-dark text-capitalize d-block font-size-md name">Ron Weasley</span>
                                            <span class="text-gray d-block mb-2">San Francisco, CA, USA</span>
                                            <div class="d-flex pb-4 align-items-center">
                                                <a href="#" class="btn btn-primary font-size-base py-0 px-1 mr-2 rounded-sm">Follow</a>
                                                <span class="text-dark font-weight-semibold d-inline-block mr-2">2,865</span>
                                                <span class="text-gray">Followers</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-3">
                                    <div class="card-title text-uppercase text-dark font-weight-semibold font-size-md">
                                        <span class="text-secondary d-inline-block mr-2"><i class="fas fa-envelope"></i></span>
                                        <span>Contact me</span>
                                    </div>
                                    <div class="contact-form">
                                        <form>
                                            <div class="form-group mb-2">
                                                <label class="sr-only" for="name">Name</label>
                                                <input type="text" id="name" class="form-control form-control-sm border-0 bg-white" placeholder="Name:">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label class="sr-only" for="email-address">Email</label>
                                                <input type="text" id="email-address" class="form-control form-control-sm border-0 bg-white" placeholder="Email Address:">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label class="sr-only" for="message">Message</label>
                                                <textarea class="form-control border-0" id="message" placeholder="Message..."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block btn-sm">Send Message
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card p-4 widget border-0 relate-listing bg-gray-06 rounded-0">
                                <div class="card-title d-flex mb-0 font-size-md font-weight-semibold text-dark text-uppercase border-bottom pb-2 lh-1">
                                    <span>related listing</span>
                                </div>
                                <div class="card-body px-0 pb-0 pt-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item bg-transparent text-dark px-0 py-3 h-100">
                                            <div class="store media align-items-stretch">
                                                <div class="store-image">
                                                    <a href="listing-details-full-image.html">
                                                        <img src="images/shop/recent-view-1.jpg" alt="Recent view 1">
                                                    </a>
                                                </div>
                                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0 pr-0">
                                                    <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-1 lh-11"><span class="letter-spacing-25">Canabo View Street,<br> Main St</span>
                                                    </a>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div class="pr-3"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span class="number">6 rating</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
                                                            </i>
                                                        </span>
                                                        <a href="#" class="text-secondary text-decoration-none address">77
                                                            Main
                                                            St, Queen,
                                                            NY</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item bg-transparent text-dark px-0 py-3 h-100">
                                            <div class="store media align-items-stretch">
                                                <div class="store-image">
                                                    <a href="listing-details-full-image.html">
                                                        <img src="images/shop/recent-view-2.jpg" alt="Recent view 1">
                                                    </a>
                                                </div>
                                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0 pr-0">
                                                    <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-1 lh-11"><span class="letter-spacing-25">Japan's Sushi <br> 10th Ave St</span>
                                                    </a>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div class="pr-3"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
                                                            </i>
                                                        </span>
                                                        <a href="#" class="text-secondary text-decoration-none address">99
                                                            10th Ave St,
                                                            Mahattan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item bg-transparent text-dark px-0 py-3 h-100">
                                            <div class="store media align-items-stretch">
                                                <div class="store-image">
                                                    <a href="listing-details-full-image.html">
                                                        <img src="images/shop/recent-view-3.jpg" alt="Recent view 1">
                                                    </a>
                                                </div>
                                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0 pr-0">
                                                    <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-1 lh-11"><span class="letter-spacing-25">Korean Bingsu Shop</span></a>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <div class="pr-3"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
                                                            </i>
                                                        </span>
                                                        <a href="#" class="text-secondary text-decoration-none address">534
                                                            Salem Rd
                                                            St, Newark</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent-view pt-7 pb-11">
                <div class="container">
                    <div class="mb-6">
                        <h5 class="mb-0">
                            Recently Viewed
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="store media align-items-stretch bg-white">
                                <div class="store-image position-relative">
                                    <a href="listing-details-full-image.html">
                                        <img src="images/shop/recent-view-1.jpg" alt="Recent view 1">
                                    </a>
                                    <div class="image-content position-absolute d-flex align-items-center">
                                        <div class="content-right ml-auto d-flex">
                                            <a href="images/shop/full-top-place-3.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                <svg class="icon icon-expand">
                                                    <use xlink:href="#icon-expand"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                                    <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Canabo View Street, Main St</span> </a>
                                    <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                        <li class="list-inline-item"><span class="badge badge-warning d-inline-block mr-1">4.3</span><span class="number">6 rating</span>
                                        </li>
                                        <li class="list-inline-item separate"></li>
                                        <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$8.00</span></li>
                                    </ul>
                                    <div>
                                        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
                                            </i>
                                        </span>
                                        <a href="#" class="text-secondary text-decoration-none address">77 Main St,
                                            Queen,
                                            NY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="store media align-items-stretch bg-white">
                                <div class="store-image position-relative">
                                    <a href="listing-details-full-image.html">
                                        <img src="images/shop/recent-view-2.jpg" alt="Recent view 1">
                                    </a>
                                    <div class="image-content position-absolute d-flex align-items-center">
                                        <div class="content-right ml-auto d-flex">
                                            <a href="images/shop/full-top-place-4.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                <svg class="icon icon-expand">
                                                    <use xlink:href="#icon-expand"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                                    <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Japan's Sushi - 10th Ave St</span> </a>
                                    <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                        <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span>
                                        </li>
                                        <li class="list-inline-item separate"></li>
                                        <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                                    </ul>
                                    <div>
                                        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
                                            </i>
                                        </span>
                                        <a href="#" class="text-secondary text-decoration-none address">99 10th Ave
                                            St,
                                            Mahattan, NY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="store media align-items-stretch bg-white">
                                <div class="store-image position-relative">
                                    <a href="listing-details-full-image.html">
                                        <img src="images/shop/recent-view-3.jpg" alt="Recent view 1">
                                    </a>
                                    <div class="image-content position-absolute d-flex align-items-center">
                                        <div class="content-right ml-auto d-flex">
                                            <a href="images/shop/full-top-place-5.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                                <svg class="icon icon-expand">
                                                    <use xlink:href="#icon-expand"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                                    <a href="listing-details-full-image.html" class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span class="letter-spacing-25">Korean Bingsu Shop</span></a>
                                    <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                        <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span class="number">7 rating</span>
                                        </li>
                                        <li class="list-inline-item separate"></li>
                                        <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">$12.00</span></li>
                                    </ul>
                                    <div>
                                        <span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
                                            </i>
                                        </span>
                                        <a href="#" class="text-secondary text-decoration-none address">534 Salem
                                            Rd St,
                                            Newark, NY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        require_once 'modules/footerIndex.php';
        ?>

    </div>
    <div id="login-popup" class="mfp-hide">
        <div class="section">
            <h6 class="mb-0 pb-3 ah6">
                <span class="wrd">Iniciar sesión </span>
                <span class="wrd">Registrarse</span>
            </h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>

            <div class="card-3d-wrap mx-auto">

                <div class="card-3d-wrapper">

                    <div class="card-front">
                        <div class="center-wrap">
                            <form method="POST" action="<?= APP_DIR; ?>controller/loginController">
                                <div class="section text-center">
                                    <h4 class="mb-4 pb-3">Iniciar Sesión</h4>
                                    <div class="form-group">
                                        <input type="email" id="correo" name="correo" class="form-style" placeholder="Tu correo" autocomplete="off" required>
                                        <i class="input-icon uil uil-at"></i>
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="password" id="contraseña" name="contraseña" class="form-style" placeholder="Tu contraseña" autocomplete="off" required>
                                        <i class="input-icon uil uil-lock-alt"></i>
                                    </div>
                                    <button class="btn-1">Iniciar Sesión</button>
                                    <p class="mb-0 mt-4 text-center">
                                        <a href="#0" class="link">¿Olvidaste tu contraseña?</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-back">
                        <div class="center-wrap">
                            <form method="POST" action="<?= APP_DIR; ?>controller/registerController">
                                <div class="section text-center">
                                    <h4 class="mb-4 pb-3">Registrarse</h4>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="nombreUsuario" name="nombreUsuario" class="form-style" placeholder="Nombre" autocomplete="off" required>
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="apellidoUsuario" name="apellidoUsuario" class="form-style" placeholder="Apellido" autocomplete="off" Required>
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="email" id="correoUsuario" name="correoUsuario" class="form-style" placeholder="Tu correo" autocomplete="off">
                                        <i class="input-icon uil uil-at"></i>
                                    </div>
                                    <div class="form-group mt-2">
                                        <input type="password" id="contraseñaUsuario" name="contraseñaUsuario" class="form-style" placeholder="Contraseña" autocomplete="off">
                                        <i class="input-icon uil uil-lock-alt"></i>
                                    </div>
                                    <button class="btn-1">Regístrarse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="search-popup" class="mfp-hide">
        <div class="search-popup text-center">
            <h2 class="mb-8">Search</h2>
            <div class="form-search">
                <form>
                    <div class="row align-items-end">
                        <div class="form-search-item col-md-7 mb-4 mb-md-0 text-left bg-white">
                            <label for="key-word-02" class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">What</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="key-word-02" class="form-control bg-transparent border-0 p-0 font-size-md lh-1" data-toggle="dropdown" aria-haspopup="true" placeholder="Ex: food, service, barber, hotel">
                                <button type="submit" class="btn text-dark btn-link input-group-append font-weight-normal p-0">
                                    <i class="fal fa-search"></i>
                                </button>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span class="font-size-md">Foods & Restaurants</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-bed">
                                                <use xlink:href="#icon-bed"></use>
                                            </svg>
                                            <span class="font-size-md">Hotels & Resorts</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pharmaceutical">
                                                <use xlink:href="#icon-pharmaceutical"></use>
                                            </svg>
                                            <span class="font-size-md">Healths & Medicals</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-cog">
                                                <use xlink:href="#icon-cog"></use>
                                            </svg>
                                            <span class="font-size-md">Services</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-car">
                                                <use xlink:href="#icon-car"></use>
                                            </svg>
                                            <span class="font-size-md">Automotive</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-search-item col-md-5 mb-4 mb-md-0 text-left bg-white">
                            <label for="region-02" class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">Where</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="region-02" class="form-control bg-transparent border-0 p-0 font-size-md lh-1" data-toggle="dropdown" aria-haspopup="true" placeholder="San Francisco">
                                <button type="submit" class="btn text-dark btn-link input-group-append font-weight-normal p-0">
                                    <i class="fal fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="region-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Austin
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Boston
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Chicago
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Denver
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Los Angeles
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            New York
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            San Francisco
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Seattle
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Washington
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="heading mb-4">
                <div class="pt-8 font-size-lg mb-5">
                    Or browse the highlights
                </div>
            </div>
            <div class="list-inline flex-wrap my-n2">
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-pizza">
                                <use xlink:href="#icon-pizza"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Foods
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-bed">
                                <use xlink:href="#icon-bed"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block ">
                                Hotels
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-brush2">
                                <use xlink:href="#icon-brush2"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Jobs
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-pharmaceutical">
                                <use xlink:href="#icon-pharmaceutical"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Medicals
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-cog">
                                <use xlink:href="#icon-cog"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Services
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-bag">
                                <use xlink:href="#icon-bag"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Shopping
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html" class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-car">
                                <use xlink:href="#icon-car"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Automotive
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <a href="#" class="d-inline-block button-close mt-11 pt-1 text-dark font-size-lg font-weight-semibold text-decoration-none">
                <span class="d-block"><i class="fal fa-times"></i></span>
                <span class="d-block">Close</span>
            </a>
        </div>
    </div>
    <div id="claim-popup" class="mfp-hide">
        <div class="claim-request-popup text-center card border-0 rounded-0">
            <img src="images/other/claim-request-image.jpg" alt="Claim image" class="card-img-top">
            <div class="card-body py-7 px-8">
                <div class="text-uppercase">
                    start managing your listing like a pro
                </div>
                <h3 class="text-dark font-weight-bold text-uppercase mb-4">all from <span class="text-primary">one</span> dashboard</h3>
                <div class="letter-spacing-25">Edit business listing, add photos, videos, etc.<br> Promote your listings
                    with
                    ads to drive sales.<br> Start receiving messages from leeds
                </div>
                <div class="border-top pt-4 mt-4">
                    <div class="text-dark font-size-md text-uppercase font-weight-semibold mb-4">fill the details below
                        to claim for free!
                    </div>
                    <form>
                        <div class="form-row mb-4">
                            <div class="col-sm-6 mb-4 mb-sm-0">
                                <label for="full-name" class="sr-only">Full name</label>
                                <input id="full-name" type="text" class="form-control" placeholder="Full name">
                            </div>
                            <div class="col-sm-6 ">
                                <label for="phone" class="sr-only">Full name</label>
                                <input id="phone" type="text" class="form-control" placeholder="Your phone">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="content" class="sr-only">Full name</label>
                            <textarea id="content" class="form-control" placeholder="Additional proof to expedite  your claim approval."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block text-uppercase font-weight-bold font-size-lg lh-15">
                            claim
                            your business
                            Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var map;

        function initialize() {
            const fenway = {
                lat: 4.610,
                lng: -74.082
            };
            const map = new google.maps.Map(document.getElementById("googleMap"), {
                center: fenway,
                zoom: 14,
            });
            const panorama = new google.maps.StreetViewPanorama(
                document.getElementById("pano"), {
                    position: fenway,
                    pov: {
                        heading: 34,
                        pitch: 10,
                    },
                }
            );
            map.setStreetView(panorama);
        }
    </script>

    <script src="./vendors/jquery.min.js"></script>
    <script src="./vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="./vendors/popper/popper.js"></script>
    <script src="./vendors/bootstrap/js/bootstrap.js"></script>
    <script src="./vendors/hc-sticky/hc-sticky.js"></script>
    <script src="./vendors/isotope/isotope.pkgd.js"></script>
    <script src="./vendors/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="./vendors/slick/slick.js"></script>
    <script src="./vendors/waypoints/jquery.waypoints.js"></script>
    <script src="./vendors/air-datepicker/js/datepicker.min.js"></script>
    <script src="./vendors/air-datepicker/js/i18n/datepicker.en.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9G8XOmHcbXvq9G7QE2klKp79EPFdCdxc&callback=initialize&libraries=&v=weekly" async></script>

    <script src="<?= APP_DIR; ?>assets/js1/index/app.js"></script>
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-bed" viewBox="0 0 32 32">
                <title>bed</title>
                <path d="M28 28.8h-1.6c-0.442 0-0.8-0.358-0.8-0.8s0.358-0.8 0.8-0.8h1.6c0.442 0 0.8 0.358 0.8 0.8s-0.358 0.8-0.8 0.8zM4 28.8h-1.6c-0.442 0-0.8-0.358-0.8-0.8s0.358-0.8 0.8-0.8h1.6c0.442 0 0.8 0.358 0.8 0.8s-0.358 0.8-0.8 0.8zM29.853 18.229l-3.789-11.365c-0.318-0.954-1.229-1.738-2.221-1.984-0.035-0.152-0.074-0.298-0.118-0.432-0.363-1.088-0.986-1.25-1.325-1.25h-6.4c-0.203 0-0.509 0.059-0.8 0.341-0.291-0.282-0.597-0.341-0.8-0.341h-6.4c-0.339 0-0.962 0.163-1.325 1.25-0.045 0.134-0.085 0.278-0.118 0.432-0.994 0.246-1.904 1.029-2.221 1.984l-3.789 11.365c-0.307 0.92-0.547 2.402-0.547 3.371v3.2c0 1.323 1.077 2.4 2.4 2.4h25.6c1.323 0 2.4-1.077 2.4-2.4v-3.2c0-0.97-0.24-2.451-0.547-3.371zM16.251 4.8h5.898c0.112 0.251 0.251 0.822 0.251 1.6s-0.139 1.349-0.251 1.6h-5.898c-0.112-0.251-0.251-0.822-0.251-1.6s0.139-1.349 0.251-1.6zM8.251 4.8h5.898c0.112 0.251 0.251 0.822 0.251 1.6s-0.139 1.349-0.251 1.6h-5.898c-0.112-0.251-0.251-0.822-0.251-1.6s0.139-1.349 0.251-1.6zM5.853 7.371c0.086-0.259 0.296-0.507 0.552-0.686 0.022 0.621 0.115 1.203 0.27 1.666 0.363 1.088 0.986 1.25 1.325 1.25h6.4c0.203 0 0.509-0.059 0.8-0.341 0.291 0.282 0.597 0.341 0.8 0.341h6.4c0.339 0 0.962-0.163 1.325-1.25 0.154-0.462 0.248-1.046 0.27-1.666 0.256 0.181 0.466 0.427 0.552 0.686l1.277 3.829h-21.246l1.277-3.829zM4.043 12.8h22.314l1.978 5.934c0.051 0.152 0.099 0.326 0.146 0.514-0.155-0.032-0.315-0.048-0.48-0.048h-25.6c-0.165 0-0.325 0.016-0.48 0.048 0.046-0.187 0.094-0.362 0.146-0.514l1.979-5.934zM28.8 24.8c0 0.442-0.358 0.8-0.8 0.8h-25.6c-0.442 0-0.8-0.358-0.8-0.8v-3.2c0-0.442 0.358-0.8 0.8-0.8h25.6c0.442 0 0.8 0.358 0.8 0.8v3.2z"></path>
            </symbol>
            <symbol id="icon-brush2" viewBox="0 0 32 32">
                <title>brush2</title>
                <path d="M5.6 27.2c-0.211 0-0.418-0.085-0.565-0.235s-0.235-0.355-0.235-0.565 0.085-0.416 0.235-0.565c0.149-0.149 0.355-0.235 0.565-0.235s0.416 0.085 0.565 0.235c0.149 0.149 0.235 0.355 0.235 0.565s-0.085 0.418-0.235 0.565c-0.149 0.149-0.355 0.235-0.565 0.235zM29.834 15.102l-12.938-12.938c-0.453-0.453-1.054-0.701-1.698-0.701s-1.245 0.25-1.698 0.701l-8.138 8.138c-0.862 0.862-1.112 2.394-0.566 3.486l2.57 5.138c0.078 0.158 0.093 0.309 0.038 0.424s-0.178 0.203-0.35 0.243c-0.138 0.034-3.406 0.834-5.418 2.845-1.058 1.058-1.64 2.464-1.64 3.96s0.582 2.902 1.64 3.96c1.058 1.058 2.464 1.64 3.96 1.64 0 0 0 0 0 0 1.496 0 2.902-0.582 3.96-1.64 2.011-2.011 2.813-5.28 2.845-5.418 0.034-0.142 0.131-0.382 0.398-0.382 0.085 0 0.176 0.024 0.27 0.072l5.138 2.57c0.381 0.19 0.827 0.291 1.293 0.291 0.837 0 1.656-0.32 2.192-0.856l8.138-8.138c0.936-0.936 0.936-2.458 0-3.394zM20.566 25.502c-0.235 0.235-0.653 0.387-1.061 0.387-0.219 0-0.419-0.042-0.578-0.122l-5.138-2.57c-0.318-0.16-0.651-0.24-0.986-0.24-0.938 0-1.723 0.646-1.954 1.61-0.006 0.029-0.733 2.973-2.421 4.659-0.755 0.755-1.76 1.171-2.829 1.171s-2.074-0.416-2.829-1.171c-0.755-0.755-1.171-1.76-1.171-2.829s0.416-2.074 1.171-2.829c1.688-1.688 4.63-2.414 4.659-2.421 0.646-0.155 1.166-0.565 1.427-1.123s0.24-1.221-0.058-1.816l-2.57-5.138c-0.24-0.478-0.112-1.261 0.266-1.638l1.502-1.502 14.069 14.069-1.502 1.502zM28.702 17.366l-5.502 5.502-14.069-14.069 5.502-5.502c0.15-0.15 0.35-0.232 0.566-0.232s0.416 0.083 0.566 0.232l12.938 12.938c0.312 0.312 0.312 0.819 0 1.131z"></path>
            </symbol>
            <symbol id="icon-cog" viewBox="0 0 32 32">
                <title>cog</title>
                <path d="M12.21 31.523c-0.066 0-0.133-0.008-0.2-0.026-1.437-0.37-2.818-0.939-4.102-1.694-0.373-0.219-0.504-0.694-0.298-1.074 0.254-0.467 0.389-0.995 0.389-1.531 0-1.765-1.435-3.2-3.2-3.2-0.534 0-1.064 0.134-1.531 0.389-0.379 0.206-0.854 0.075-1.074-0.298-0.755-1.286-1.325-2.666-1.694-4.102-0.104-0.406 0.123-0.824 0.52-0.957 1.302-0.438 2.179-1.658 2.179-3.032s-0.875-2.594-2.179-3.032c-0.397-0.134-0.624-0.55-0.52-0.957 0.37-1.437 0.939-2.818 1.694-4.102 0.219-0.373 0.694-0.504 1.074-0.298 0.466 0.254 0.995 0.389 1.531 0.389 1.765 0 3.2-1.435 3.2-3.2 0-0.534-0.134-1.064-0.389-1.531-0.206-0.379-0.075-0.854 0.298-1.074 1.286-0.755 2.666-1.325 4.102-1.694 0.406-0.104 0.824 0.123 0.957 0.52 0.438 1.302 1.658 2.179 3.032 2.179s2.594-0.875 3.032-2.179c0.134-0.397 0.552-0.624 0.957-0.52 1.437 0.37 2.818 0.939 4.102 1.694 0.373 0.219 0.504 0.694 0.298 1.074-0.254 0.467-0.389 0.995-0.389 1.531 0 1.765 1.435 3.2 3.2 3.2 0.534 0 1.064-0.134 1.531-0.389 0.379-0.206 0.854-0.075 1.074 0.298 0.755 1.286 1.325 2.666 1.694 4.102 0.104 0.406-0.123 0.824-0.52 0.957-1.302 0.438-2.179 1.658-2.179 3.032s0.875 2.594 2.179 3.032c0.397 0.134 0.624 0.55 0.52 0.957-0.37 1.437-0.939 2.818-1.694 4.102-0.219 0.373-0.694 0.504-1.074 0.298-0.467-0.254-0.995-0.389-1.531-0.389-1.765 0-3.2 1.435-3.2 3.2 0 0.534 0.134 1.064 0.389 1.531 0.206 0.379 0.075 0.854-0.298 1.074-1.286 0.755-2.666 1.325-4.102 1.694-0.406 0.104-0.824-0.123-0.957-0.52-0.438-1.302-1.658-2.179-3.032-2.179s-2.594 0.875-3.032 2.179c-0.112 0.331-0.422 0.546-0.758 0.546zM16 27.2c1.803 0 3.427 1.005 4.248 2.563 0.832-0.258 1.642-0.59 2.416-0.995-0.173-0.502-0.262-1.034-0.262-1.568 0-2.646 2.154-4.8 4.8-4.8 0.534 0 1.066 0.090 1.568 0.262 0.405-0.774 0.739-1.582 0.995-2.416-1.558-0.819-2.563-2.443-2.563-4.248s1.005-3.427 2.563-4.248c-0.258-0.832-0.59-1.642-0.995-2.416-0.502 0.173-1.034 0.262-1.568 0.262-2.646 0-4.8-2.154-4.8-4.8 0-0.534 0.090-1.066 0.262-1.568-0.774-0.405-1.582-0.739-2.416-0.995-0.819 1.558-2.443 2.563-4.248 2.563s-3.427-1.005-4.248-2.563c-0.832 0.256-1.642 0.59-2.416 0.995 0.173 0.502 0.262 1.034 0.262 1.568 0 2.646-2.154 4.8-4.8 4.8-0.534 0-1.066-0.090-1.568-0.262-0.405 0.774-0.739 1.582-0.995 2.416 1.558 0.819 2.563 2.443 2.563 4.248s-1.005 3.427-2.563 4.248c0.256 0.832 0.59 1.642 0.995 2.416 0.502-0.173 1.034-0.262 1.568-0.262 2.646 0 4.8 2.154 4.8 4.8 0 0.534-0.090 1.066-0.262 1.568 0.774 0.405 1.582 0.739 2.416 0.995 0.819-1.558 2.443-2.563 4.248-2.563zM16 20.8c-2.646 0-4.8-2.154-4.8-4.8s2.154-4.8 4.8-4.8 4.8 2.154 4.8 4.8-2.154 4.8-4.8 4.8zM16 12.8c-1.765 0-3.2 1.435-3.2 3.2s1.435 3.2 3.2 3.2c1.765 0 3.2-1.435 3.2-3.2s-1.435-3.2-3.2-3.2z"></path>
            </symbol>
            <symbol id="icon-bag" viewBox="0 0 32 32">
                <title>bag</title>
                <path d="M13.6 27.2c-0.349 0-0.669-0.229-0.77-0.581-0.122-0.426 0.125-0.867 0.549-0.989l11.2-3.2c0.426-0.122 0.867 0.125 0.989 0.549s-0.125 0.867-0.549 0.989l-11.2 3.2c-0.074 0.021-0.147 0.030-0.221 0.030zM28.797 26.333l-1.6-19.2c-0.022-0.274-0.186-0.523-0.438-0.65l-3.2-1.6c-0.395-0.197-0.875-0.037-1.074 0.358s-0.037 0.875 0.358 1.074l1.115 0.557-2.013 0.403c-0.046-0.331-0.099-0.669-0.155-1.006-0.712-4.277-1.79-6.269-3.389-6.269-0.638 0-1.238 0.269-1.731 0.778-1.125 1.158-1.822 3.624-2.133 7.536-0.013 0.152-0.022 0.301-0.034 0.45l-3.933 0.787-2.965-1.976 6.17-1.371c0.432-0.096 0.704-0.523 0.608-0.955s-0.523-0.702-0.955-0.608l-1.64 0.365c0.442-2.154 1.096-3.406 1.813-3.406 0.086 0 0.262 0.115 0.475 0.438 0.243 0.37 0.739 0.472 1.107 0.229s0.472-0.739 0.229-1.107c-0.63-0.96-1.333-1.16-1.813-1.16-0.734 0-1.774 0.355-2.566 2.043-0.39 0.834-0.709 1.955-0.946 3.339l-4.662 1.035c-0.314 0.069-0.554 0.318-0.613 0.634-0.005 0.029-0.008 0.058-0.011 0.085v0l-1.6 20.8c-0.026 0.325 0.149 0.632 0.44 0.778l6.4 3.2c0.112 0.056 0.235 0.085 0.358 0.085 0.070 0 0.141-0.010 0.211-0.029l17.6-4.8c0.373-0.101 0.619-0.454 0.587-0.838zM17.816 1.893c0.254-0.262 0.454-0.293 0.584-0.293s0.482 0.261 0.882 1.246c0.354 0.872 0.666 2.109 0.926 3.674 0.059 0.358 0.114 0.717 0.163 1.070l-4.242 0.848c0.363-4.557 1.213-6.058 1.686-6.546zM6.293 8.624l3.307 2.205v19.077l-4.762-2.381 1.454-18.902zM11.2 30.152v-19.096l3.214-0.643c-0.067 1.803-0.029 3.136-0.027 3.211 0.013 0.434 0.368 0.776 0.798 0.776 0.008 0 0.016 0 0.024 0 0.442-0.013 0.789-0.382 0.776-0.824 0-0.019-0.045-1.53 0.043-3.486l4.539-0.907c0.173 1.614 0.234 2.837 0.234 2.856 0.021 0.442 0.395 0.782 0.837 0.762s0.782-0.395 0.762-0.837c-0.003-0.078-0.067-1.382-0.256-3.094l3.534-0.707 1.47 17.643-15.947 4.349z"></path>
            </symbol>
            <symbol id="icon-pizza" viewBox="0 0 32 32">
                <title>pizza</title>
                <path d="M31.92 14.931c-0.072-0.2-0.219-0.363-0.411-0.454l-4.338-2.058c0 0 0 0 0 0s0 0 0 0l-26.029-12.342c-0.306-0.146-0.669-0.082-0.909 0.157s-0.302 0.603-0.157 0.909l12.342 26.029c0 0 0 0 0 0s0 0 0 0l2.056 4.338c0.091 0.192 0.254 0.339 0.454 0.411 0.086 0.030 0.178 0.046 0.269 0.046 0.118 0 0.235-0.026 0.344-0.077 7.146-3.395 12.95-9.2 16.346-16.346 0.091-0.192 0.102-0.411 0.030-0.611zM22.4 12.8c0 0.882-0.718 1.6-1.6 1.6s-1.6-0.718-1.6-1.6 0.718-1.6 1.6-1.6c0.019 0 0.038-0.002 0.058-0.003l1.138 0.539c0.262 0.293 0.405 0.666 0.405 1.064zM18.866 10.253c-0.768 0.586-1.266 1.509-1.266 2.547 0 1.765 1.435 3.2 3.2 3.2s3.2-1.435 3.2-3.2c0-0.038-0.003-0.077-0.010-0.117l1.762 0.835c-2.682 5.25-6.984 9.552-12.234 12.234l-3.139-6.621c0.269 0.046 0.544 0.070 0.822 0.070 2.646 0 4.8-2.154 4.8-4.8s-2.154-4.8-4.8-4.8c-1.261 0-2.451 0.485-3.354 1.365-0.331 0.323-0.608 0.686-0.83 1.078l-4.533-9.56 16.382 7.768zM8.011 14.139c0.131-1.661 1.499-2.939 3.189-2.939 1.765 0 3.2 1.435 3.2 3.2s-1.435 3.2-3.2 3.2c-0.658 0-1.282-0.195-1.816-0.565l-1.373-2.896zM15.576 30.091l-1.373-2.894c5.582-2.84 10.154-7.411 12.994-12.994l2.894 1.373c-3.158 6.246-8.269 11.358-14.515 14.515zM7.2 8h1.6c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-1.6c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8zM18.4 20.8c0.442 0 0.8-0.358 0.8-0.8v-1.6c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v1.6c0 0.442 0.358 0.8 0.8 0.8z"></path>
            </symbol>
            <symbol id="icon-car" viewBox="0 0 32 32">
                <title>car</title>
                <path d="M32.002 24.816c0-0.018 0-0.037-0.002-0.054-0.010-0.413-0.15-2.933-2.042-3.878-0.274-0.136-0.84-0.419-6.213-0.838-0.195-0.448-0.523-1.17-0.922-1.925-1.246-2.365-2.032-2.907-2.515-3.109-1.691-0.707-6.787-0.867-10.102-0.038-2.075 0.518-3.934 1.741-5.376 3.534-0.821 1.021-1.291 1.957-1.478 2.373-0.475 0.374-0.904 0.81-1.285 1.307-1.371 1.784-2.066 4.277-2.066 7.411 0 0.213 0.085 0.416 0.234 0.566s0.354 0.234 0.566 0.234h1.656c0.398 0 0.736-0.293 0.792-0.686 0.045-0.315 0.122-0.621 0.226-0.912 0.661 1.862 2.44 3.2 4.525 3.2s3.864-1.338 4.525-3.2c0.104 0.293 0.181 0.597 0.226 0.912 0.056 0.394 0.394 0.686 0.792 0.686h9.714c0.398 0 0.736-0.293 0.792-0.686 0.027-0.19 0.067-0.378 0.117-0.56 0.498 1.645 2.027 2.846 3.832 2.846 2.208 0 4.003-1.795 4.003-4.003 0-0.888-0.29-1.714-0.786-2.382 0.435-0.008 0.786-0.362 0.786-0.8zM10.594 16.526c3.062-0.766 7.837-0.565 9.098-0.038 0.061 0.026 0.624 0.307 1.71 2.368 0.195 0.368 0.373 0.733 0.525 1.056-0.968-0.067-2.056-0.138-3.28-0.211-4.95-0.298-9.766-0.499-9.814-0.501-0.011 0-0.022 0-0.034 0-0.994 0-1.91 0.115-2.747 0.344 0.933-1.168 2.403-2.483 4.542-3.018zM8 30.4c-1.765 0-3.2-1.435-3.2-3.2 0-0.131 0.010-0.261 0.024-0.39 0.854-0.754 1.971-1.21 3.176-1.21s2.322 0.456 3.176 1.21c0.016 0.13 0.024 0.259 0.024 0.39 0 1.765-1.435 3.2-3.2 3.2zM22.602 28.8h-8.405c-0.288-1.117-0.877-2.139-1.704-2.955-0.008-0.008-0.018-0.018-0.026-0.026-0.083-0.082-0.17-0.162-0.258-0.238-1.165-1.019-2.661-1.579-4.211-1.579s-3.045 0.562-4.211 1.579c-0.069 0.061-0.136 0.122-0.202 0.186-0.046 0.037-0.088 0.077-0.125 0.123-0.803 0.808-1.378 1.814-1.659 2.912h-0.186c0.168-3.819 1.621-7.992 7.166-8 0.315 0.013 4.933 0.21 9.693 0.494 9.090 0.544 10.541 0.92 10.765 1.021 0.637 0.318 0.923 1.083 1.053 1.685h-1.494c-0.16 0-0.32 0.006-0.478 0.018-0.010 0-0.019 0.002-0.029 0.002-1.042 0.083-2.045 0.418-2.922 0.976-0.010 0.005-0.018 0.011-0.027 0.018-0.264 0.17-0.517 0.358-0.755 0.566-0.976 0.854-1.667 1.979-1.987 3.219zM27.997 30.4c-1.325 0-2.403-1.078-2.403-2.403 0-0.629 0.238-1.216 0.67-1.666 0.621-0.389 1.333-0.64 2.091-0.71 1.171 0.174 2.045 1.182 2.045 2.376 0 1.325-1.078 2.403-2.403 2.403z"></path>
            </symbol>
            <symbol id="icon-pharmaceutical" viewBox="0 0 32 32">
                <title>pharmaceutical</title>
                <path d="M25.003 17.956c-3.858 0-6.997 3.139-6.997 6.997s3.139 6.997 6.997 6.997 6.997-3.139 6.997-6.997c-0-3.858-3.139-6.997-6.997-6.997zM25.003 30.588c-3.107 0-5.634-2.528-5.634-5.634s2.528-5.634 5.634-5.634 5.634 2.528 5.634 5.634c-0 3.107-2.528 5.634-5.634 5.634z"></path>
                <path d="M27.133 21.498c-0.32-0.197-0.74-0.098-0.938 0.223l-3.545 5.751c-0.198 0.32-0.098 0.74 0.223 0.938 0.111 0.069 0.235 0.102 0.357 0.102 0.229 0 0.452-0.115 0.581-0.324l3.545-5.751c0.198-0.321 0.098-0.74-0.223-0.938z"></path>
                <path d="M5.541 27.145l-0.104-0.065c-0.565-0.354-0.959-0.907-1.109-1.559s-0.038-1.322 0.316-1.887c0.2-0.319 0.103-0.74-0.216-0.939s-0.74-0.103-0.939 0.216c-0.547 0.874-0.72 1.909-0.489 2.916s0.84 1.862 1.714 2.409l0.104 0.065c0.112 0.070 0.237 0.104 0.361 0.104 0.227 0 0.449-0.113 0.578-0.32 0.2-0.319 0.103-0.74-0.216-0.939z"></path>
                <path d="M19.45 4.692l0.104 0.065c1.169 0.732 1.525 2.278 0.793 3.446-0.2 0.319-0.103 0.74 0.216 0.939 0.112 0.070 0.237 0.104 0.361 0.104 0.227 0 0.449-0.113 0.578-0.32 1.13-1.806 0.581-4.195-1.225-5.325l-0.104-0.065c-0.319-0.2-0.74-0.103-0.939 0.216s-0.103 0.74 0.216 0.939z"></path>
                <path d="M18.279 19.538c0-0 0-0 0-0l5.679-9.074c0.958-1.531 1.263-3.343 0.858-5.103s-1.471-3.257-3.002-4.215l-0.104-0.065c-1.077-0.674-2.316-1.031-3.581-1.031-2.348 0-4.493 1.187-5.737 3.175l-11.359 18.148c-0.958 1.531-1.263 3.343-0.858 5.103s1.471 3.257 3.002 4.215l0.104 0.065c1.077 0.674 2.316 1.031 3.582 1.031 2.348 0 4.493-1.187 5.737-3.175l5.679-9.074c0 0 0 0 0 0zM13.547 3.947c0.994-1.587 2.706-2.535 4.582-2.535 1.009 0 1.998 0.285 2.858 0.823l0.104 0.065c1.222 0.765 2.073 1.96 2.397 3.365s0.080 2.852-0.685 4.074l-5.318 8.496-9.256-5.793 5.318-8.496zM11.444 27.889c-0.994 1.587-2.706 2.535-4.582 2.535-1.009 0-1.998-0.285-2.858-0.823l-0.104-0.065c-1.222-0.765-2.073-1.96-2.397-3.365s-0.080-2.852 0.685-4.075l5.318-8.496 9.256 5.793-5.318 8.496z"></path>
            </symbol>
            <symbol id="icon-checkmark-circle" viewBox="0 0 32 32">
                <title>checkmark-circle</title>
                <path d="M15.2 32c-4.061 0-7.877-1.581-10.749-4.451s-4.451-6.688-4.451-10.747c0-4.061 1.581-7.877 4.451-10.749s6.688-4.453 10.749-4.453c4.061 0 7.877 1.581 10.749 4.453s4.451 6.688 4.451 10.749-1.581 7.877-4.451 10.747c-2.87 2.87-6.688 4.451-10.749 4.451zM15.2 3.2c-7.499 0-13.6 6.101-13.6 13.6s6.101 13.6 13.6 13.6 13.6-6.101 13.6-13.6-6.101-13.6-13.6-13.6zM12 23.2c-0.205 0-0.41-0.078-0.566-0.234l-4.8-4.8c-0.312-0.312-0.312-0.819 0-1.131s0.819-0.312 1.131 0l4.234 4.234 10.634-10.634c0.312-0.312 0.819-0.312 1.131 0s0.312 0.819 0 1.131l-11.2 11.2c-0.157 0.157-0.362 0.234-0.566 0.234z"></path>
            </symbol>
            <symbol id="icon-user-circle-o" viewBox="0 0 28 28">
                <title>user-circle-o</title>
                <path d="M14 0c7.734 0 14 6.266 14 14 0 7.688-6.234 14-14 14-7.75 0-14-6.297-14-14 0-7.734 6.266-14 14-14zM23.672 21.109c1.453-2 2.328-4.453 2.328-7.109 0-6.609-5.391-12-12-12s-12 5.391-12 12c0 2.656 0.875 5.109 2.328 7.109 0.562-2.797 1.922-5.109 4.781-5.109 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c2.859 0 4.219 2.312 4.781 5.109zM20 11c0-3.313-2.688-6-6-6s-6 2.688-6 6 2.688 6 6 6 6-2.688 6-6z"></path>
            </symbol>
            <symbol id="icon-expand" viewBox="0 0 32 32">
                <title>expand</title>
                <path d="M12.566 11.434l-9.834-9.834h6.069c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-8c-0.442 0-0.8 0.358-0.8 0.8v8c0 0.442 0.358 0.8 0.8 0.8s0.8-0.358 0.8-0.8v-6.069l9.834 9.834c0.157 0.157 0.362 0.234 0.566 0.234s0.41-0.078 0.566-0.234c0.312-0.312 0.312-0.819 0-1.131zM31.2 0h-8c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h6.069l-9.834 9.834c-0.312 0.312-0.312 0.819 0 1.131 0.157 0.157 0.362 0.234 0.565 0.234s0.41-0.078 0.565-0.234l9.835-9.834v6.069c0 0.442 0.358 0.8 0.8 0.8s0.8-0.358 0.8-0.8v-8c0-0.442-0.358-0.8-0.8-0.8zM12.566 19.435c-0.312-0.312-0.819-0.312-1.131 0l-9.834 9.834v-6.069c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v8c0 0.442 0.358 0.8 0.8 0.8h8c0.442 0 0.8-0.358 0.8-0.8s-0.358-0.8-0.8-0.8h-6.069l9.834-9.835c0.312-0.312 0.312-0.819 0-1.131zM31.2 22.4c-0.442 0-0.8 0.358-0.8 0.8v6.069l-9.835-9.834c-0.312-0.312-0.819-0.312-1.131 0s-0.312 0.819 0 1.131l9.835 9.834h-6.069c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8h8c0.442 0 0.8-0.358 0.8-0.8v-8c0-0.442-0.358-0.8-0.8-0.8z"></path>
            </symbol>
            <symbol id="icon-quote" viewBox="0 0 20 20">
                <title>quote</title>
                <path d="M5.315 3.401c-1.61 0-2.916 1.343-2.916 3s1.306 3 2.916 3c2.915 0 0.972 5.799-2.916 5.799v1.4c6.939 0.001 9.658-13.199 2.916-13.199zM13.715 3.401c-1.609 0-2.915 1.343-2.915 3s1.306 3 2.915 3c2.916 0 0.973 5.799-2.915 5.799v1.4c6.938 0.001 9.657-13.199 2.915-13.199z"></path>
            </symbol>
            <symbol id="icon-google-plus-symbol" viewBox="0 0 32 32">
                <title>google-plus-symbol</title>
                <path d="M18.413 20.375c-0.34-0.455-0.715-0.879-1.125-1.269s-0.821-0.747-1.231-1.067c-0.41-0.32-0.785-0.628-1.125-0.923s-0.615-0.602-0.827-0.923-0.317-0.647-0.317-0.981c0-0.462 0.148-0.894 0.442-1.298s0.654-0.795 1.077-1.173c0.423-0.378 0.846-0.792 1.269-1.24s0.782-1.042 1.077-1.779c0.295-0.737 0.442-1.58 0.442-2.529 0-1.128-0.25-2.212-0.75-3.25s-1.205-1.846-2.115-2.423h2.596l2.596-1.519h-8.403c-1.192 0-2.391 0.128-3.596 0.385-1.782 0.397-3.282 1.305-4.5 2.721s-1.827 3.022-1.827 4.817c0 1.897 0.683 3.474 2.048 4.731s3.003 1.884 4.913 1.884c0.385 0 0.833-0.032 1.346-0.096-0.026 0.102-0.070 0.24-0.134 0.413s-0.116 0.311-0.154 0.414c-0.038 0.102-0.071 0.227-0.096 0.375s-0.038 0.298-0.038 0.452c0 0.846 0.41 1.801 1.231 2.865-0.974 0.026-1.936 0.112-2.884 0.26s-1.942 0.378-2.981 0.692c-1.038 0.314-1.968 0.769-2.788 1.365s-1.436 1.304-1.846 2.125c-0.474 0.949-0.712 1.814-0.712 2.596 0 0.859 0.192 1.638 0.577 2.337s0.878 1.269 1.481 1.711c0.603 0.443 1.298 0.814 2.087 1.116s1.57 0.516 2.346 0.644c0.776 0.128 1.542 0.192 2.298 0.192 3.436 0 6.128-0.84 8.077-2.519 1.795-1.564 2.692-3.372 2.692-5.423 0-0.731-0.106-1.413-0.317-2.048s-0.487-1.18-0.827-1.635zM11 13.385c-0.654 0-1.276-0.167-1.865-0.5s-1.090-0.766-1.5-1.298c-0.41-0.532-0.769-1.131-1.077-1.798s-0.535-1.333-0.683-2c-0.147-0.666-0.221-1.301-0.221-1.904 0-1.231 0.327-2.288 0.981-3.173s1.577-1.327 2.769-1.327c0.846 0 1.612 0.263 2.298 0.788s1.224 1.192 1.615 2c0.391 0.808 0.692 1.644 0.904 2.509s0.317 1.683 0.317 2.452c0 1.282-0.279 2.311-0.836 3.087s-1.458 1.163-2.702 1.163zM16.317 27.826c-0.352 0.603-0.83 1.074-1.432 1.413s-1.247 0.59-1.933 0.75c-0.686 0.161-1.407 0.241-2.163 0.241-0.821 0-1.635-0.096-2.442-0.289s-1.58-0.484-2.317-0.875c-0.737-0.391-1.333-0.929-1.788-1.615s-0.683-1.465-0.683-2.337c0-0.769 0.173-1.455 0.519-2.058s0.789-1.083 1.327-1.442c0.538-0.359 1.167-0.654 1.885-0.884s1.41-0.391 2.077-0.481c0.666-0.090 1.346-0.134 2.038-0.134 0.423 0 0.744 0.013 0.962 0.038 0.077 0.052 0.272 0.186 0.587 0.404s0.526 0.366 0.635 0.443c0.109 0.077 0.308 0.224 0.596 0.442s0.493 0.381 0.615 0.49c0.121 0.109 0.298 0.272 0.529 0.49s0.401 0.407 0.51 0.567c0.109 0.16 0.244 0.356 0.404 0.586s0.272 0.452 0.337 0.664c0.064 0.212 0.125 0.442 0.182 0.692s0.086 0.51 0.086 0.779c0 0.807-0.176 1.513-0.529 2.115z"></path>
                <path d="M27.077 4.923v-4.923h-2.462v4.923h-4.923v2.462h5.923v4.923h2.462v-4.923h5.923v-2.462z"></path>
            </symbol>
            <symbol id="icon-instagram" viewBox="0 0 20 20">
                <title>instagram</title>
                <path d="M17 1h-14c-1.1 0-2 0.9-2 2v14c0 1.101 0.9 2 2 2h14c1.1 0 2-0.899 2-2v-14c0-1.1-0.9-2-2-2zM9.984 15.523c3.059 0 5.538-2.481 5.538-5.539 0-0.338-0.043-0.664-0.103-0.984h1.581v7.216c0 0.382-0.31 0.69-0.693 0.69h-12.614c-0.383 0-0.693-0.308-0.693-0.69v-7.216h1.549c-0.061 0.32-0.104 0.646-0.104 0.984 0 3.059 2.481 5.539 5.539 5.539zM6.523 9.984c0-1.912 1.55-3.461 3.462-3.461s3.462 1.549 3.462 3.461-1.551 3.462-3.462 3.462c-1.913 0-3.462-1.55-3.462-3.462zM16.307 6h-1.615c-0.382 0-0.692-0.312-0.692-0.692v-1.617c0-0.382 0.31-0.691 0.691-0.691h1.615c0.384 0 0.694 0.309 0.694 0.691v1.616c0 0.381-0.31 0.693-0.693 0.693z"></path>
            </symbol>
            <symbol id="icon-telephone" viewBox="0 0 32 32">
                <title>telephone</title>
                <path d="M25.6 32c-2.834 0-5.848-0.803-8.96-2.387-2.869-1.461-5.702-3.552-8.195-6.048s-4.581-5.333-6.040-8.203c-1.581-3.114-2.384-6.128-2.384-8.962 0-1.837 1.712-3.611 2.446-4.288 1.058-0.974 2.722-2.112 3.931-2.112 0.602 0 1.306 0.394 2.219 1.238 0.68 0.63 1.446 1.485 2.213 2.47 0.462 0.595 2.768 3.634 2.768 5.091 0 1.195-1.352 2.027-2.782 2.906-0.554 0.339-1.125 0.691-1.538 1.022-0.442 0.354-0.52 0.541-0.533 0.582 1.518 3.786 6.16 8.427 9.944 9.944 0.034-0.011 0.221-0.085 0.581-0.533 0.331-0.413 0.683-0.986 1.022-1.538 0.88-1.43 1.71-2.782 2.906-2.782 1.458 0 4.496 2.306 5.091 2.768 0.986 0.766 1.84 1.533 2.47 2.213 0.845 0.912 1.238 1.618 1.238 2.219 0 1.21-1.138 2.878-2.11 3.941-0.678 0.739-2.453 2.459-4.29 2.459zM6.39 1.6c-0.429 0.008-1.582 0.533-2.837 1.688-1.19 1.098-1.931 2.29-1.931 3.112 0 10.766 13.222 24 23.978 24 0.821 0 2.013-0.744 3.11-1.941 1.157-1.261 1.682-2.419 1.69-2.85-0.051-0.304-0.893-1.486-3.195-3.259-1.979-1.523-3.584-2.341-3.997-2.35-0.029 0.008-0.208 0.077-0.571 0.538-0.315 0.402-0.653 0.95-0.981 1.482-0.896 1.458-1.742 2.835-2.973 2.835-0.198 0-0.394-0.038-0.581-0.114-4.2-1.68-9.166-6.646-10.846-10.846-0.202-0.504-0.234-1.294 0.758-2.194 0.528-0.478 1.258-0.926 1.965-1.362 0.531-0.326 1.082-0.664 1.482-0.981 0.461-0.363 0.53-0.542 0.538-0.571-0.011-0.413-0.827-2.018-2.35-3.997-1.773-2.302-2.955-3.142-3.259-3.195z"></path>
            </symbol>
            <symbol id="icon-ionicons_svg_md-images" viewBox="0 0 32 32">
                <title>ionicons_svg_md-images</title>
                <path d="M28.6 8.762l-5.156-0.25-0.3-3.362c-0.063-0.706-0.694-1.2-1.431-1.144l-18.494 1.519c-0.737 0.063-1.269 0.656-1.212 1.356l1.325 14.737c0.063 0.706 0.7 1.2 1.431 1.144l0.938-0.075-0.15 2.863c-0.037 0.788 0.575 1.425 1.4 1.469l20.631 0.981c0.825 0.038 1.506-0.538 1.55-1.325l0.869-16.456c0.038-0.781-0.581-1.419-1.4-1.456zM6.419 9.094l-0.444 8.425-1.094 1.544-1.006-11.125v-0.063c0.063-0.313 0.275-0.563 0.6-0.588l16.313-1.338c0.325-0.025 0.606 0.188 0.656 0.494 0 0.013 0.019 0.013 0.019 0.025 0 0.006 0.019 0.013 0.019 0.025l0.169 1.925-13.688-0.656c-0.825-0.025-1.506 0.55-1.544 1.331zM27.294 23.9l-5.3-6.219-2.337 2.144-4.325-5.050-7.669 8.169 0.65-12.444v-0.025c0.063-0.338 0.387-0.581 0.744-0.563l18.2 0.875c0.363 0.019 0.644 0.294 0.65 0.637 0 0.012 0.019 0.019 0.019 0.031l-0.631 12.444z"></path>
                <path d="M24 16c1.1 0 2-0.9 2-2s-0.894-2-2-2c-1.1 0-2 0.894-2 2s0.894 2 2 2z"></path>
            </symbol>
            <symbol id="icon-dollar-sign" viewBox="0 0 24 24">
                <title>dollar-sign</title>
                <path d="M11 11h-1.5c-0.691 0-1.314-0.279-1.768-0.732s-0.732-1.077-0.732-1.768 0.279-1.314 0.732-1.768 1.077-0.732 1.768-0.732h1.5zM13 13h1.5c0.691 0 1.314 0.279 1.768 0.732s0.732 1.077 0.732 1.768-0.279 1.314-0.732 1.768-1.077 0.732-1.768 0.732h-1.5zM17 4h-4v-3c0-0.552-0.448-1-1-1s-1 0.448-1 1v3h-1.5c-1.242 0-2.369 0.505-3.182 1.318s-1.318 1.94-1.318 3.182 0.505 2.369 1.318 3.182 1.94 1.318 3.182 1.318h1.5v5h-5c-0.552 0-1 0.448-1 1s0.448 1 1 1h5v3c0 0.552 0.448 1 1 1s1-0.448 1-1v-3h1.5c1.242 0 2.369-0.505 3.182-1.318s1.318-1.94 1.318-3.182-0.505-2.369-1.318-3.182-1.94-1.318-3.182-1.318h-1.5v-5h4c0.552 0 1-0.448 1-1s-0.448-1-1-1z"></path>
            </symbol>
            <symbol id="icon-chart-bars" viewBox="0 0 32 32">
                <title>chart-bars</title>
                <path d="M28 32h-25.6c-1.323 0-2.4-1.077-2.4-2.4v-25.6c0-1.323 1.077-2.4 2.4-2.4h25.6c1.323 0 2.4 1.077 2.4 2.4v25.6c0 1.323-1.077 2.4-2.4 2.4zM2.4 3.2c-0.442 0-0.8 0.358-0.8 0.8v25.6c0 0.442 0.358 0.8 0.8 0.8h25.6c0.442 0 0.8-0.358 0.8-0.8v-25.6c0-0.442-0.358-0.8-0.8-0.8h-25.6zM10.4 27.2h-3.2c-0.442 0-0.8-0.358-0.8-0.8v-14.4c0-0.442 0.358-0.8 0.8-0.8h3.2c0.442 0 0.8 0.358 0.8 0.8v14.4c0 0.442-0.358 0.8-0.8 0.8zM8 25.6h1.6v-12.8h-1.6v12.8zM16.8 27.2h-3.2c-0.442 0-0.8-0.358-0.8-0.8v-19.2c0-0.442 0.358-0.8 0.8-0.8h3.2c0.442 0 0.8 0.358 0.8 0.8v19.2c0 0.442-0.358 0.8-0.8 0.8zM14.4 25.6h1.6v-17.6h-1.6v17.6zM23.2 27.2h-3.2c-0.442 0-0.8-0.358-0.8-0.8v-8c0-0.442 0.358-0.8 0.8-0.8h3.2c0.442 0 0.8 0.358 0.8 0.8v8c0 0.442-0.358 0.8-0.8 0.8zM20.8 25.6h1.6v-6.4h-1.6v6.4z"></path>
            </symbol>
            <symbol id="icon-check-circle" viewBox="0 0 24 24">
                <title>check-circle</title>
                <path d="M21 11.080v0.92c-0.001 2.485-1.009 4.733-2.64 6.362s-3.88 2.634-6.365 2.632-4.734-1.009-6.362-2.64-2.634-3.879-2.633-6.365 1.009-4.733 2.64-6.362 3.88-2.634 6.365-2.633c1.33 0.001 2.586 0.289 3.649 0.775 0.502 0.23 1.096 0.008 1.325-0.494s0.008-1.096-0.494-1.325c-1.327-0.606-2.866-0.955-4.479-0.956-3.037-0.002-5.789 1.229-7.78 3.217s-3.224 4.74-3.226 7.777 1.229 5.789 3.217 7.78 4.739 3.225 7.776 3.226 5.789-1.229 7.78-3.217 3.225-4.739 3.227-7.777v-0.92c0-0.552-0.448-1-1-1s-1 0.448-1 1zM21.293 3.293l-9.293 9.302-2.293-2.292c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414l3 3c0.391 0.391 1.024 0.39 1.415 0l10-10.010c0.39-0.391 0.39-1.024-0.001-1.414s-1.024-0.39-1.414 0.001z"></path>
            </symbol>
            <symbol id="icon-ionicons_svg_logo-model-s" viewBox="0 0 32 32">
                <title>ionicons_svg_logo-model-s</title>
                <path d="M27.725 13.025c-0.194-0.119-0.137-0.412 0.081-0.456l0.331-0.069c0.444 0 1.4-0.144 1.6-0.338 0.194-0.2 0.262-0.338 0.262-0.512s-0.106-0.481-0.3-0.694c-0.188-0.213-1-0.325-1.481-0.387s-0.544 0-0.669 0.075c-0.125 0.081-0.175 0.594-0.194 0.938-0.006 0.075-0.056 0.137-0.131 0.156l-0.025 0.006c-0.206 0.044-0.413-0.069-0.488-0.269-0.288-0.813-0.669-2.031-1.212-3.025-0.719-1.3-1.469-1.713-1.781-1.813-0.306-0.094-0.587-0.162-2.688-0.381-2.113-0.225-3.944-0.256-5.031-0.256s-2.919 0.031-5.037 0.256c-2.1 0.213-2.381 0.281-2.688 0.381-0.313 0.1-1.063 0.513-1.781 1.813-0.588 1.069-0.981 2.394-1.275 3.206-0.037 0.094-0.138 0.15-0.237 0.131-0.194-0.044-0.338-0.206-0.35-0.406-0.025-0.313-0.075-0.669-0.181-0.731-0.125-0.081-0.188-0.137-0.669-0.075s-1.288 0.175-1.481 0.387c-0.188 0.213-0.294 0.519-0.294 0.694s0.069 0.319 0.263 0.519c0.194 0.2 1.156 0.338 1.6 0.338l0.331 0.069c0.219 0.044 0.275 0.338 0.081 0.456-0.569 0.356-1.45 0.956-2.019 1.6 0 0-0.256 1.794-0.256 3.881 0 3 0.362 5.775 0.362 5.775 0.112 0.019 0.225 0.038 0.331 0.056 0 0.075 0.044 0.819 0.125 1.325 0.019 0.125 0.081 0.344 0.388 0.344h4.044c0.119 0 0.319-0.1 0.319-0.231l0.063-1.063c0.45 0.006 0.2 0.006 0.681 0 1.55-0.019 0.975-0.469 1.694-0.456 0.706 0.012 3.438 0.188 6 0.188s5.294-0.175 6-0.188c0.719-0.012 0.144 0.444 1.694 0.456 0.481 0.006 0.294 0.006 0.744 0l0.063 1.063c0 0.131 0.2 0.231 0.319 0.231h3.969c0.306 0 0.369-0.219 0.387-0.344 0.081-0.506 0.119-1.244 0.125-1.325l0.337-0.056s0.363-2.769 0.363-5.775c0-2.094-0.256-3.881-0.256-3.881-0.581-0.656-1.462-1.256-2.031-1.613zM7.713 9.675c0.138-0.319 0.369-0.725 0.625-1.075 0.313-0.419 0.775-0.7 1.287-0.781 1.044-0.169 3.287-0.456 6.369-0.456s5.325 0.287 6.369 0.456c0.512 0.081 0.975 0.363 1.288 0.781 0.262 0.35 0.494 0.756 0.631 1.075 0.244 0.575 0.65 1.919 0.587 2.075s0.063 0.231-0.762 0.162c-0.819-0.063-5.663-0.131-8.106-0.131-2.45 0-7.294 0.069-8.106 0.131-0.825 0.069-0.706-0.012-0.763-0.162s0.338-1.5 0.581-2.075zM8.238 16.925c-0.619 0-1.862-0.063-2.156-0.075-0.294-0.006-0.55 0.238-0.7 0.238s-1.594-0.225-1.75-0.931c-0.106-0.469-0.069-0.95-0.038-1.219 0.019-0.119 0.119-0.213 0.237-0.219 0.9-0.031 1.825 0.031 3.456 0.494 1.081 0.306 1.863 0.787 2.306 1.112 0.175 0.131 0.113 0.406-0.106 0.45-0.381 0.069-0.9 0.15-1.25 0.15zM21.387 21.488c-0.794 0.106-3.656 0.137-5.387 0.137s-4.594-0.031-5.387-0.137c-0.819-0.106-1.863-1.081-1.15-1.887 0.475-0.531 1.3-0.85 3.056-1.081 1.863-0.238 3.037-0.269 3.475-0.269s1.612 0.031 3.475 0.269c1.756 0.231 2.7 0.6 3.056 1.081 0.65 0.863-0.319 1.775-1.137 1.887zM28.369 16.163c-0.156 0.7-1.6 0.931-1.75 0.931s-0.406-0.244-0.7-0.238c-0.294 0.012-1.538 0.075-2.156 0.075-0.344 0-0.863-0.081-1.25-0.15-0.219-0.038-0.281-0.319-0.106-0.45 0.444-0.325 1.225-0.806 2.306-1.113 1.631-0.463 2.55-0.525 3.456-0.494 0.125 0.006 0.225 0.094 0.238 0.219 0.031 0.269 0.069 0.75-0.038 1.219z"></path>
            </symbol>
            <symbol id="icon-ionicons_svg_md-star" viewBox="0 0 32 32">
                <title>ionicons_svg_md-star</title>
                <path d="M16 23.293l7.802 4.707-2.064-8.879 6.887-5.97-9.079-0.78-3.546-8.371-3.546 8.371-9.079 0.78 6.887 5.97-2.064 8.879z"></path>
            </symbol>
            <symbol id="icon-map" viewBox="0 0 32 32">
                <title>map</title>
                <path d="M23.2 11.2c-1.323 0-2.4-1.077-2.4-2.4s1.077-2.4 2.4-2.4 2.4 1.077 2.4 2.4-1.077 2.4-2.4 2.4zM23.2 8c-0.442 0-0.8 0.358-0.8 0.8s0.358 0.8 0.8 0.8 0.8-0.358 0.8-0.8-0.358-0.8-0.8-0.8zM23.2 20.8c-0.234 0-0.456-0.102-0.608-0.28-0.051-0.059-1.264-1.482-2.486-3.624-1.662-2.909-2.506-5.634-2.506-8.098 0-3.088 2.512-5.6 5.6-5.6s5.6 2.512 5.6 5.6c0 2.464-0.843 5.187-2.506 8.098-1.224 2.141-2.437 3.565-2.486 3.624-0.152 0.178-0.374 0.28-0.608 0.28zM23.2 4.8c-2.205 0-4 1.795-4 4 0 4.069 2.747 8.222 4 9.904 1.251-1.683 4-5.842 4-9.904 0-2.205-1.795-4-4-4zM29.6 0h-27.2c-1.323 0-2.4 1.077-2.4 2.4v27.2c0 1.323 1.077 2.4 2.4 2.4h27.2c1.323 0 2.4-1.077 2.4-2.4v-27.2c0-1.323-1.077-2.4-2.4-2.4zM10.4 28.8c-0.442 0-0.8 0.358-0.8 0.8v0.8h-3.2v-28.8h3.2v0.8c0 0.442 0.358 0.8 0.8 0.8s0.8-0.358 0.8-0.8v-0.8h3.2v28.8h-3.2v-0.8c0-0.442-0.358-0.8-0.8-0.8zM4.8 25.6h-3.2v-1.6h3.2v1.6zM16 24h14.4v1.6h-14.4v-1.6zM30.4 2.4v20h-14.4v-20.8h13.6c0.442 0 0.8 0.358 0.8 0.8zM2.4 1.6h2.4v20.8h-3.2v-20c0-0.442 0.358-0.8 0.8-0.8zM1.6 29.6v-2.4h3.2v3.2h-2.4c-0.442 0-0.8-0.358-0.8-0.8zM29.6 30.4h-13.6v-3.2h14.4v2.4c0 0.442-0.358 0.8-0.8 0.8zM10.4 8c0.442 0 0.8-0.358 0.8-0.8v-1.6c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v1.6c0 0.442 0.358 0.8 0.8 0.8zM10.4 12.8c0.442 0 0.8-0.358 0.8-0.8v-1.6c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v1.6c0 0.442 0.358 0.8 0.8 0.8zM10.4 17.6c0.442 0 0.8-0.358 0.8-0.8v-1.6c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v1.6c0 0.442 0.358 0.8 0.8 0.8zM10.4 22.4c0.442 0 0.8-0.358 0.8-0.8v-1.6c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v1.6c0 0.442 0.358 0.8 0.8 0.8zM11.2 24.8c0-0.442-0.358-0.8-0.8-0.8s-0.8 0.358-0.8 0.8v1.6c0 0.442 0.358 0.8 0.8 0.8s0.8-0.358 0.8-0.8v-1.6z"></path>
            </symbol>
            <symbol id="icon-camera-flip" viewBox="0 0 32 32">
                <title>camera-flip</title>
                <path d="M25.6 16.88v-8.080c0-1.323-1.077-2.4-2.4-2.4h-1.269l-1.366-1.366c-0.15-0.15-0.354-0.234-0.566-0.234h-8c-0.213 0-0.416 0.085-0.566 0.234l-1.366 1.366h-1.269c-1.323 0-2.4 1.077-2.4 2.4v8.082c-3.061 0.637-6.4 1.814-6.4 3.918 0 3.088 7.309 4.488 13.566 4.75 0.011 0 0.022 0 0.034 0 0.427 0 0.781-0.336 0.798-0.766 0.019-0.442-0.325-0.814-0.766-0.832-3.467-0.144-6.635-0.61-8.92-1.307-2.462-0.752-3.114-1.536-3.114-1.845 0-0.229 0.342-0.667 1.304-1.147 0.859-0.429 2.058-0.816 3.499-1.134 0.061 1.269 1.114 2.283 2.397 2.283h14.4c1.285 0 2.336-1.014 2.397-2.283 1.442 0.318 2.638 0.706 3.499 1.134 0.963 0.48 1.304 0.918 1.304 1.147 0 0.342-0.754 1.198-3.605 1.987-2.629 0.726-6.182 1.155-10.006 1.208-0.39 0.005-0.72 0.291-0.779 0.677s0.166 0.758 0.536 0.882l4.8 1.605c0.085 0.029 0.17 0.042 0.254 0.042 0.334 0 0.646-0.211 0.758-0.547 0.141-0.419-0.086-0.872-0.506-1.013l-0.792-0.266c2.314-0.211 4.422-0.566 6.16-1.046 3.171-0.877 4.779-2.064 4.779-3.53 0-2.104-3.339-3.282-6.4-3.92zM23.2 19.2h-14.4c-0.442 0-0.8-0.358-0.8-0.8v-0.846c0-0.002 0-0.003 0-0.003v-8.75c0-0.442 0.358-0.8 0.8-0.8h1.6c0.213 0 0.416-0.085 0.566-0.234l1.366-1.366h7.338l1.366 1.366c0.15 0.15 0.354 0.234 0.566 0.234h1.6c0.442 0 0.8 0.358 0.8 0.8v8.752c0 0 0 0 0 0.002v0.848c0 0.442-0.358 0.8-0.8 0.8zM16 17.6c-2.646 0-4.8-2.154-4.8-4.8s2.154-4.8 4.8-4.8 4.8 2.154 4.8 4.8-2.154 4.8-4.8 4.8zM16 9.6c-1.765 0-3.2 1.435-3.2 3.2s1.435 3.2 3.2 3.2c1.765 0 3.2-1.435 3.2-3.2s-1.435-3.2-3.2-3.2z"></path>
            </symbol>
            <symbol id="icon-camera-play" viewBox="0 0 32 32">
                <title>camera-play</title>
                <path d="M30.61 27.285c0 0 0 0 0 0-0.387 0-0.776-0.155-1.158-0.461l-5.501-4.402c-0.883-0.707-1.55-2.093-1.55-3.224v-4.8c0-1.131 0.666-2.517 1.55-3.224l5.501-4.402c0.382-0.306 0.771-0.461 1.158-0.461 0.693 0 1.39 0.522 1.39 1.685v17.6c0 0.445-0.102 0.819-0.304 1.11-0.251 0.365-0.648 0.574-1.086 0.574zM30.4 8.064l-5.451 4.36c-0.498 0.397-0.949 1.339-0.949 1.974v4.8c0 0.637 0.453 1.578 0.949 1.974l5.451 4.36v-17.47zM18.4 27.2h-16c-1.323 0-2.4-1.077-2.4-2.4v-16c0-1.323 1.077-2.4 2.4-2.4h16c1.323 0 2.4 1.077 2.4 2.4v16c0 1.323-1.077 2.4-2.4 2.4zM2.4 8c-0.442 0-0.8 0.358-0.8 0.8v16c0 0.442 0.358 0.8 0.8 0.8h16c0.442 0 0.8-0.358 0.8-0.8v-16c0-0.442-0.358-0.8-0.8-0.8h-16zM7.2 22.4c-0.136 0-0.272-0.035-0.394-0.104-0.251-0.142-0.406-0.408-0.406-0.696v-9.6c0-0.288 0.155-0.554 0.406-0.696s0.558-0.138 0.806 0.010l8 4.8c0.242 0.144 0.389 0.405 0.389 0.686s-0.147 0.541-0.389 0.686l-8 4.8c-0.126 0.075-0.269 0.114-0.411 0.114zM8 13.413v6.774l5.645-3.387-5.645-3.387z"></path>
            </symbol>
        </defs>
    </svg>
</body>

<!-- Mirrored from templates.g5plus.net/thedir/listing-details-full-map.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jun 2020 18:47:45 GMT -->

</html>