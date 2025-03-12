<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './inc/HTMLhead.php'; ?>
    <title>INOVA: Tech Built for Accessibility & Community | Canada</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <meta name="description" content="At INova, we build tech that unites. Accessibility, simplicity, and community drive everything we create—from phones to future innovations.">
    <meta name="google-site-verification" content="o_L1bB7zVCoiwoFWgmf9baevM2gc-zt6iPyb9uvSrHU" />
    <style>
        .row {
            --bs-gutter-y: 1.5rem;
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include './inc/header.php'; ?>

    <div class="home-banner-container">
        <img class="home-banner" src="img/home/banner_home_v2.png" alt="Banner">
    </div>

    <div class="philosophy">
        <div class="container">
            <a href="about.php#purpose" class="text-white">
                <div class="row pb-5 text-center gx-md-5">
                    <div class="col-12 col-md-4">
                        <img src="img/about/icon_accessible.svg" alt="accessibility" class="values-icon">
                        <div class="about-title pt-2 pb-3">Accessibility</div>
                        <p>Features and pricing that make sense for everyone.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="img/about/icon_simplicity.svg" alt="simplicity" class="values-icon">
                        <div class="about-title pt-2 pb-3">Simplicity</div>
                        <p>Designs are straightforward, without<span class="d-xxl-none d-xl-inline d-none"><br></span> complexity.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="img/about/icon_community.svg" alt="community" class="values-icon">
                        <div class="about-title pt-2 pb-3">Community</div>
                        <p>Brings people together with our innovative product.</p>
                    </div>
                </div>
            </a>
            <div class="row bottom-padding">
                <div class="col-12 text-center">
                    <a class="learn-more-button" href="about.php">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-padding-sm">
            <div class="row bottom-padding-sm">
                <div class="col-12 col-md-8">
                    <div class="title fw-bold">All in Our Products</div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-end justify-content-end">
                    <a href="northlight.php" class="underline-link">Experience it now ></a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="northlight.php">
                        <img src="img/phone/banner_bg.jpg" alt="Banner" class="home-product-img">
                    </a>
                </div>

                <div class="slider">
                    <img src="img/accessories/battery.jpg" alt="battery" class="home-product-img">
                    <img src="img/accessories/battery_charger.jpg" alt="battery_charger" class="home-product-img">
                    <img src="img/accessories/phone_case.jpg" alt="phone_case" class="home-product-img">
                    <img src="img/accessories/microSD_card.jpg" alt="microSD_card" class="home-product-img">
                </div>
            </div>
        </div>
    </div>

    <?php include './inc/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 3, // Number of images visible at a time
                slidesToScroll: 1, // Number of images to scroll per click
                dots: true, // Show navigation dots
                arrows: true, // Show next/prev arrows
                // responsive: [{
                //         breakpoint: 768, // For smaller screens
                //         settings: {
                //             slidesToShow: 2
                //         }
                //     },
                //     {
                //         breakpoint: 480, // For mobile screens
                //         settings: {
                //             slidesToShow: 1
                //         }
                //     }
                // ]
            });
        });
    </script>
</body>

</html>