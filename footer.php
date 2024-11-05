<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'HTMLhead.php'; ?>
        <style>
            .horizontal-line {
                border-top: 1px solid #fff; /* Line thickness and color */
                width: 100%; /* Full width of the container */
                margin: 20px 0; /* Optional vertical spacing */
            }

            #scrollToTopBtn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none; /* Hidden by default */
                background-color: #0c73b2;
                color: white;
                padding: 10px 18px;
                border: none;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
                z-index: 1000;
            }

            #scrollToTopBtn:hover {
                color: #0c73b2;
                background-color: white;
                border: 1px solid #0c73b2;
            }

        </style>
    </head>
    <body>
        <div class="bg-black">
            <div class="container">
                <nav class="nav">
                    <a class="logo" href="index.php">Your Logo</a>
                    <div class="nav-links nav-links-white">
                        <a href="index.php">PHONE</a>
                        <a href="support.php">SUPPORT</a>
                        <a href="about.php">ABOUT</a>
                        <a href="contact.php">CONTACT</a>
                    </div>
                </nav>
                <div class="horizontal-line"></div>
                <p class="text-center text-white bottom-padding m-0">Copyright © <strong>INOVA DIGITAL SOLUTIONS INC.</strong> All Rights Reserved</p>
            </div>
        </div>

        <button id="scrollToTopBtn" title="Go to top">
            <i class="fas fa-arrow-up"></i>
        </button>

        <script>
            // Get the button
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

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

        </script>
    </body>
</html>