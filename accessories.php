<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './inc/HTMLhead.php'; ?>
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
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="accessory-card">
                        <img src="img/accessories/battery.jpeg" alt="battery" class="img-fluid">
                        <div class="card-body">
                            <div class="card-title">Battery</div>
                            <div class="card-text">The battery is the heart of the phone. Without it, the phone cannot function.</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        
        <?php //include './inc/footer.php'; ?>

    </body>
</html>