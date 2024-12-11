<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './inc/HTMLhead.php'; ?>
        <style>
            .card {
                margin-bottom: 20px;
            }
            .card-body {
                padding-left: 0;
            }
            .card-title {
                font-size: 24px;
                font-weight: 600;
            }
            .accessory-image-container {
                background-color: #eee;
                width: 100%;
                aspect-ratio: 2/3;
                display: flex;
                justify-content: left;
                align-items: center;
            }
            .accessory-image{
                width: 70%;
            }
            .filter-btn.active {
                text-decoration: underline;
                text-underline-offset: 5px;
            }
        </style>
    </head>
    <body>
        <?php include './inc/header.php'; ?>

        <div class="container">
            <div class="heading-container">
                <div class="heading">Accessories</div>
            </div>

            <div class="accessory-nav">
                <div class="accessory-filter">
                    <div class="filter-btn active ps-0" data-category="all">All Accessories</div>
                    <div class="filter-btn" data-category="power">Power and Charging</div>
                    <div class="filter-btn text-nowrap" data-category="protection">Protection</div>
                    <div class="filter-btn me-0" data-category="storage">Storage</div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-3 accessory" data-category="power">
                    <div class="card">
                        <div class="accessory-image-container">
                            <!-- <img src="img/accessories/battery.jpeg" alt="battery" class="img-fluid accessory-image"> -->
                        </div>
                        <div class="card-body">
                            <div class="card-title">Battery</div>
                            <div class="card-text">Replaceable battery for uninterrupted power, keeping you connected all day.</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 accessory" data-category="power">
                    <div class="card">
                        <div class="accessory-image-container">
                            <!-- <img src="img/accessories/battery.jpeg" alt="battery" class="img-fluid accessory-image"> -->
                        </div>
                        <div class="card-body">
                            <div class="card-title">Battery Charger</div>
                            <div class="card-text">Compact and efficient charger designed specially for Northlight batteries.</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4 col-xl-3 accessory" data-category="power">
                    <div class="card">
                        <div class="accessory-image-container">
                            <!-- <img src="img/accessories/battery.jpeg" alt="battery" class="img-fluid accessory-image"> -->
                        </div>
                        <div class="card-body">
                            <div class="card-title">USB-C Cable</div>
                            <div class="card-text">Fast and reliable charging with a durable USB-C cable built for convenience.</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4 col-xl-3 accessory" data-category="power">
                    <div class="card">
                        <div class="accessory-image-container">
                            <!-- <img src="img/accessories/battery.jpeg" alt="battery" class="img-fluid accessory-image"> -->
                        </div>
                        <div class="card-body">
                            <div class="card-title">Power Adapter</div>
                            <div class="card-text">Compact and efficient adapter to power your devices safely and quickly.</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-4 col-xl-3 accessory" data-category="protection">
                    <div class="card">
                        <div class="accessory-image-container">
                            <!-- <img src="img/accessories/case.jpeg" alt="battery" class="img-fluid accessory-image"> -->
                        </div>
                        <div class="card-body">
                            <div class="card-title">Phone Case</div>
                            <div class="card-text">Durable and stylish protection designed to keep your phone safe from daily wear and tear.</div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 col-xl-3 accessory"  data-category="storage">
                    <div class="card">
                        <div class="accessory-image-container">
                            <!-- <img src="img/accessories/case.jpeg" alt="battery" class="img-fluid accessory-image"> -->
                        </div>
                        <div class="card-body">
                            <div class="card-title">microSD Cards</div>
                            <div class="card-text">Upgrade your phone with reliable microSD cards for extra storage.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        
        <?php include './inc/footer.php'; ?>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const filterButtons = document.querySelectorAll(".filter-btn");
                const cards = document.querySelectorAll(".accessory");

                filterButtons.forEach(button => {
                    button.addEventListener("click", () => {
                        const category = button.getAttribute("data-category");

                        // Remove active class from all buttons
                        filterButtons.forEach(btn => btn.classList.remove("active"));

                        // Add active class to clicked button
                        button.classList.add("active");

                        // Show/hide cards based on category
                        cards.forEach(card => {
                            if (category === "all" || card.getAttribute("data-category") === category) {
                                card.style.display = "block";
                            } else {
                                card.style.display = "none";
                            }
                        });
                    });
                });
            });

        </script>
    </body>
</html>