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

    <div class="custom-container">
        <div class="drawing-container">
            <div class="image-wrapper">
                <img src="img/phone/Northlight-explosive-sketch.png" alt="engineering drawing" class="engineering-drawing">

                <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <circle class="hover-circle" data-target="sim-card" cx="36" cy="38" r="2" fill="rgba(3, 57, 248, 0.3)"/>
                    <circle class="hover-circle" data-target="sim-card" cx="36" cy="38" r="0.7" fill="rgba(3, 57, 248, 0.7)"/>

                    <circle class="hover-circle" data-target="usb-c" cx="27.5" cy="65" r="2" fill="rgba(3, 57, 248, 0.3)"/>
                    <circle class="hover-circle" data-target="usb-c" cx="27.5" cy="65" r="0.7" fill="rgba(3, 57, 248, 0.7)"/>

                    <circle class="hover-circle" data-target="battery" data-arrow="battery-arrow" cx="56" cy="27" r="2" fill="rgba(3, 57, 248, 0.3)"/>
                    <circle class="hover-circle" data-target="battery" data-arrow="battery-arrow" cx="56" cy="27" r="0.7" fill="rgba(3, 57, 248, 0.7)"/>

                    <circle class="hover-circle" data-target="microSD" cx="39.5" cy="34.5" r="2" fill="rgba(3, 57, 248, 0.3)"/>
                    <circle class="hover-circle" data-target="microSD" cx="39.5" cy="34.5" r="0.7" fill="rgba(3, 57, 248, 0.7)"/>

                    <circle class="hover-circle" data-target="case" data-arrow="case-arrow" cx="52" cy="13.5" r="2" fill="rgba(3, 57, 248, 0.3)"/>
                    <circle class="hover-circle" data-target="case" data-arrow="case-arrow" cx="52" cy="13.5" r="0.7" fill="rgba(3, 57, 248, 0.7)"/>

                    <circle class="hover-circle" data-target="android" cx="51.5" cy="86.5" r="2" fill="rgba(3, 57, 248, 0.3)"/>
                    <circle class="hover-circle" data-target="android" cx="51.5" cy="86.5" r="0.7" fill="rgba(3, 57, 248, 0.7)"/>

                    <circle class="hover-circle" data-target="3.5mm" cx="29.5" cy="61.5" r="2" fill="rgba(3, 57, 248, 0.3)"/>
                    <circle class="hover-circle" data-target="3.5mm" cx="29.5" cy="61.5" r="0.7" fill="rgba(3, 57, 248, 0.7)"/>

                    <circle class="hover-circle" data-target="chip" cx="37" cy="64" r="2" fill="rgba(3, 57, 248, 0.3)"/>
                    <circle class="hover-circle" data-target="chip" cx="37" cy="64" r="0.7" fill="rgba(3, 57, 248, 0.7)"/>
                </svg>
            </div>

            <!-- SIM Card -->
            <div class="image-wrapper hover-content" id="sim-card">
                <img src="img/phone/dualSIM_card.png" alt="SIM card" class="engineering-drawing">
                <div class="text-overlay">
                    <div class="feature-title">Dual SIM Cards</div>
                    <br>
                    <p class="fw-bold">Simplified Travel</p>
                    <p>Easily switch to a local SIM while traveling abroad.</p>
                    <p class="fw-bold">Effortless Switching</p>
                    <p>Manage two numbers seamlessly, perfect for work and personal use.</p>
                    <p class="fw-bold">Cost Efficiency</p>
                    <p>Saving on international calls, roaming, or data.</p>
                </div>
            </div>

            <div class="image-wrapper hover-content" id="usb-c">
                <img src="img/phone/usb_c.png" alt="USB-C" class="engineering-drawing">
                <div class="text-overlay">
                    <div class="feature-title">USB Type-C</div>
                    <br>
                    <p class="fw-bold">Universal Compatibility</p>
                    <p>Use one cable for multiple devices.</p>
                    <p class="fw-bold">Reliable Charging</p>
                    <p>Fast and efficient power delivery whenever you need it.</p>
                    <p class="fw-bold">Simple Connectivity</p>
                    <p>Reversible design makes plugging in hassle-free.</p>
                </div>
            </div>

            <div class="image-wrapper hover-content" id="battery">
                <img src="img/phone/battery.png" alt="Removable Battery" class="engineering-drawing">
                <div class="text-overlay">
                    <div class="feature-title">Removable Battery</div>
                    <br>
                    <p class="fw-bold">Easy Replacement</p>
                    <p>Swap out the battery effortlessly for extended usage.</p>
                    <p class="fw-bold">Practical Power Solution</p>
                    <p>Extend your phone’s life by replacing the battery, not the phone.</p>
                    <p class="fw-bold">User-Friendly Design</p>
                    <p>Swap batteries quickly without special tools.</p>
                </div>
            </div>

            <div class="image-wrapper hover-content" id="microSD">
                <img src="img/phone/microSD_card.png" alt="microSD Card" class="engineering-drawing">
                <div class="text-overlay">
                    <div class="feature-title">microSD Card</div>
                    <br>
                    <p class="fw-bold">Affordable Expansion</p>
                    <p>Increase storage without needing a pricier phone model.</p>
                    <p class="fw-bold">Easy Upgrades</p>
                    <p>Simply insert a card to get more space—no extra setup required.</p>
                    <p class="fw-bold">Flexible Usage</p>
                    <p>Store more photos, videos, and apps with ease.</p>
                </div>
            </div>

            <div class="image-wrapper hover-content" id="case">
                <img src="img/phone/phone_case.png" alt="case" class="engineering-drawing">
                <div class="text-overlay">
                    <div class="feature-title">Phone Case</div>
                    <br>
                    <p class="fw-bold">More Options Coming Soon…</p>
                </div>
            </div>

            <div class="image-wrapper hover-content" id="android">
                <img src="img/phone/android14.png" alt="Android 14" class="engineering-drawing">
                <div class="text-overlay">
                    <div class="feature-title">Android 14</div>
                    <br>
                    <p class="fw-bold">User-Friendly Experience</p>
                    <p>Intuitive design makes it easy for anyone to pick up and use.</p>
                    <p class="fw-bold">Dependable Security</p>
                    <p>Advanced protections for worry-free use.</p>
                    <p class="fw-bold">Tailored Simplicity</p>
                    <p>Customize your phone to match your lifestyle.</p>
                </div>
            </div>

            <div class="image-wrapper hover-content" id="3.5mm">
                <img src="img/phone/headphone_jack.png" alt="3.5mm Headphone Jack" class="engineering-drawing">
                <div class="text-overlay">
                    <div class="feature-title">3.5mm Headphone Jack</div>
                    <br>
                    <p class="fw-bold">Simple Sound Solution</p>
                    <p>Just plug and play — no adapters or pairing needed.</p>
                    <p class="fw-bold">Consistent Quality</p>
                    <p>Dependable audio performance every time.</p>
                    <p class="fw-bold">Classic Convenience</p>
                    <p>Trusted and familiar for seamless everyday use.</p>
                </div>
            </div>

            <div class="image-wrapper hover-content" id="chip">
                <img src="img/phone/chip.png" alt="Chip" class="engineering-drawing">
                <div class="text-overlay">
                    <div class="feature-title">Chip</div>
                    <br>
                    <p class="fw-bold">Reliable Performance</p>
                    <p>MediaTek Quad-Core processor ensures smooth multitasking.</p>
                    <p class="fw-bold">Responsive Experience</p>
                    <p>Handles everyday tasks with speed and ease.</p>
                    <p class="fw-bold">Trusted Quality</p>
                    <p>Built in Taiwan by TSMC, a global leader in semiconductor technology.</p>
                </div>
            </div>

            <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="0" refY="3.5" orient="auto">
                        <polygon points="0 0, 7 3.5, 0 7" fill="rgb(3, 57, 248)" />
                    </marker>
                </defs>
                <line class="arrow" id="battery-arrow" x1="31.7" y1="27" x2="72.5" y2="25" stroke="rgb(3, 57, 248)" stroke-width="0.2" marker-end="url(#arrowhead)" />
                <line class="arrow" id="case-arrow" x1="29.2" y1="13.5" x2="73" y2="25" stroke="rgb(3, 57, 248)" stroke-width="0.2" marker-end="url(#arrowhead)" />
            </svg>

        </div>
    </div>

    <div style="padding-top: 50px;"></div>


    <?php include './inc/footer.php'; ?>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const circles = document.querySelectorAll('.hover-circle');
            const defaultImage = document.getElementById('battery');
            const defaultArrow = document.getElementById('battery-arrow');
            const hoverContent = document.querySelectorAll('.hover-content');
            const arrows = document.querySelectorAll('.arrow');

            let currentTarget = null; // Track the currently displayed image's target ID

            // Function to show the targeted content and hide others
            function showContent(targetId, arrowId) {
                // Hide all hover content
                hoverContent.forEach(content => (content.style.display = 'none'));
                arrows.forEach(arrow => (arrow.style.display = 'none'));

                if (targetId) {
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) targetElement.style.display = 'block';

                    const targetArrow = document.getElementById(arrowId);
                    if (targetArrow) targetArrow.style.display = 'block';

                    // Update the current visible target
                    currentTarget = targetId;
                } else {
                    // No target clicked: show default image and hide everything else
                    defaultImage.style.display = 'block';
                    defaultArrow.style.display = 'block';
                    currentTarget = null;
                }
            }

            // Add event listeners to circles
            circles.forEach(circle => {
                const targetId = circle.getAttribute('data-target');
                const arrowId = circle.getAttribute('data-arrow');

                // On click, show the corresponding content
                circle.addEventListener('click', () => {
                    showContent(targetId, arrowId);
                });
            });

            // Set default state on page load
            showContent(null); // Show the default image
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