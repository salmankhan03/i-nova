<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './inc/HTMLhead.php'; ?>
    <title>INOVA: Tech Built for Accessibility & Community | Canada</title>
    <meta name="description" content="At INova, we build tech that unites. Accessibility, simplicity, and community drive everything we create—from phones to future innovations.">
    <meta name="google-site-verification" content="o_L1bB7zVCoiwoFWgmf9baevM2gc-zt6iPyb9uvSrHU" />
    <style>
        .row {
            --bs-gutter-y: 1.5rem;
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
            margin: 10px 0 0 10px;
        }

        .accessories-title-padding {
            padding: 50px 0 14px 0;
        }

        .home-slider-padding {
            padding-top: 36px;
        }

        @media (max-width: 767px) {
            .card-title {
                font-size: 20px;
            }

            .accessories-title-padding {
                padding: 50px 0 20px 0;
            }

            .home-slider-padding {
                padding-top: 30px;
            }
        }
    </style>
</head>

<body>
    <?php include './inc/header.php'; ?>

    <div class="home-banner-container">
        <img class="home-banner" src="img/home/banner_home.png" alt="Banner">
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
                    <a href="northlight.php" class="underline-link">Experience it now <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>

            <a href="northlight.php">
                <img src="img/phone/banner_bg.jpg" alt="Banner" class="rounded-img">
            </a>

            <div class="title accessories-title-padding">Accessories</div>

            <div class="slider home-slider-padding">
                <a href="accessories.php">
                    <img src="img/accessories/battery.jpg" alt="battery" class="rounded-img">
                    <div class="card-title">Battery</div>
                </a>

                <a href="accessories.php">
                    <img src="img/accessories/battery_charger.jpg" alt="battery_charger" class="rounded-img">
                    <div class="card-title">Battery Charger</div>
                </a>

                <a href="accessories.php">
                    <img src="img/accessories/phone_case.jpg" alt="phone_case" class="rounded-img">
                    <div class="card-title">Phone Case</div>
                </a>

                <a href="accessories.php">
                    <img src="img/accessories/microSD_card.jpg" alt="microSD_card" class="rounded-img">
                    <div class="card-title">microSD Card</div>
                </a>

                <a href="accessories.php">
                    <img src="img/accessories/power_adapter.jpg" alt="power_adapter" class="rounded-img">
                    <div class="card-title">Power Adapter</div>
                </a>

                <a href="accessories.php">
                    <img src="img/accessories/USB-C_cable.jpg" alt="usb_cable" class="rounded-img">
                    <div class="card-title">USB-C Cable</div>
                </a>
            </div>
        </div>
    </div>

    <?php include './inc/footer.php'; ?>

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"><img src="img/phone/icons/icons_slider.svg" alt="Previous"></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="img/phone/icons/icons_slider.svg" alt="Next"></button>',
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>