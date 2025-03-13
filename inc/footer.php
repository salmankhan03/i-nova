<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .horizontal-line {
                border-top: 1px solid #565656;
                width: 100%;
            }

            #scrollToTopBtn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none;
                background-color: white;
                color: black;
                padding: 10px 18px;
                border: 1px solid #232323;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
                z-index: 1000;
            }

            #scrollToTopBtn:hover {
                color: white;
                background-color: #232323;
                border: 1px solid white;
            }

        </style>
    </head>
    <body>
        <div style="background-color: #232323;">
            <div class="container">
                <nav class="nav" style="height: 80px;">
                    <a class="logo-container" href="index.php">
                        <img src="img/logo/inova_logo_silver.svg" alt="logo" class="logo">
                    </a>
                    <div class="nav-links nav-links-white">
                        <a href="index.php" class="first-nav underline-link">HOME</a>
                        <a href="northlight.php" class="first-nav underline-link">PHONE</a>
                        <!-- <a href="accessories.php" class="first-nav underline-link">ACCESSORIES</a> -->
                        <a href="support.php" class="first-nav underline-link">SUPPORT</a>
                        <a href="about.php" class="first-nav underline-link">ABOUT</a>
                    </div>
                </nav>
                <div class="horizontal-line"></div>
                <div class="copyright">
                    <p class="m-0">Copyright © <strong>INOVA DIGITAL SOLUTIONS INC.</strong> All Rights Reserved</p>
                    <div class="terms">
                        <a href="terms.php">Terms of Use</a>
                        <a href="privacy.php">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>

        <button id="scrollToTopBtn" title="Go to top" class="d-none">
            <i class="fas fa-arrow-up"></i>
        </button>

        <!-- <script>
            // Get the button
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

            // Check if the current page is northlight.php
            if (window.location.pathname.includes('northlight.php')) {
                scrollToTopBtn.style.display = "none";
            } else {
                // Show button when user scrolls down 100px from top
                window.onscroll = function() {
                    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                        scrollToTopBtn.style.display = "block";
                    } else {
                        scrollToTopBtn.style.display = "none";
                    }
                };

                // Scroll to the top of the document when the button is clicked
                scrollToTopBtn.onclick = function() {
                    window.scrollTo({
                        top: 0,
                        behavior: "smooth"
                    });
                };
            }
        </script> -->
        <!-- <script src="js/script.js" defer></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </body>
</html>