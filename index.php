<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './inc/HTMLhead.php'; ?>
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
    <body class="overflow-x-hidden">
        <?php include './inc/header.php'; ?>
        
        <a class="phone-banner-container" href="northlight.php">
            <img src="img/phone/banner.png" alt="banner" class="phone-banner">
            <div class="container phone-banner-text">
                <div class="introducing">Introducing</div>
                <div class="northlight">Northlight</div>
                <div class="home-banner-title">Reasonable Access to<br> Unlimited Connectivity</div>
            </div>
            <button class="learn-more-button">Learn More</button>
        </a>

        <div class="white-space"></div>

        <div class="new-product-container">
            <!-- <img src="img/phone/banner.png" alt="banner" class="phone-banner"> -->
            <div class="container phone-banner-text">
                <div class="introducing text-white text-center">Northlight 5G<br>(Coming Soon)</div>
            </div>
        </div>

        

        <div class="home-cards">
            <div class="row">
                <div class="col-md-6">
                    <div class="home-small-container">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="home-small-container">
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="home-small-container">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="home-small-container">
                    </div>
                </div> -->
            </div>
        </div>
        
        <?php include './inc/footer.php'; ?>
        
    </body>
</html>