<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './inc/HTMLhead.php'; ?>
    <title>Northlight: Canada’s Most Affordable Dual SIM Phone | INOVA</title>
    <meta name="description" content="Northlight by INOVA: A cheap phone with Dual SIM, MicroSD slot, & swappable battery. Canadian-made quality at an unbeatable price.">
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
        <img class="poster-image banner" src="img/phone/banner_bg.jpg" alt="Banner">
    </div>

    <div class="mobile-banner-container">
        <img class="img-fluid banner" src="img/phone/banner_bg_mobile.jpg" alt="Banner">
    </div>

    <!-- highlights -->
    <div class="container">
        <div class="row section-padding">
            <div class="col-12">
                <div class="heading text-center">Affordable, Reliable, Simplicity at its Finest</div>
            </div>
        </div>

        <!-- Desktop Highlights -->
        <div class="row d-none d-xl-flex">
            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="display" href="northlight.php#engineering-drawing-section">
                    <img src="img/phone/icons/icons_size.svg" alt="display" class="highlight-icon">
                    <div class="highlight-text">5.45" LCD</div>
                    <div class="highlight-text link">480 x 960</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="camera" href="northlight.php#engineering-drawing-section">
                    <img src="img/phone/icons/icons_camera.svg" alt="camera" class="highlight-icon">
                    <div class="highlight-text">5MP Back</div>
                    <div class="highlight-text link">2MP Front</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="chip" href="northlight.php#engineering-drawing-section">
                    <img src="img/phone/icons/icons_memory.svg" alt="chip" class="highlight-icon">
                    <div class="highlight-text">Mediatek</div>
                    <div class="highlight-text link">Helio A22</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="sim-card" href="northlight.php#engineering-drawing-section">
                    <img src="img/phone/icons/icons_dualsim.svg" alt="dual-sim" class="highlight-icon">
                    <div class="highlight-text">Micro SIM</div>
                    <div class="highlight-text link">& Nano SIM</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="microSD" href="northlight.php#engineering-drawing-section">
                    <img src="img/phone/icons/icons_sd_card.svg" alt="microSD Card" class="highlight-icon">
                    <div class="highlight-text">microSD</div>
                    <div class="highlight-text link">Up to 512GB</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="battery" href="northlight.php#engineering-drawing-section">
                    <img src="img/phone/icons/icons_battery_swap.svg" alt="battery" class="highlight-icon">
                    <div class="highlight-text">Replaceable</div>
                    <div class="highlight-text link">Battery</div>
                </a>
            </div>
        </div>

        <!-- Mobile Highlights -->
        <div class="row d-xl-none">
            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="display-mobile" href="northlight.php#engineering-drawing-section-mobile">
                    <img src="img/phone/icons/icons_size.svg" alt="display" class="highlight-icon">
                    <div class="highlight-text">5.45" LCD</div>
                    <div class="highlight-text link">480 x 960</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="camera-mobile" href="northlight.php#engineering-drawing-section-mobile">
                    <img src="img/phone/icons/icons_camera.svg" alt="camera" class="highlight-icon">
                    <div class="highlight-text">5MP Back</div>
                    <div class="highlight-text link">2MP Front</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="chip-mobile" href="northlight.php#engineering-drawing-section-mobile">
                    <img src="img/phone/icons/icons_memory.svg" alt="chip" class="highlight-icon">
                    <div class="highlight-text">Mediatek</div>
                    <div class="highlight-text link">Helio A22</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="sim-card-mobile" href="northlight.php#engineering-drawing-section-mobile">
                    <img src="img/phone/icons/icons_dualsim.svg" alt="dual-sim" class="highlight-icon">
                    <div class="highlight-text">Micro SIM</div>
                    <div class="highlight-text link">& Nano SIM</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="microSD-mobile" href="northlight.php#engineering-drawing-section-mobile">
                    <img src="img/phone/icons/icons_sd_card.svg" alt="microSD Card" class="highlight-icon">
                    <div class="highlight-text">microSD</div>
                    <div class="highlight-text link">Up to 512GB</div>
                </a>
            </div>

            <div class="col-4 col-md-2 p-0 d-flex justify-content-center">
                <a class="highlight-wrap" data-target="battery-mobile" href="northlight.php#engineering-drawing-section-mobile">
                    <img src="img/phone/icons/icons_battery_swap.svg" alt="battery" class="highlight-icon">
                    <div class="highlight-text">Replaceable</div>
                    <div class="highlight-text link">Battery</div>
                </a>
            </div>
        </div>

        <div class="row top-padding bottom-padding-sm gx-lg-5 gy-lg-0 gy-4">
            <div class="col-lg-6 d-flex align-items-center">
                <img src="img/phone/phone_photo_1.png" alt="" class="rounded-img">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="about-title pb-3">Designed to Connect, Not Compete</div>
                <p>Northlight isn’t just a smartphone—it’s INOVA’s commitment to accessibility, simplicity, and community in action. Designed to dissolve barriers between people and technology, it strips away complexity, cost, and excess. Every feature serves a purpose: connecting you to what matters, not chasing specs you’ll never use.</p>
                <p>Behind every detail lies a choice: prioritize people over pixels, purpose over prestige.</p>
            </div>
        </div>

        <div class="row bottom-padding gx-lg-5 gy-lg-0 gy-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center order-1 order-lg-0">
                <div class="about-title pb-3">Building Bridges, Not Gadgets</div>
                <p>INOVA’s vision has always been about connection—not just between devices, but between people. Northlight is a tool for the teenager navigating their first phone, the retiree video-calling grandkids, or the entrepreneur juggling work and life. It’s a reminder that innovation isn’t about pixels or megawatts—it’s about dissolving barriers.</p>
                <p>Because at INOVA, we don’t engineer phones. We craft tools that let you focus on what truly matters: the people on the other side of the screen.</p>
            </div>
            <div class="col-lg-6 d-flex align-items-center order-0 order-lg-1">
                <img src="img/phone/phone_photo_2.png" alt="" class="rounded-img">
            </div>
        </div>
    </div>

    <!-- Desktop Engineering Drawing -->
    <div class="bg-color overflow-hidden">
        <div class="custom-container">
            <div class="heading text-white" style="padding-top: 50px;">Let's Break it Down.</div>
            <div class="features-container-desktop" id="engineering-drawing-section">
                <div class="image-wrapper engineering-drawing-position engineering-drawing-lg">
                    <img src="img/phone/Northlight-explosive-sketch.png" alt="engineering drawing" class="engineering-drawing">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <circle class="circle" cx="36" cy="38.2">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="sim-card" cx="36" cy="38.2" r="1" />

                        <circle class="circle" cx="27.5" cy="65">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="usb-c" cx="27.5" cy="65" r="1" />

                        <circle class="circle" cx="56" cy="27">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="battery" cx="56" cy="27" r="1" />

                        <circle class="circle" cx="39.5" cy="34.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="microSD" cx="39.5" cy="34.5" r="1" />

                        <circle class="circle" cx="52" cy="13.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="case" cx="52" cy="13.5" r="1" />

                        <circle class="circle" cx="51.5" cy="86.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="display" cx="51.5" cy="86.5" r="1" />

                        <circle class="circle" cx="29.5" cy="61.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="3.5mm" cx="29.5" cy="61.5" r="1" />

                        <circle class="circle" cx="37.8" cy="64">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="chip" cx="37.8" cy="64" r="1" />

                        <circle class="circle" cx="33.3" cy="46.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="camera" cx="33.3" cy="46.5" r="1" />
                    </svg>
                </div>

                <!-- Small Desktop Engineering Drawing -->
                <div class="image-wrapper engineering-drawing-position engineering-drawing-md">
                    <img src="img/phone/Northlight-explosive-sketch-mobile.png" alt="engineering drawing" class="engineering-drawing">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 100">
                        <circle class="circle" cx="14.2" cy="35.8">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="sim-card" cx="14.2" cy="35.8" r="1.1" />

                        <circle class="circle" cx="4.5" cy="67">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="usb-c" cx="4.5" cy="67" r="1.1" />

                        <circle class="circle" cx="36.5" cy="23.5">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="battery" cx="36.5" cy="23.5" r="1.1" />

                        <circle class="circle" cx="18.2" cy="31.5">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="microSD" cx="18.2" cy="31.5" r="1.1" />

                        <circle class="circle" cx="32.5" cy="7.5">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="case" cx="32.5" cy="7.5" r="1.1" />

                        <circle class="circle" cx="32" cy="91">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="display" cx="32" cy="91" r="1.1" />

                        <circle class="circle" cx="7.5" cy="61.5">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="3.5mm" cx="7.5" cy="61.5" r="1.1" />

                        <circle class="circle" cx="16" cy="65">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="chip" cx="16" cy="65" r="1.1" />

                        <circle class="circle" cx="11" cy="45">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="camera" cx="11" cy="45" r="1.1" />
                    </svg>
                </div>

                <!-- Case -->
                <div class="image-wrapper content" id="case">
                    <img src="img/phone/phone_case.png" alt="case" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Phone Case</div>
                        <div class="toggle-container">
                            <div class="feature-description">Durable & Lightweight Design</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s body and case use ABS injection PC—<strong>a tough, lightweight plastic</strong> that resists drops and scratches. Unlike premium phones that rely on metals like aluminum or titanium (which add modest weight and cost for their durability), ABS keeps the phone practical: <strong>lighter for pockets or long calls</strong>, and affordable without compromising everyday resilience.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Compact & Practical Size</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">At 74mm wide (2.91 inches), <strong>Northlight fits comfortably in all hands</strong>—no stretching to reach buttons or balancing acts to avoid drops. While others chase oversized screens, we prioritize portability: it slips into small bags, jeans pockets, or your palm effortlessly, proving bigger isn’t always better.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Ergonomic Curves for All-Day Comfort</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Designed with <strong>smooth, rounded edges</strong> and a matte finish, Northlight feels natural in your grip. The subtle curves fit snugly in palms of all sizes, whether you’re texting one-handed on a commute or snapping photos at a family BBQ. No sharp edges, no slippery surfaces—just practicality that works for everyone.</p>
                    </div>
                </div>

                <!-- Battery -->
                <div class="image-wrapper content" id="battery">
                    <img src="img/phone/battery.png" alt="Detachable Battery" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Detachable Battery</div>
                        <div class="toggle-container">
                            <div class="feature-description">Easily Replaceable</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s battery swaps in seconds with a <strong>tool-free latch system</strong>—no screws, no technician required. <strong>Simply pop off</strong> the case, <storng>replace</storng> the battery, and power up. Designed for everyone, from tech novices to busy parents, it’s as simple as changing a TV remote’s batteries.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Built for Daily Demands & Emergencies</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Keep a spare battery</strong> for all-day adventures, travel, or unexpected outages. Unlike sealed phones that leave you scrambling for a charger, Northlight ensures you’re never stranded. Swap in a fresh battery during a hike, flight, or blackout—because life doesn’t wait for a power outlet.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Replace the Battery, Not the Phone</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">When batteries degrade (as all do), Northlight lets you <strong>replace just the battery</strong>—not the entire phone. This eco-friendly approach cuts long-term costs and e-waste, aligning with our mission to make tech sustainable. Why discard a perfectly good phone over a $20 battery?</p>
                    </div>
                </div>

                <!-- microSD Card -->
                <div class="image-wrapper content" id="microSD">
                    <img src="img/phone/microSD_card.png" alt="microSD Card" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">microSD Card</div>
                        <div class="toggle-container">
                            <div class="feature-description">Affordable Expansion</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Expand your storage affordably with a <strong>microSD card</strong>—no need to buy a pricier high-storage model. Add up to <strong>512GB</strong> for photos, videos, and apps, keeping your budget intact while future-proofing your device.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Quick & Simple</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Just slide in a microSD card—<strong>no setup, no formatting</strong>. Northlight recognizes it instantly, letting you store files, transfer data, or free up space in seconds. Perfect for tech newcomers or anyone craving hassle-free solutions.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Backup Ready</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Use the microSD slot for <strong>reliable backups</strong> of family photos, work documents, or medical records. Unlike cloud storage (which needs Wi-Fi or subscriptions), your data stays offline, portable, and safe from accidental deletion—peace of mind in your pocket.</p>
                    </div>
                </div>

                <!-- Dual SIM Card -->
                <div class="image-wrapper content" id="sim-card">
                    <img src="img/phone/dualSIM_card.png" alt="Dual SIM card" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Dual Sim Card</div>
                        <div class="toggle-container">
                            <div class="feature-description">Simplified Travel</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Swap to a local SIM card instantly</strong> when traveling abroad—no more exorbitant roaming fees. Keep your home number active for emergencies while using a local plan for data, calls, and maps. Perfect for globetrotters, students abroad, or business trips.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Effortless Switching</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Separate work and personal life</strong> seamlessly with Dual SIM. Assign one slot for client calls and another for family chats—no juggling phones or missing important updates. Ideal for freelancers, entrepreneurs, or anyone craving work-life balance.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Instant Switching</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Toggle between SIMs <strong>in seconds</strong> via software settings—no physical swapping needed. Pause your work line during dinner or activate a travel SIM mid-flight. Stay connected your way, without interruptions or delays.</p>
                    </div>
                </div>

                <!-- Camera -->
                <div class="image-wrapper content" id="camera">
                    <img src="img/phone/camera.png" alt="camera" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Camera</div>
                        <div class="toggle-container">
                            <div class="feature-description">5MP Rear Camera & 2MP Front Camera</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>5MP rear camera</strong> captures sharp, 5-million-pixel photos—ideal for scanning documents, QR codes, or snapping clear shots of notes at work. The <strong>2MP front camera</strong> handles video calls and quick selfies, ensuring you stay connected with loved ones. Both prioritize practicality over blindly chasing unneeded ultra-high pixels.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Designed for Daily Usage</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s camera focuses on what truly matters: <strong>capturing life’s essentials</strong>. Scan receipts, sharing daily updates, or record your child’s first steps—all without fuss. While 48MP+ cameras excel in professional detail, most users don’t need extreme resolution for sharing moments with friends or preserving life’s simple joys.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Memory Over Megapixels</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The best photos aren’t defined by resolution—they’re defined by moments. A blurry birthday cake or a sunlit family dinner holds more value than technical perfection. Northlight prioritizes <strong>preserving memories</strong>, not chasing specs, because life’s magic lies in the experience, not the pixels.</p>
                    </div>
                </div>

                <!-- Chip -->
                <div class="image-wrapper content" id="chip">
                    <img src="img/phone/chip.png" alt="Chip" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Chip</div>
                        <div class="toggle-container">
                            <div class="feature-description">Mediatek Helio A22 MT6761</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>Quad-Core CPU</strong> (four processing units) clocked at <strong>2.0GHz</strong>, meaning it can handle multiple tasks like messaging, browsing, social media, and streaming efficiently. While not for heavy gaming or 4K editing, it balances smooth performance with energy efficiency—perfect for video calls, music, and apps that keep you connected.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Designed for Daily Usage</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The Helio A22 is designed to handle daily smartphone tasks effortlessly, whether it's browsing the web, scrolling social media, streaming videos, or managing calls and messages, this chip provides a smooth experience. For users who value practicality over specs, this chip <strong>keeps you connected without paying for power you’ll never use</strong>.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Made by MediaTek & TSMC</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>MediaTek</strong>, a global leader in <strong>secure, energy-efficient processors</strong>, partners with <strong>TSMC</strong> (Taiwan Semiconductor Manufacturing Company), the world’s most advanced and reliable semiconductor manufacturer. Together, they ensure every Northlight chip is durable, secure processors, rigorously tested for safety and efficiency. Trusted engineering, without the premium cost.</p>
                    </div>
                </div>

                <!-- 3.5mm -->
                <div class="image-wrapper content" id="3.5mm">
                    <img src="img/phone/headphone_jack.png" alt="3.5mm Headphone Jack" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">3.5mm Headphone Jack</div>
                        <div class="toggle-container">
                            <div class="feature-description">Universal Compatibility</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The 3.5mm headphone jack remains the most widely used <strong>audio standard worldwide</strong>, compatible with millions of wired headphones, earbuds, car aux systems, and speakers. Unlike Bluetooth-only phones, Northlight lets you use any pair—from dollar-store earbuds to premium studio headsets—without dongles, pairing hassles, or brand restrictions.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Charge & Listen</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Keep your phone charging via USB-C while plugging in wired headphones—no more choosing between <strong>music and battery life</strong>. Perfect for long flights, road trips, or bedside Netflix binges where uninterrupted power and sound matter most.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Classic Convenience</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The 3.5mm jack is a timeless, trusted feature. No batteries to charge, no settings to tweak—just plug in and enjoy instant, glitch-free audio. For users who crave <strong>simplicity</strong> (or hate fumbling with Bluetooth), it’s everyday ease, perfected.</p>
                    </div>
                </div>

                <!-- USB-C -->
                <div class="image-wrapper content" id="usb-c">
                    <img src="img/phone/usb_c.png" alt="USB-C" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">USB-C</div>
                        <div class="toggle-container">
                            <div class="feature-description">Universal Simplicity</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C is the <strong>global standard</strong> for modern devices—charge your phone, laptop, tablet, or earbuds with the same cable. No more juggling cords: transfer files, power up, or connect to monitors effortlessly. Simplify your tech life while saving money on extra accessories.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Future-Ready Tech</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C supports faster charging, 4K video output, and high-speed data transfers. <strong>Compatible</strong> with the latest laptops, chargers, and peripherals, it ensures Northlight stays relevant as tech evolves. <strong>No adapter</strong> headaches or outdated ports—just seamless compatibility for years to come.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Simple Connectivity</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C’s reversible design works flawlessly in any orientation—no flipping the plug three times. Whether you’re charging in the dark or rushing out the door, it’s <strong>hassle-free convenience</strong> for all ages. A small detail that makes everyday life smoother.</p>
                    </div>
                </div>

                <!-- Display -->
                <div class="image-wrapper content" id="display">
                    <img src="img/phone/display.png" alt="display" class="engineering-drawing">
                    <div class="text-overlay">
                        <div class="feature-title">Display</div>
                        <div class="toggle-container">
                            <div class="feature-description">TFT LCD</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>TFT LCD</strong> screens use a backlight to deliver bright, <strong>sunlight-friendly visuals</strong>, ideal for outdoor use. Unlike OLED (where each pixel emits its own light), LCDs prioritize affordability, durability, and no risk of screen burn-in. Perfect for users who value practicality over premium specs.</p>

                        <div class="toggle-container">
                            <div class="feature-description">480x960 Resolution</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">At <strong>197 PPI</strong> (pixels per inch), sharper than most TVs screen, this PPI keeps text sharp for messaging, social media, and casual browsing. While premium phones push 500+ PPI (better for billboard-sized prints), Northlight’s screen matches daily needs—clear photos for social posts, no battery drain from overkill pixel density.</p>

                        <div class="toggle-container">
                            <div class="feature-description">60Hz Refresh Rate</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>60Hz refresh rate</strong> updates the screen 60 times per second, matching most TVs and laptops. It handles scrolling, videos, and light gaming smoothly, while avoiding the battery drain and added cost of 120Hz+ displays. Designed for reliability, not specs you’ll rarely notice.</p>
                    </div>
                </div>
            </div>
            <div class="disclaimer-desktop">*For demonstration purposes only. Actual parts, specifications, and measurements may vary. SIM and microSD cards not included.</div>
        </div>
    </div>

    <!-- Mobile Engineering Drawing -->
    <div class="bg-color">
        <div class="container mobile-container-padding" id="engineering-drawing-section-mobile">
            <div class="features-container-mobile">
                <div class="image-wrapper-mobile">
                    <img src="img/phone/Northlight-explosive-sketch-mobile.png" alt="engineering drawing" class="engineering-drawing-mobile">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 100">
                        <circle class="circle" cx="14.2" cy="36">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="sim-card-mobile" cx="14.2" cy="36" r="1.5" />

                        <circle class="circle" cx="4.5" cy="67">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="usb-c-mobile" cx="4.5" cy="67" r="1.5" />

                        <circle class="circle" cx="36.5" cy="23.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="battery-mobile" cx="36.5" cy="23.5" r="1.5" />

                        <circle class="circle" cx="18.2" cy="31.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="microSD-mobile" cx="18.2" cy="31.5" r="1.5" />

                        <circle class="circle" cx="32.5" cy="7.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="case-mobile" cx="32.5" cy="7.5" r="1.5" />

                        <circle class="circle" cx="32" cy="91">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="display-mobile" cx="32" cy="91" r="1.5" />

                        <circle class="circle" cx="7.5" cy="61.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="3.5mm-mobile" cx="7.5" cy="61.5" r="1.5" />

                        <circle class="circle" cx="16" cy="65">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="chip-mobile" cx="16" cy="65" r="1.5" />

                        <circle class="circle" cx="11" cy="45">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="camera-mobile" cx="11" cy="45" r="1.5" />
                    </svg>
                </div>

                <!-- Case -->
                <div class="feature-wrapper-mobile" id="case-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/phone_case.png" alt="Case" class="feature-background-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Phone Case</div>
                        <div class="toggle-container">
                            <div class="feature-description">Durable & Lightweight Design</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s body and case use ABS injection PC—<strong>a tough, lightweight plastic</strong> that resists drops and scratches. Unlike premium phones that rely on metals like aluminum or titanium (which add modest weight and cost for their durability), ABS keeps the phone practical: <strong>lighter for pockets or long calls</strong>, and affordable without compromising everyday resilience.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Compact & Practical Size</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">At 74mm wide (2.91 inches), <strong>Northlight fits comfortably in all hands</strong>—no stretching to reach buttons or balancing acts to avoid drops. While others chase oversized screens, we prioritize portability: it slips into small bags, jeans pockets, or your palm effortlessly, proving bigger isn’t always better.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Ergonomic Curves for All-Day Comfort</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Designed with <strong>smooth, rounded edges</strong> and a matte finish, Northlight feels natural in your grip. The subtle curves fit snugly in palms of all sizes, whether you’re texting one-handed on a commute or snapping photos at a family BBQ. No sharp edges, no slippery surfaces—just practicality that works for everyone.</p>
                    </div>
                </div>

                <!-- Battery -->
                <div class="feature-wrapper-mobile" id="battery-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/battery.png" alt="Detachable Battery" class="feature-background-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Detachable Battery</div>
                        <div class="toggle-container">
                            <div class="feature-description">Easily Replaceable</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s battery swaps in seconds with a <strong>tool-free latch system</strong>—no screws, no technician required. <strong>Simply pop off</strong> the case, <storng>replace</storng> the battery, and power up. Designed for everyone, from tech novices to busy parents, it’s as simple as changing a TV remote’s batteries.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Built for Daily Demands & Emergencies</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Keep a spare battery</strong> for all-day adventures, travel, or unexpected outages. Unlike sealed phones that leave you scrambling for a charger, Northlight ensures you’re never stranded. Swap in a fresh battery during a hike, flight, or blackout—because life doesn’t wait for a power outlet.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Replace the Battery, Not the Phone</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">When batteries degrade (as all do), Northlight lets you <strong>replace just the battery</strong>—not the entire phone. This eco-friendly approach cuts long-term costs and e-waste, aligning with our mission to make tech sustainable. Why discard a perfectly good phone over a $20 battery?</p>
                    </div>
                </div>

                <!-- microSD Card -->
                <div class="feature-wrapper-mobile" id="microSD-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/microSD_card.png" alt="microSD Card" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">microSD Card</div>
                        <div class="toggle-container">
                            <div class="feature-description">Affordable Expansion</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Expand your storage affordably with a <strong>microSD card</strong>—no need to buy a pricier high-storage model. Add up to <strong>512GB</strong> for photos, videos, and apps, keeping your budget intact while future-proofing your device.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Quick & Simple</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Just slide in a microSD card—<strong>no setup, no formatting</strong>. Northlight recognizes it instantly, letting you store files, transfer data, or free up space in seconds. Perfect for tech newcomers or anyone craving hassle-free solutions.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Backup Ready</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Use the microSD slot for <strong>reliable backups</strong> of family photos, work documents, or medical records. Unlike cloud storage (which needs Wi-Fi or subscriptions), your data stays offline, portable, and safe from accidental deletion—peace of mind in your pocket.</p>
                    </div>
                </div>

                <!-- Dual SIM Card -->
                <div class="feature-wrapper-mobile" id="sim-card-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/dualSIM_card.png" alt="SIM card" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Dual Sim Card</div>
                        <div class="toggle-container">
                            <div class="feature-description">Simplified Travel</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Swap to a local SIM card instantly</strong> when traveling abroad—no more exorbitant roaming fees. Keep your home number active for emergencies while using a local plan for data, calls, and maps. Perfect for globetrotters, students abroad, or business trips.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Effortless Switching</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Separate work and personal life</strong> seamlessly with Dual SIM. Assign one slot for client calls and another for family chats—no juggling phones or missing important updates. Ideal for freelancers, entrepreneurs, or anyone craving work-life balance.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Instant Switching</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Toggle between SIMs <strong>in seconds</strong> via software settings—no physical swapping needed. Pause your work line during dinner or activate a travel SIM mid-flight. Stay connected your way, without interruptions or delays.</p>
                    </div>
                </div>

                <!-- Camera -->
                <div class="feature-wrapper-mobile" id="camera-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/camera.png" alt="Camera" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Camera</div>
                        <div class="toggle-container">
                            <div class="feature-description">5MP Rear Camera & 2MP Front Camera</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>5MP rear camera</strong> captures sharp, 5-million-pixel photos—ideal for scanning documents, QR codes, or snapping clear shots of notes at work. The <strong>2MP front camera</strong> handles video calls and quick selfies, ensuring you stay connected with loved ones. Both prioritize practicality over blindly chasing unneeded ultra-high pixels.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Designed for Daily Usage</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s camera focuses on what truly matters: <strong>capturing life’s essentials</strong>. Scan receipts, sharing daily updates, or record your child’s first steps—all without fuss. While 48MP+ cameras excel in professional detail, most users don’t need extreme resolution for sharing moments with friends or preserving life’s simple joys.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Memory Over Megapixels</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The best photos aren’t defined by resolution—they’re defined by moments. A blurry birthday cake or a sunlit family dinner holds more value than technical perfection. Northlight prioritizes <strong>preserving memories</strong>, not chasing specs, because life’s magic lies in the experience, not the pixels.</p>
                    </div>
                </div>

                <!-- Chip -->
                <div class="feature-wrapper-mobile" id="chip-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/chip.png" alt="Chip" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Chip</div>
                        <div class="toggle-container">
                            <div class="feature-description">Mediatek Helio A22 MT6761</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>Quad-Core CPU</strong> (four processing units) clocked at <strong>2.0GHz</strong>, meaning it can handle multiple tasks like messaging, browsing, social media, and streaming efficiently. While not for heavy gaming or 4K editing, it balances smooth performance with energy efficiency—perfect for video calls, music, and apps that keep you connected.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Designed for Daily Usage</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The Helio A22 is designed to handle daily smartphone tasks effortlessly, whether it's browsing the web, scrolling social media, streaming videos, or managing calls and messages, this chip provides a smooth experience. For users who value practicality over specs, this chip <strong>keeps you connected without paying for power you’ll never use</strong>.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Made by MediaTek & TSMC</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>MediaTek</strong>, a global leader in <strong>secure, energy-efficient processors</strong>, partners with <strong>TSMC</strong> (Taiwan Semiconductor Manufacturing Company), the world’s most advanced and reliable semiconductor manufacturer. Together, they ensure every Northlight chip is durable, secure processors, rigorously tested for safety and efficiency. Trusted engineering, without the premium cost.</p>
                    </div>
                </div>

                <!-- 3.5mm -->
                <div class="feature-wrapper-mobile" id="3.5mm-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/headphone_jack.png" alt="3.5mm Headphone Jack" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">3.5mm Headphone Jack</div>
                        <div class="toggle-container">
                            <div class="feature-description">Universal Compatibility</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The 3.5mm headphone jack remains the most widely used <strong>audio standard worldwide</strong>, compatible with millions of wired headphones, earbuds, car aux systems, and speakers. Unlike Bluetooth-only phones, Northlight lets you use any pair—from dollar-store earbuds to premium studio headsets—without dongles, pairing hassles, or brand restrictions.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Charge & Listen</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Keep your phone charging via USB-C while plugging in wired headphones—no more choosing between <strong>music and battery life</strong>. Perfect for long flights, road trips, or bedside Netflix binges where uninterrupted power and sound matter most.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Classic Convenience</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The 3.5mm jack is a timeless, trusted feature. No batteries to charge, no settings to tweak—just plug in and enjoy instant, glitch-free audio. For users who crave <strong>simplicity</strong> (or hate fumbling with Bluetooth), it’s everyday ease, perfected.</p>
                    </div>
                </div>

                <!-- USB-C -->
                <div class="feature-wrapper-mobile" id="usb-c-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/usb_c.png" alt="USB-C" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">USB-C</div>
                        <div class="toggle-container">
                            <div class="feature-description">Universal Simplicity</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C is the <strong>global standard</strong> for modern devices—charge your phone, laptop, tablet, or earbuds with the same cable. No more juggling cords: transfer files, power up, or connect to monitors effortlessly. Simplify your tech life while saving money on extra accessories.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Future-Ready Tech</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C supports faster charging, 4K video output, and high-speed data transfers. <strong>Compatible</strong> with the latest laptops, chargers, and peripherals, it ensures Northlight stays relevant as tech evolves. <strong>No adapter</strong> headaches or outdated ports—just seamless compatibility for years to come.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Simple Connectivity</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C’s reversible design works flawlessly in any orientation—no flipping the plug three times. Whether you’re charging in the dark or rushing out the door, it’s <strong>hassle-free convenience</strong> for all ages. A small detail that makes everyday life smoother.</p>
                    </div>
                </div>

                <!-- Display -->
                <div class="feature-wrapper-mobile" id="display-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="img/phone/display.png" alt="display" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <div class="feature-title">Display</div>
                        <div class="toggle-container">
                            <div class="feature-description">TFT LCD</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>TFT LCD</strong> screens use a backlight to deliver bright, <strong>sunlight-friendly visuals</strong>, ideal for outdoor use. Unlike OLED (where each pixel emits its own light), LCDs prioritize affordability, durability, and no risk of screen burn-in. Perfect for users who value practicality over premium specs.</p>

                        <div class="toggle-container">
                            <div class="feature-description">480x960 Resolution</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">At <strong>197 PPI</strong> (pixels per inch), sharper than most TVs screen, this PPI keeps text sharp for messaging, social media, and casual browsing. While premium phones push 500+ PPI (better for billboard-sized prints), Northlight’s screen matches daily needs—clear photos for social posts, no battery drain from overkill pixel density.</p>

                        <div class="toggle-container">
                            <div class="feature-description">60Hz Refresh Rate</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>60Hz refresh rate</strong> updates the screen 60 times per second, matching most TVs and laptops. It handles scrolling, videos, and light gaming smoothly, while avoiding the battery drain and added cost of 120Hz+ displays. Designed for reliability, not specs you’ll rarely notice.</p>
                    </div>
                </div>
            </div>
            <div class="disclaimer-mobile">*For demonstration purposes only. Actual parts, specifications, and measurements may vary. SIM and microSD cards not included.</div>
        </div>
    </div>

    <div class="container">
        <div class="heading section-padding-sm text-center">Designed for Real Life</div>
        <div class="row bottom-padding-sm gx-lg-5 gy-lg-0 gy-4">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="slider">
                    <img src="img/phone/phone_photo_3.png" alt="" class="rounded-img">
                    <img src="img/phone/phone_photo_4.png" alt="" class="rounded-img">
                    <img src="img/phone/phone_photo_5.png" alt="" class="rounded-img">
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="about-title pb-3">First Phone for Kids & Young Adults</div>
                <p> Northlight is the ideal starter smartphone: affordable, lightweight, and sized for smaller hands. With no complex features or premium price tag, it teaches responsibility without risk—durable enough to survive drops, simple enough for calls and homework apps, and secure for parental peace of mind.</p>
            </div>
        </div>
    </div>

    <?php include './inc/footer.php'; ?>

    <script src="js/northlight.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"><img src="img/phone/icons/icons_slider.svg" alt="Previous"></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="img/phone/icons/icons_slider.svg" alt="Next"></button>',
            });
        });
    </script>
</body>

</html>