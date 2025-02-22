<?php
// header("Location: northlight.php");
// exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './inc/HTMLhead.php'; ?>
    <title>Home - INOVA</title>
    <style>
        .row {
            --bs-gutter-x: 10px;
            --bs-gutter-y: 10px;
        }

        @media only screen and (max-width: 1199px) {
            .home-banner-title {
                bottom: 20px;
            }
        }

        @media only screen and (max-width: 991px) {
            .home-banner-title {
                bottom: 70px;
            }
        }

        @media only screen and (max-width: 575px) {
            .home-banner-title {
                bottom: 50px;
            }
        }
    </style>
</head>

<body>
    <?php include './inc/header.php'; ?>

    <div class="home-banner-container">
        <img class="poster-image banner" src="img/home/banner_home_v2.png" alt="Banner">
    </div>

    <!-- <div class="white-space"></div> -->
    <div class="bg-black text-white">
        <div class="container">
            <!-- <div class="row section-padding">
                <div class="col-12 col-md-8">
                    <div class="about-title fw-bold">Designed with Purpose</div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-end">
                    <a href="northlight.php" style="color: white !important;">See them in action ></a>
                </div>
            </div> -->

            <div class="row section-padding text-center gx-5">
                <div class="col-12 col-md-4">
                    <img src="img/about/icon_accessible.svg" alt="accessibility" class="values-icon">
                    <div class="about-title pt-2 pb-3">Accessibility</div>
                    <p>features and pricing that make sense for everyone</p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/about/icon_simplicity.svg" alt="simplicity" class="values-icon">
                    <div class="about-title pt-2 pb-3">Simplicity</div>
                    <p>designs are straightforward, without complexity</p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/about/icon_community.svg" alt="community" class="values-icon">
                    <div class="about-title pt-2 pb-3">Community</div>
                    <p>brings people together with our innovative product</p>
                </div>
            </div>
            <!-- <a class="learn-more-button" href="about.php">Learn More</a> -->
        </div>
    </div>

    <!-- <a class="new-product-container" href="northlight.php">
        <div class="container phone-banner-text">
            <div class="introducing text-white text-center"></div>
        </div>
        <button class="learn-more-button">Learn More</button>
    </a> -->
    <div class="container">
        <div class="section-padding-sm">
            <div class="heading bottom-padding-sm">Experience it now</div>
            <a href="northlight.php">
                <div class="home-banner-container" style="border-radius: 25px;">
                    <img class="poster-image banner" src="img/phone/banner_bg.jpg" alt="Banner">
                </div>
            </a>
        </div>
    </div>
    <!-- <div class="home-cards">
        <div class="row">
            <div class="col-md-6">
                <div class="home-small-container">
                </div>
            </div>
            <div class="col-md-6">
                <div class="home-small-container">
                </div>
            </div>
            <div class="col-md-6">
                <div class="home-small-container">
                </div>
            </div>
            <div class="col-md-6">
                <div class="home-small-container">
                </div>
            </div>
        </div>
    </div> -->

    <?php include './inc/footer.php'; ?>

</body>

</html>