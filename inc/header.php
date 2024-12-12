<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .desktop-nav {
                display: none;
            }
            @media screen and (min-width: 600px) {
                .desktop-nav {
                    display: block;
                }
                .mobile-nav {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="container desktop-nav">
            <nav class="nav">
                <a class="logo-container" href="index.php">
                    <img src="img/logo/inova_logo_black.svg" alt="logo" class="logo">
                </a>

                <div class="nav-links">
                    <!-- <div class="sub"> -->
                        <a href="northlight.php" class="first-nav underline-link">PHONE</a>
                        <!-- <div class="sub-menu">
                            <a href="index.php" class="sub-item">Northlight</a>
                            <div class="sub-item" style="cursor: not-allowed;">Northlight 5G <br>(Coming Soon)</div>
                        </div> -->
                    <!-- </div> -->
                    <a href="accessories.php" class="first-nav underline-link">ACCESSORIES</a>
                    <a href="support.php" class="first-nav underline-link">SUPPORT</a>
                    <a href="about.php" class="first-nav underline-link">ABOUT</a>
                </div>
            </nav>
        </div>

        <div class="mobile-nav">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container-fluid">
                    <a class="logo-container" href="index.php">
                        <img src="img/logo/inova_logo_black.svg" alt="logo" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="northlight.php">PHONE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="accessories.php">ACCESSORIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="support.php">SUPPORT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">ABOUT</a>
                            </li>
                        </ul>
                    </div>
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