<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
    <head>
        <?php include 'HTMLhead.php'; ?>
    </head>
    <body class="overflow-x-hidden">
        <?php include 'header.php'; ?>
        <?php include 'phone-nav.php'; ?>

        <div class="phone-banner-container">
            <img src="img/phone/banner.png" alt="banner" class="phone-banner">
            <div class="container banner-text" style="height: 400px;">
                <div class="heading">Introducing <br/> Northlight 4G</div>
                <div class="home-banner-title">Connectivity Made <br> Reasonable</div>
            </div>
        </div>

        <!-- highlights -->
        <div class="container">
            <div class="section-padding">
                <div class="row">
                    <div class="position-relative">
                        <div class="col-xl-9">
                            <p class="pb-5">Designed to be practical and accessible, it keeps you connected to what matters most without compromise. </p>
                        </div>
                        <div class="col-xl-6 img-1-container">
                            <img src="img/phone/img_1.png" alt="" class="img-fluid img-1">
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icon_size.svg" alt="screen" class="highlight-icon">
                                    <div class="highlight-text">5.45" TFT LCD</div>
                                    <div class="highlight-text">480x960</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icon_camera.svg" alt="camera" class="highlight-icon">
                                    <div class="highlight-text">5MP Back</div>
                                    <div class="highlight-text">2MP Front</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icon_processor.svg" alt="processor" class="highlight-icon">
                                    <div class="highlight-text">Quad Core</div>
                                    <div class="highlight-text">2.0GHz</div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icon_memory.svg" alt="memory" class="highlight-icon">
                                    <div class="highlight-text">3GB RAM</div>
                                    <div class="highlight-text">32GB ROM</div>
                                </div>
                            </div>
                
                            <div class="col-6 col-md-4 col-lg-4 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icon_dualsim.svg" alt="dual-sim" class="highlight-icon">
                                    <div class="highlight-text">Dual Sim</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <!-- Feature 1 -->
        <div class="container feature-container">
            <div class="section-padding pb-0">
                <div class="feature-background feature-1">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="feature-text-wrap">
                                <div class="title fw-bold">Android 14</div>
                                <div class="feature-text">Customizable, Accessible, Protective. Complete with the latest personalization, security and privacy features.</div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="img/phone/feature_1.png" alt="feature-1" class="img-fluid feature-image feature-image-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="container feature-container">
            <div class="section-padding pb-0">
                <div class="feature-background feature-2">
                    <div class="row">
                        <div class="col-lg-5">
                            <img src="img/phone/feature_2.png" alt="feature-2" class="img-fluid feature-image feature-image-2">
                        </div>
                        <div class="col-lg-7">
                            <div class="feature-text-wrap feature-text-wrap-right">
                                <div class="title fw-bold">Expand Your Options</div>
                                <div class="feature-text">Enjoy the convenience of Dual SIMs with Micro SD card expansion for enhanced connectivity on the go.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature 3 -->
        <div class="container feature-container">
            <div class="section-padding pb-0">
                <div class="feature-background feature-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-text-wrap">
                                <div class="title fw-bold">Power That Lasts <br> Stay Connected</div>
                                <div class="feature-text">Stay powered with removable batteries—swap, recharge, and stay connected anytime.</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="img/phone/feature_3.png" alt="feature-3" class="img-fluid feature-image feature-image-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- In the Box -->
        <div class="container">
            <div class="section-padding">
                <div class="title text-center pb-4" style="font-weight: 700;">In the Box</div>
                <img src="img/phone/bg_4.jpg" alt="in the box" class="img-fluid" style="border-radius: 20px">
                <div class="row text-center pt-4">
                    <div class="col-4"><p>Northlight 4G</p></div>
                    <div class="col-4"><p>USB-C Cable</p></div>
                    <div class="col-4"><p>USB Wall Charger</p></div>
                </div>
            </div>
        </div>
        
        <?php include 'footer.php'; ?>
        <script>
            function responsiveBackground() {
                const featureBackgrounds = document.querySelectorAll('.feature-background');
                const bootstrapContainer = document.querySelector('.container');

                // Get the container’s position and the viewport width
                const containerOffsetLeft = bootstrapContainer.getBoundingClientRect().left;
                const containerOffsetRight = window.innerWidth - bootstrapContainer.getBoundingClientRect().right;

                featureBackgrounds.forEach((featureBackground) => {
                    // Set background position to align the background image with both edges of the container
                    featureBackground.style.backgroundPosition = `calc(${containerOffsetLeft}px + var(--bs-gutter-x) * 0.5 - 20px) center`;
                    if (window.innerWidth < 991) {
                        featureBackground.style.backgroundSize = `calc(100% - ${containerOffsetLeft + containerOffsetRight}px - var(--bs-gutter-x) * 0.5) auto`;
                    } else {
                        featureBackground.style.backgroundSize = `40%`;
                    }
                });
            }

            // Initial alignment on load
            responsiveBackground();

            // Re-align on window resize
            window.addEventListener('resize', responsiveBackground);



            // zoom in image when scrolling
            function zoomInBanner() {
                const scrollPosition = window.scrollY;
                const bannerContainer = document.querySelector('.banner-container');

                const aspectRatio = bannerContainer.offsetWidth / bannerContainer.offsetHeight;

                const zoomLevel = 100 + (scrollPosition * 0.04); // Adjust this value to control zoom speed

                if (aspectRatio < (16 / 9)) {
                    // If the aspect ratio is smaller than 16:9, use "auto" for width and zoom the height
                    bannerContainer.style.backgroundSize = `auto ${zoomLevel}%`;
                } else {
                    // Otherwise, zoom the width and keep the height as "auto"
                    bannerContainer.style.backgroundSize = `${zoomLevel}% auto`;
                }
            }

            window.addEventListener('scroll', zoomInBanner);
            window.addEventListener('resize', zoomInBanner);
        </script>
    </body>
</html>