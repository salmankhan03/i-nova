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

        @media only screen and (max-width: 575px) {
            .video-container {
                display: none;
            }
        }

        @media only screen and (min-width: 576px) {
            .mobile-banner-container {
                display: none;
            }
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
        <img class="poster-image" id="posterImage" src="img/phone/banner_bg.jpg" alt="Banner">
    </div>

    <div class="mobile-banner-container">
        <img class="img-fluid" id="posterImage" src="img/phone/banner_bg_mobile.jpg" alt="Banner">
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
                                <img src="img/phone/icons/icons_size.svg" alt="android" class="highlight-icon">
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

    <div style="padding-top: 50px;"></div>

    <div class="bg-color overflow-hidden">
        <div class="custom-container">
            <div class="heading text-white" style="padding-top: 50px;">Let's Break it Down.</div>
            <div class="features-container-desktop">
                <div class="image-wrapper engineering-drawing-position engineering-drawing-lg">
                    <img src="img/phone/Northlight-explosive-sketch.png" alt="engineering drawing" class="engineering-drawing">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <circle class="hover-circle" data-target="sim-card" data-inner="sim-inner" cx="36" cy="38" r="1.7" />
                        <circle class="hover-circle-inner" id="sim-inner" cx="36" cy="38" r="0.7" />
                        
                        <circle class="hover-circle" data-target="usb-c" data-inner="usb-c-inner" cx="27.5" cy="65" r="1.7" />
                        <circle class="hover-circle-inner" id="usb-c-inner" cx="27.5" cy="65" r="0.7" />

                        <circle class="hover-circle" data-target="battery" data-inner="battery-inner" cx="56" cy="27" r="1.7" />
                        <circle class="hover-circle-inner" id="battery-inner" cx="56" cy="27" r="0.7" />

                        <circle class="hover-circle" data-target="microSD" data-inner="microSD-inner" cx="39.5" cy="34.5" r="1.7" />
                        <circle class="hover-circle-inner" id="microSD-inner" cx="39.5" cy="34.5" r="0.7" />

                        <circle class="hover-circle" data-target="case" data-inner="case-inner" cx="52" cy="13.5" r="1.7" />
                        <circle class="hover-circle-inner" id="case-inner" cx="52" cy="13.5" r="0.7" />

                        <circle class="hover-circle" data-target="android" data-inner="android-inner" cx="51.5" cy="86.5" r="1.7" />
                        <circle class="hover-circle-inner" id="android-inner" cx="51.5" cy="86.5" r="0.7" />

                        <circle class="hover-circle" data-target="3.5mm" data-inner="3.5mm-inner" cx="29.5" cy="61.5" r="1.7" />
                        <circle class="hover-circle-inner" id="3.5mm-inner" cx="29.5" cy="61.5" r="0.7" />
                        
                        <circle class="hover-circle" data-target="chip" data-inner="chip-inner" cx="37" cy="64" r="1.7" />
                        <circle class="hover-circle-inner" id="chip-inner" cx="37" cy="64" r="0.7" />
                    </svg>
                </div>

                <div class="image-wrapper engineering-drawing-position engineering-drawing-md">
                    <img src="img/phone/Northlight-explosive-sketch-mobile.png" alt="engineering drawing" class="engineering-drawing">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 100">
                        <circle class="hover-circle" data-target="sim-card" data-inner="sim-inner-md" cx="14.2" cy="36" r="2" />
                        <circle class="hover-circle-inner" id="sim-inner-md" cx="14.2" cy="36" r="0.7" />

                        <circle class="hover-circle" data-target="usb-c" data-inner="usb-c-inner-md" cx="4.5" cy="67" r="2" />
                        <circle class="hover-circle-inner" id="usb-c-inner-md" cx="4.5" cy="67" r="0.7" />

                        <circle class="hover-circle" data-target="battery" data-inner="battery-inner-md" cx="36.5" cy="23.5" r="2" />
                        <circle class="hover-circle-inner" id="battery-inner-md" cx="36.5" cy="23.5" r="0.7" />

                        <circle class="hover-circle" data-target="microSD" data-inner="microSD-inner-md" cx="18.2" cy="31.5" r="2" />
                        <circle class="hover-circle-inner" id="microSD-inner-md" cx="18.2" cy="31.5" r="0.7" />

                        <circle class="hover-circle" data-target="case" data-inner="case-inner-md" cx="32.5" cy="7.5" r="2" fill="rgba(3, 57, 240, 0.3)" />
                        <circle class="hover-circle-inner" id="case-inner-md" cx="32.5" cy="7.5" r="0.7" />

                        <circle class="hover-circle" data-target="android" data-inner="android-inner-md" cx="32" cy="91" r="2" />
                        <circle class="hover-circle-inner" id="android-inner-md" cx="32" cy="91" r="0.7" />

                        <circle class="hover-circle" data-target="3.5mm" data-inner="3.5mm-inner-md" cx="7.5" cy="61.5" r="2" />
                        <circle class="hover-circle-inner" id="3.5mm-inner-md" cx="7.5" cy="61.5" r="0.7" />

                        <circle class="hover-circle" data-target="chip" data-inner="chip-inner-md" cx="16" cy="65" r="2" />
                        <circle class="hover-circle-inner" id="chip-inner-md" cx="16" cy="65" r="0.7" />
                    </svg>
                </div>

                <!-- SIM Card -->
                <div class="image-wrapper hover-content" id="sim-card">
                    <img src="img/phone/dualSIM_card.png" alt="SIM card" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Dual SIM Cards</div>
                        <br>
                        <div class="feature-description">Simplified Travel</div>
                        <p> Easily switch to a local SIM card while traveling abroad.</p>
                        <div class="feature-description">Effortless Switching</div>
                        <p>Manage two numbers seamlessly, perfect for work and personal use.</p>
                        <div class="feature-description">Instant Switching</div>
                        <p>Change SIMs on the go with no downtime.</p>
                    </div>
                </div>

                <!-- USB-C -->
                <div class="image-wrapper hover-content" id="usb-c">
                    <img src="img/phone/usb_c.png" alt="USB-C" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">USB-C</div>
                        <br>
                        <div class="feature-description">One Cable, Multiple Uses</div>
                        <p>Universal compatibility for all devices.</p>
                        <div class="feature-description">Future-Ready Tech</div>
                        <p>Built to work with the latest devices and accessories.</p>
                        <div class="feature-description">Simple Connectivity</div>
                        <p>Reversible design makes plugging in hassle-free.</p>
                    </div>
                </div>

                <!-- Battery -->
                <div class="image-wrapper hover-content" id="battery">
                    <img src="img/phone/battery.png" alt="Detachable Battery" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Detachable Battery</div>
                        <br>
                        <div class="feature-description">Easy Replacement</div>
                        <p>Swap out the battery effortlessly for extended usage.</p>
                        <div class="feature-description">Swap in Seconds</div>
                        <p>Extend your phone’s life by replacing the battery, not the phone.</p>
                        <div class="feature-description">Eco-Friendly & Affordable</div>
                        <p>Replace the battery, not the phone.</p>
                    </div>
                </div>

                <!-- microSD Card -->
                <div class="image-wrapper hover-content" id="microSD">
                    <img src="img/phone/microSD_card.png" alt="microSD Card" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">microSD Card</div>
                        <br>
                        <div class="feature-description">Affordable Expansion</div>
                        <p>Increase storage without needing to upgrade to a pricier model.</p>
                        <div class="feature-description">Quick & Simple</div>
                        <p>Just insert a card—no setup needed.</p>
                        <div class="feature-description">Backup Ready</div>
                        <p>Reliable extra storage for important files.</p>
                    </div>
                </div>

                <!-- Case -->
                <div class="image-wrapper hover-content" id="case">
                    <img src="img/phone/phone_case.png" alt="case" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Phone Case</div>
                        <br>
                        <div class="feature-description">Durable Material</div>
                        <p>Made with ABS injection PC for long-lasting protection.</p>
                        <div class="feature-description">Smooth Curves & Surface</div>
                        <p>Ergonomically designed for the best grip and comfort.</p>
                        <div class="feature-description">Perfect Fit</div>
                        <p>Easy to pick up and designed for an exceptional in-hand experience.</p>
                    </div>
                </div>

                <!-- Android -->
                <div class="image-wrapper hover-content" id="android">
                    <img src="img/phone/android14.png" alt="Android 14" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Android 14</div>
                        <br>
                        <div class="feature-description">User-Friendly Experience</div>
                        <p>Intuitive design makes it easy for anyone to pick up and use.</p>
                        <div class="feature-description">Dependable Security</div>
                        <p>Advanced protections for worry-free use.</p>
                        <div class="feature-description">Tailored Simplicity</div>
                        <p>Customize your phone to match your lifestyle.</p>
                    </div>
                </div>

                <!-- 3.5mm -->
                <div class="image-wrapper hover-content" id="3.5mm">
                    <img src="img/phone/headphone_jack.png" alt="3.5mm Headphone Jack" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">3.5mm Headphone Jack</div>
                        <br>
                        <div class="feature-description">Plug & Play</div>
                        <p>No adapters, no hassle—just simplicity.</p>
                        <div class="feature-description">Universal Compatibility</div>
                        <p>Works with all standard headphones.</p>
                        <div class="feature-description">Classic Convenience</div>
                        <p>Trusted and familiar for seamless everyday use.</p>
                    </div>
                </div>

                <!-- Chip -->
                <div class="image-wrapper hover-content" id="chip">
                    <img src="img/phone/chip.png" alt="Chip" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Chip</div>
                        <br>
                        <div class="feature-description">Reliable Performance</div>
                        <p>MediaTek Quad-Core processor ensures smooth multitasking.</p>
                        <div class="feature-description">Efficient Power Use</div>
                        <p>Optimized for long-lasting battery life.</p>
                        <div class="feature-description">Trusted Quality</div>
                        <p>Built in Taiwan by TSMC, a global leader in semiconductor technology.</p>
                    </div>
                </div>
            </div>
            <div class="disclaimer-desktop">*Measurements are approximate; results may vary. SIM cards and microSD card are sold separately.</div>
        </div>
    </div>


    <div class="bg-color">
        <div class="container mobile-container-padding">
            <div class="features-container-mobile">
                <div class="image-wrapper-mobile">
                    <img src="img/phone/Northlight-explosive-sketch-mobile.png" alt="engineering drawing" class="engineering-drawing-mobile">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 100">
                        <circle class="hover-circle" data-target="sim-card-mobile" data-inner="sim-inner-mobile" cx="14.2" cy="36" r="2.4" />
                        <circle class="hover-circle-inner" id="sim-inner-mobile" cx="14.2" cy="36" r="0.9" />

                        <circle class="hover-circle" data-target="usb-c-mobile" data-inner="usb-c-inner-mobile" cx="4.5" cy="67" r="2.4" />
                        <circle class="hover-circle-inner" id="usb-c-inner-mobile" cx="4.5" cy="67" r="0.9" />

                        <circle class="hover-circle" data-target="battery-mobile" data-inner="battery-inner-mobile" cx="36.5" cy="23.5" r="2.4" />
                        <circle class="hover-circle-inner" id="battery-inner-mobile" cx="36.5" cy="23.5" r="0.9" />

                        <circle class="hover-circle" data-target="microSD-mobile" data-inner="microSD-inner-mobile" cx="18.2" cy="31.5" r="2.4" />
                        <circle class="hover-circle-inner" id="microSD-inner-mobile" cx="18.2" cy="31.5" r="0.9" />

                        <circle class="hover-circle" data-target="case-mobile" data-inner="case-inner-mobile" cx="32.5" cy="7.5" r="2.4" fill="rgba(3, 57, 240, 0.3)" />
                        <circle class="hover-circle-inner" id="case-inner-mobile" cx="32.5" cy="7.5" r="0.9" />

                        <circle class="hover-circle" data-target="android-mobile" data-inner="android-inner-mobile" cx="32" cy="91" r="2.4" />
                        <circle class="hover-circle-inner" id="android-inner-mobile" cx="32" cy="91" r="0.9" />

                        <circle class="hover-circle" data-target="3.5mm-mobile" data-inner="3.5mm-inner-mobile" cx="7.5" cy="61.5" r="2.4" />
                        <circle class="hover-circle-inner" id="3.5mm-inner-mobile" cx="7.5" cy="61.5" r="0.9" />

                        <circle class="hover-circle" data-target="chip-mobile" data-inner="chip-inner-mobile" cx="16" cy="65" r="2.4" />
                        <circle class="hover-circle-inner" id="chip-inner-mobile" cx="16" cy="65" r="0.9" />
                    </svg>
                </div>

                <!-- Case -->
                <div class="feature-wrapper-mobile" id="case-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/phone_case.png" alt="Case" class="feature-background-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Phone Case</div>
                        <br>
                        <div class="feature-description">Durable Material</div>
                        <p>Made with ABS injection PC for long-lasting protection.</p>
                        <div class="feature-description">Smooth Curves & Surface</div>
                        <p>Ergonomically designed for the best grip and comfort.</p>
                        <div class="feature-description">Perfect Fit</div>
                        <p>Easy to pick up and designed for an exceptional in-hand experience.</p>
                    </div>
                </div>

                <!-- Battery -->
                <div class="feature-wrapper-mobile" id="battery-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/battery.png" alt="Detachable Battery" class="feature-background-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Detachable Battery</div>
                        <br>
                        <div class="feature-description">Easy Replacement</div>
                        <p>Swap out the battery effortlessly for extended usage.</p>
                        <div class="feature-description">Swap in Seconds</div>
                        <p>Extend your phone’s life by replacing the battery, not the phone.</p>
                        <div class="feature-description">Eco-Friendly & Affordable</div>
                        <p>Replace the battery, not the phone.</p>
                    </div>
                </div>

                <!-- microSD Card -->
                <div class="feature-wrapper-mobile" id="microSD-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/microSD_card.png" alt="microSD Card" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">microSD Card</div>
                        <br>
                        <div class="feature-description">Affordable Expansion</div>
                        <p>Increase storage without needing to upgrade to a pricier model.</p>
                        <div class="feature-description">Quick & Simple</div>
                        <p>Just insert a card—no setup needed.</p>
                        <div class="feature-description">Backup Ready</div>
                        <p>Reliable extra storage for important files.</p>
                    </div>
                </div>

                <!-- SIM Card -->
                <div class="feature-wrapper-mobile" id="sim-card-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/dualSIM_card.png" alt="SIM card" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Dual SIM Cards</div>
                        <br>
                        <div class="feature-description">Simplified Travel</div>
                        <p> Easily switch to a local SIM card while traveling abroad.</p>
                        <div class="feature-description">Effortless Switching</div>
                        <p>Manage two numbers seamlessly, perfect for work and personal use.</p>
                        <div class="feature-description">Instant Switching</div>
                        <p>Change SIMs on the go with no downtime.</p>
                    </div>
                </div>

                <!-- 3.5mm -->
                <div class="feature-wrapper-mobile" id="3.5mm-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/headphone_jack.png" alt="3.5mm Headphone Jack" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">3.5mm Headphone Jack</div>
                        <br>
                        <div class="feature-description">Plug & Play</div>
                        <p>No adapters, no hassle—just simplicity.</p>
                        <div class="feature-description">Universal Compatibility</div>
                        <p>Works with all standard headphones.</p>
                        <div class="feature-description">Classic Convenience</div>
                        <p>Trusted and familiar for seamless everyday use.</p>
                    </div>
                </div>

                <!-- Chip -->
                <div class="feature-wrapper-mobile" id="chip-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/chip.png" alt="Chip" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Chip</div>
                        <br>
                        <div class="feature-description">Reliable Performance</div>
                        <p>MediaTek Quad-Core processor ensures smooth multitasking.</p>
                        <div class="feature-description">Efficient Power Use</div>
                        <p>Optimized for long-lasting battery life.</p>
                        <div class="feature-description">Trusted Quality</div>
                        <p>Built in Taiwan by TSMC, a global leader in semiconductor technology.</p>
                    </div>
                </div>

                <!-- USB-C -->
                <div class="feature-wrapper-mobile" id="usb-c-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/usb_c.png" alt="USB-C" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">USB-C</div>
                        <br>
                        <div class="feature-description">One Cable, Multiple Uses</div>
                        <p>Universal compatibility for all devices.</p>
                        <div class="feature-description">Future-Ready Tech</div>
                        <p>Built to work with the latest devices and accessories.</p>
                        <div class="feature-description">Simple Connectivity</div>
                        <p>Reversible design makes plugging in hassle-free.</p>
                    </div>
                </div>

                <!-- Android -->
                <div class="feature-wrapper-mobile" id="android-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/android14.png" alt="Android 14" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Android 14</div>
                        <br>
                        <div class="feature-description">User-Friendly Experience</div>
                        <p>Intuitive design makes it easy for anyone to pick up and use.</p>
                        <div class="feature-description">Dependable Security</div>
                        <p>Advanced protections for worry-free use.</p>
                        <div class="feature-description">Tailored Simplicity</div>
                        <p>Customize your phone to match your lifestyle.</p>
                    </div>
                </div>
            </div>
            <div class="disclaimer-mobile">*Measurements are approximate; results may vary. SIM cards and microSD card are sold separately.</div>
        </div>
    </div>

    <?php include './inc/footer.php'; ?>

    <script src="js/northlight.js"></script>

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

    <!-- <script>
        document.addEventListener("scroll", () => {
            const navbar = document.getElementById("phone-nav-container");
            const scrollPosition = window.scrollY || document.documentElement.scrollTop;

            if ((scrollPosition > 700 && window.innerWidth >= 991) || (scrollPosition > 300 && window.innerWidth < 991)) {
                navbar.classList.remove("hidden");
                navbar.classList.add("visible");
            } else {
                navbar.classList.remove("visible");
                navbar.classList.add("hidden");
            }
        });
    </script> -->

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