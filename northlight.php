<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './inc/HTMLhead.php'; ?>
    <link rel="stylesheet" href="css/custom-container.css">
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
                <div class="col-12">
                    <div class="bottom-padding heading text-center">Affordable, Reliable, Simplicity at its Finest</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="bottom-padding phone-intro">The Northlight smartphone represents INOVA’s commitment to delivering reliable and user-focused technology. Built to be practical and easy to use, ensures you stay connected to what matters most. With features you can trust at a price you’ll appreciate, Northlight is made for everyone.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
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

    <div style="padding-top: 100px;"></div>

    <div class="custom-container">
        <div class="drawing-container">
            <div class="image-wrapper">
                <img src="img/phone/engineering-drawing.png" alt="engineering drawing" class="engineering-drawing">
                <!-- <div class="circle"></div> -->
                <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <circle class="hover-circle" data-target="sim-card" cx="38" cy="35.5" r="3" fill="rgba(0, 0, 255, 0.2)" />
                    <circle class="hover-circle" data-target="sd-card" cx="70" cy="20" r="10" fill="rgba(0, 0, 255, 0.2)" />
                    <circle class="hover-circle" data-target="wifi" cx="50" cy="50" r="7" fill="rgba(0, 0, 255, 0.2)" />
                </svg>
            </div>

            <!-- Slogan -->
            <div class="image-wrapper" id="default-text">
                <div class="d-flex align-items-center">
                    <div class="heading">Affordable, Reliable, Simplicity at its Finest</div>
                </div>
            </div>

            <!-- SIM Card -->
            <div class="image-wrapper hover-content" id="sim-card">
                <img src="img/phone/SIM-card.png" alt="SIM card" class="engineering-drawing">
            </div>
            <div class="image-wrapper hover-content" id="sd-card">
                <img src="img/phone/SD-card.png" alt="SD card" class="engineering-drawing">
            </div>
            <div class="image-wrapper hover-content" id="wifi">
                <img src="img/phone/wifi.png" alt="WiFi module" class="engineering-drawing">
            </div>
        </div>
    </div>

    <div style="padding-top: 100px;"></div>


    <?php include './inc/footer.php'; ?>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const circles = document.querySelectorAll('.hover-circle'); // Select all circles
            const defaultText = document.getElementById('default-text'); // Default text container
            const hoverContent = document.querySelectorAll('.hover-content'); // All hoverable image wrappers

            let currentTarget = null; // Track the currently displayed image's target ID

            // Function to show the targeted content and hide others
            function showContent(targetId) {
                // Hide all hover content
                hoverContent.forEach(content => (content.style.display = 'none'));

                if (targetId) {
                    // Show the specific target content
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) targetElement.style.display = 'block';

                    // Hide the default text
                    defaultText.style.display = 'none';

                    // Update the current visible target
                    currentTarget = targetId;
                } else {
                    // No target clicked: show default text and hide everything else
                    defaultText.style.display = 'flex';
                    currentTarget = null;
                }
            }

            // Add event listeners to circles
            circles.forEach(circle => {
                const targetId = circle.getAttribute('data-target');

                // On click, show the corresponding content
                circle.addEventListener('click', () => {
                        showContent(targetId);
                });
            });

            // Set default state on page load
            showContent(null); // Show the default text
        });
    </script>




    <!-- <script>
        // zoom in image when scrolling
        function zoomInBanner() {
            const scrollPosition = window.scrollY;
            const bannerContainer = document.querySelector('.phone-banner-container');

            const aspectRatio = bannerContainer.offsetWidth / bannerContainer.offsetHeight;

            const zoomLevel = 100 + (scrollPosition * 0.01); // Adjust this value to control zoom speed

            if (aspectRatio < (16 / 9)) {
                bannerContainer.style.backgroundSize = `auto ${zoomLevel}%`;
            } else {
                bannerContainer.style.backgroundSize = `${zoomLevel}% auto`;
            }
        }

        window.addEventListener('scroll', zoomInBanner);
        window.addEventListener('resize', zoomInBanner);
    </script> -->

    <script>
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
    <!-- <script>
            const video = document.querySelector('.video');
            const image = document.querySelector('.poster-image');

            video.addEventListener('ended', () => {
                video.style.display = 'none';
                image.style.display = 'block';
            });
        </script> -->
</body>

</html>