<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'HTMLhead.php'; ?>
    </head>
    <body class="overflow-x-hidden">
        <?php include 'header.php'; ?>
        <?php include 'phone-nav.php'; ?>

        <div class="banner-container">
            <img src="img/phone/banner.png" alt="banner" class="banner">
            <div class="container banner-text" style="height: 400px;">
                <div class="heading">Say hello to <br/> Northlight 4G</div>
                <div class="title position-absolute bottom-0 end-0">Budget Friendly,<br/> Superb Quality</div>
            </div>
        </div>

        <!-- highlights -->
        <div class="container">
            <div class="section-padding">
                <div class="row">
                    <div class="position-relative">
                        <div class="col-xl-6">
                            <p>Lorem ipsum dolor sit amet consectetur at sed volutpat nullam dis sit commodo porttitor etiam.</p>
                        </div>
                        <div class="col-xl-6 main-1-container">
                            <img src="img/phone/main_1.png" alt="" class="img-fluid main-1">
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
        <!-- Android 14 -->
        <div class="container">
            <div class="section-padding">
                <div class="feature-background feature-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="feature-text-wrap">
                                <div class="title">Android 14</div>
                                <div class="feature-text">Customizable, Accessible, Protective. Complete with the latest personalization, security and privacy features.</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <img src="img/phone/feature_1.png" alt="feature-1" class="img-fluid feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customizable Casing -->
        <div class="container">
            <div class="section-padding">
                <div class="feature-background feature-2">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/phone/feature_2.png" alt="feature-2" class="img-fluid feature-image feature-image-left">
                        </div>
                        <div class="col-md-6">
                            <div class="feature-text-wrap">
                                <div class="title">Customizable Casing</div>
                                <div class="feature-text">Customizable, Accessible.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section-padding">
                <div class="feature-background feature-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-text-wrap">
                                <div class="title">Customizable Casing</div>
                                <div class="feature-text">Customizable, Accessible.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="img/phone/feature_3.png" alt="feature-3" class="img-fluid feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section-padding">
                <div class="title text-center pb-4">In the Box</div>
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
            function alignBackgroundToContainers() {
                const featureBackgrounds = document.querySelectorAll('.feature-background');
                const bootstrapContainer = document.querySelector('.container');

                // Get the container’s position and the viewport width
                const containerOffsetLeft = bootstrapContainer.getBoundingClientRect().left;
                const containerOffsetRight = window.innerWidth - bootstrapContainer.getBoundingClientRect().right;

                featureBackgrounds.forEach((featureBackground) => {
                    // Set background position to align the background image with both edges of the container
                    featureBackground.style.backgroundPosition = `calc(${containerOffsetLeft}px + var(--bs-gutter-x) * 0.5) center`;
                    if (window.innerWidth < 768) {
                        featureBackground.style.backgroundSize = `calc(100% - ${containerOffsetLeft + containerOffsetRight}px) auto`;
                    } else {
                        featureBackground.style.backgroundSize = `40%`;
                    }
                });
            }

            // Initial alignment on load
            alignBackgroundToContainers();

            // Re-align on window resize
            window.addEventListener('resize', alignBackgroundToContainers);



            // zoom in image when scrolling
            function updateBackgroundSize() {
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

            window.addEventListener('scroll', updateBackgroundSize);
            window.addEventListener('resize', updateBackgroundSize);
        </script>
    </body>
</html>