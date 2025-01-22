<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './inc/HTMLhead.php'; ?>
        <style>
            #phone-nav-container {
                background-color: #232323;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 999;
                visibility: hidden;
                transition: transform 0.4s ease-in-out, visibility 0.4s ease-in-out;
            }

            #phone-nav-container.hidden {
                transform: translateY(-100%);
                visibility: hidden;
            }

            #phone-nav-container.visible {
                transform: translateY(0);
                visibility: visible;
            }
            
            .video-container {
                position: relative;
                width: 100%;
                padding-bottom: 56.25%;
                height: 0;
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <?php include './inc/header.php'; ?>
        <?php include './inc/phone-nav.php'; ?>

        <div class="video-container">
            <!-- <video class="video" width="100%" autoplay muted>
                <source src="img/phone/Aurora_Magic_remix.mp4" type="video/mp4">
            </video> -->
            <img class="poster-image" src="img/phone/banner_bg.jpg" alt="Replacement" style="width: 100%;">
        </div>

        <!-- highlights -->
        <div class="container">
            <div class="section-padding pb-0">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <p class="bottom-padding phone-intro">The Northlight smartphone represents INOVA’s commitment to delivering reliable and user-focused technology. It is designed to be practical and accessible, it keeps you connected to what matters most without compromise. </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-4 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icons_size.svg" alt="screen" class="highlight-icon">
                                    <div class="highlight-text">5.45" LCD</div>
                                    <div class="highlight-text">480 x 960</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icons_camera.svg" alt="camera" class="highlight-icon">
                                    <div class="highlight-text">5MP Back</div>
                                    <div class="highlight-text">2MP Front</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icons_processor.svg" alt="processor" class="highlight-icon">
                                    <div class="highlight-text">Quad-Core</div>
                                    <div class="highlight-text">2.0GHz</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icons_memory.svg" alt="memory" class="highlight-icon">
                                    <div class="highlight-text">3GB RAM</div>
                                    <div class="highlight-text">32GB ROM</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icons_dualsim.svg" alt="dual-sim" class="highlight-icon">
                                    <div class="highlight-text">Dual SIM</div>
                                    <div class="highlight-text">Micro & Nano</div>
                                </div>
                            </div>
                            <div class="col-4 col-md-2 col-lg-2 col-xl-2 p-0">
                                <div class="highlight-wrap">
                                    <img src="img/phone/icons/icons_battery_swap.svg" alt="battery" class="highlight-icon">
                                    <div class="highlight-text">Replaceable</div>
                                    <div class="highlight-text">Battery</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <?php include './inc/footer.php'; ?>
        <script>
            function responsiveBackground() {
                const featureBackgrounds = document.querySelectorAll('.feature-background');
                const bootstrapContainer = document.querySelector('.container');

                // Get the container’s position and the viewport width
                const containerOffsetLeft = bootstrapContainer.getBoundingClientRect().left;
                //const containerOffsetRight = window.innerWidth - bootstrapContainer.getBoundingClientRect().right;

                featureBackgrounds.forEach((featureBackground) => {
                    // Set background position to align the background image with both edges of the container
                    featureBackground.style.backgroundPosition = `calc(${containerOffsetLeft}px + var(--bs-gutter-x) * 0.5 - 20px) center`;
                    if (window.innerWidth < 991) {
                        //featureBackground.style.backgroundSize = `calc(100% - ${containerOffsetLeft + containerOffsetRight}px - var(--bs-gutter-x) * 0.5) auto`;
                        featureBackground.style.backgroundSize = `80%`;
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
            // function zoomInBanner() {
            //     const scrollPosition = window.scrollY;
            //     const bannerContainer = document.querySelector('.phone-banner-container');

            //     const aspectRatio = bannerContainer.offsetWidth / bannerContainer.offsetHeight;

            //     const zoomLevel = 100 + (scrollPosition * 0.01); // Adjust this value to control zoom speed

            //     if (aspectRatio < (16 / 9)) {
            //         bannerContainer.style.backgroundSize = `auto ${zoomLevel}%`;
            //     } else {
            //         bannerContainer.style.backgroundSize = `${zoomLevel}% auto`;
            //     }
            // }

            // window.addEventListener('scroll', zoomInBanner);
            // window.addEventListener('resize', zoomInBanner);
        </script>

        <!-- <script>
            document.addEventListener("scroll", () => {
                const navbar = document.getElementById("phone-nav-container");
                const scrollPosition = window.scrollY || document.documentElement.scrollTop;

                if (scrollPosition > 700) {
                    navbar.classList.remove("hidden");
                    navbar.classList.add("visible");
                } else {
                    navbar.classList.remove("visible");
                    navbar.classList.add("hidden");
                }
            });
        </script>
        <script>
            const video = document.querySelector('.video');
            const image = document.querySelector('.poster-image');

            video.addEventListener('ended', () => {
                video.style.display = 'none';
                image.style.display = 'block';
            });
        </script> -->
    </body>
</html>