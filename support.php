<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './inc/HTMLhead.php'; ?>
    </head>
    <body>
        <?php include './inc/header.php'; ?>

        <div class="container">
            <div class="section-padding">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 mx-auto">
                        <div class="text-center">
                            <div class="heading pb-4">How Can We Help You?</div>
                            <p class="mb-0">At iNova, your satisfaction is our priority. Whether you need technical assistance, warranty details, or personalized support, we’re here to ensure you stay connected effortlessly.</p>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-12 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <img src="img/support/icons/icons_sales.svg" alt="sales" class="support-icon">
                                <div class="card-title">Sales & enquiries</div>
                                <p class="card-text">Have questions about our products or services? Our team is ready to assist you with information, pricing, and availability to help you make the right choice.</p>
                                <div class="mt-auto"><a href="mailto: sales@techvrx.com">sales@techvrx.com <i class="fa-solid fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <img src="img/support/icons/icons_support.svg" alt="support" class="support-icon">
                                <div class="card-title">Help & Support</div>
                                <p class="card-text">Need assistance with your iNova device? From troubleshooting to user guides, we’re here to keep your experience smooth and hassle-free.</p>
                                <div class="mt-auto"><a href="mailto: support@techvrx.com">support@techvrx.com <i class="fa-solid fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <img src="img/support/icons/icons_warranty.svg" alt="warranty" class="support-icon">
                                <div class="card-title">Register Warranty</div>
                                <p class="card-text">During the warranty period, we will either repair or replace, at its discretion, any defective product at no charge to the owner.</p><br>
                                <div class="mt-auto"><a href="register.php">Register Device <i class="fa-solid fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="black-background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 mx-auto">
                        <div class="text-center">
                            <div class="heading pb-4">Frequently asked questions</div>
                            <p class="mb-0">Find quick answers to common questions about our products and services. We're committed to providing clear, helpful information to make your experience with iNova seamless and enjoyable.</p>
                        </div>
                    </div>
                </div>
            
                <div class="row pt-3">
                    <div class="col-xl-7 col-lg-8 col-md-10 col-sm-12 mx-auto">
                        <!-- Filter Bar -->
                        <div class="faq-filter">
                            <div class="filter-btn active" data-category="all">All</div>
                            <div class="filter-btn" data-category="products">Products</div>
                            <div class="filter-btn text-nowrap" data-category="order">Order & Shipping</div>
                            <div class="filter-btn me-0" data-category="support">Support</div>
                        </div>
                        <!-- FAQ Questions -->
                        <div class="faq-questions text-start">
                            <div>
                                <div class="faq-item" data-category="products">
                                    <div class="question-wrap">
                                        <span class="fa-solid fa-angle-right faq-icon"></span>
                                        <div class="question">What is the warranty for the products?</div>
                                    </div>
                                    <p class="answer">The warranty lasts for 1 year.</p>
                                </div>
                                <div class="faq-item" data-category="products">
                                    <div class="question-wrap">
                                        <span class="fa-solid fa-angle-right faq-icon"></span>
                                        <div class="question">How do I return a product?</div>
                                    </div>
                                    <p class="answer">Visit our returns page to start a return request.</p>
                                </div>
                                <div class="faq-item" data-category="order">
                                    <div class="question-wrap">
                                        <span class="fa-solid fa-angle-right faq-icon"></span>
                                        <div class="question">How do I track my shipment?</div>
                                    </div>
                                    <p class="answer">You can track your shipment using the tracking number provided in the confirmation email.</p>
                                </div>
                                <div class="faq-item" data-category="order">
                                    <div class="question-wrap">
                                        <span class="fa-solid fa-angle-right faq-icon"></span>
                                        <div class="question">What are the shipping costs?</div>
                                    </div>
                                    <p class="answer">Shipping costs depend on your location and the size of the order.</p>
                                </div>
                                <div class="faq-item" data-category="support">
                                    <div class="question-wrap">
                                        <span class="fa-solid fa-angle-right faq-icon"></span>
                                        <div class="question">How do I contact customer support?</div>
                                    </div>
                                    <p class="answer">You can reach customer support via email or phone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 200px;"></div>
            </div>
        </div>
        
        <?php include './inc/footer.php'; ?>
    </body>
</html>