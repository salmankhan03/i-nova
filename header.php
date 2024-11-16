<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
        <div class="container">
            <nav class="nav">
                <a class="logo-container" href="index.php">
                    <img src="img/logo/inova_logo_black.svg" alt="logo" class="logo">
                </a>
                <div class="nav-links">
                    <a href="index.php" class="first-nav underline-link">PHONE</a>
                    <a href="support.php" class="first-nav underline-link">SUPPORT</a>
                    <a href="about.php" class="first-nav underline-link">ABOUT</a>
                </div>
            </nav>
        </div>

        <!-- <script>
            //highlight the current page's navigation link
            const currentLocation = window.location.href;
            const menuItem = document.querySelectorAll('.nav-links a');
            const menuLength = menuItem.length;

            for (let i = 0; i < menuLength; i++) {
                if (menuItem[i].href === currentLocation) {
                    menuItem[i].classList.add('active');
                } else {
                    menuItem[i].classList.remove('active');
                }
            }
        </script> -->
    </body>
</html>