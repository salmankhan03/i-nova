<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './inc/HTMLhead.php'; ?>
    <title>INOVA: Tech Built for Accessibility & Community | Canada</title>
    <meta name="description" content="At INova, we build tech that unites. Accessibility, simplicity, and community drive everything we create—from phones to future innovations.">
    <meta name="google-site-verification" content="o_L1bB7zVCoiwoFWgmf9baevM2gc-zt6iPyb9uvSrHU" />
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
        <img class="home-banner" src="img/home/banner_home_v2.png" alt="Banner">
    </div>

    <!-- <div class="white-space"></div> -->
    <div class="philosophy">
        <div class="container">
            <div class="row pb-5 text-center gx-5">
                <div class="col-12 col-md-4">
                    <img src="img/about/icon_accessible.svg" alt="accessibility" class="values-icon">
                    <div class="about-title pt-2 pb-3">Accessibility</div>
                    <p>Features and pricing that make sense for everyone.</p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/about/icon_simplicity.svg" alt="simplicity" class="values-icon">
                    <div class="about-title pt-2 pb-3">Simplicity</div>
                    <p>Designs are straightforward, without complexity.</p>
                </div>
                <div class="col-12 col-md-4">
                    <img src="img/about/icon_community.svg" alt="community" class="values-icon">
                    <div class="about-title pt-2 pb-3">Community</div>
                    <p>Brings people together with our innovative product.</p>
                </div>
            </div>
            <div class="row bottom-padding">
                <div class="col-12 text-center">
                    <a class="learn-more-button" href="about.php">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-padding-sm">
            <!-- <div class="heading bottom-padding-sm">Experience it now</div> -->
            <div class="row bottom-padding-sm">
                <div class="col-12 col-md-8">
                    <div class="title fw-bold">All in Our Products</div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-end justify-content-end">
                    <a href="northlight.php" class="underline-link">Experience it now ></a>
                </div>
            </div>
            <a href="northlight.php">
                <div class="home-banner2-container" style="border-radius: 25px;">
                    <img class="poster-image banner" src="img/phone/banner_bg.jpg" alt="Banner">
                </div>
            </a>
        </div>
    </div>

    <?php include './inc/footer.php'; ?>

</body>

</html>