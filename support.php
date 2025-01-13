<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './inc/HTMLhead.php'; ?>
        <style>
            .card {
                background-color: #f7f7f7;
            }

            .card-body {
                padding: 30px;
            }

            .support-icon {
                width: 70px;
            }

            .card-title {
                padding: 15px 0 0 0;
                font-size: calc(1.3rem + .6vw);
            }
        </style>
    </head>
    <body>
        <?php include './inc/header.php'; ?>

        <div class="container">
            <div class="section-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 mx-auto">
                        <div class="text-center">
                            <div class="heading pb-4">How Can We Help You?</div>
                            <p class="mb-0">At INOVA, your satisfaction is our priority. Whether you need technical assistance, warranty details, or personalized support, we’re here to ensure you stay connected effortlessly.</p>
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
                                <p class="card-text">Need assistance with your INOVA device? From troubleshooting to user guides, we’re here to keep your experience smooth and hassle-free.</p>
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
                            <div class="heading pb-4">Frequently Asked Questions</div>
                            <p class="mb-0">Find quick answers to common questions about our products and services. We're committed to providing clear, helpful information to make your experience with INOVA seamless and enjoyable.</p>
                        </div>
                    </div>
                </div>
            
                <div class="row pt-3">
                    <div class="col-xl-7 col-lg-7 col-md-9 col-sm-12 mx-auto">
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

        <script>
            // Category Filter
            // Get all filter buttons, FAQ items, and toggle answer buttons
            const filterButtons = document.querySelectorAll('.filter-btn');
            const faqItems = document.querySelectorAll('.faq-item');

            // Add event listener to each filter button
            filterButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    // Remove the 'active' class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add the 'active' class to the clicked button
                    e.target.classList.add('active');
                    
                    const category = e.target.getAttribute('data-category');
                    
                    // Show/hide FAQ items based on category
                    faqItems.forEach(item => {
                        if (category === 'all' || item.getAttribute('data-category') === category) {
                            item.style.display = 'block'; // Show item
                        } else {
                            item.style.display = 'none'; // Hide item
                        }
                    });
                });
            });

            // Toggle Answers
            document.querySelectorAll('.question-wrap').forEach(question => {
                question.addEventListener('click', function () {
                    const answer = this.nextElementSibling;
                    const icon = this.querySelector('.faq-icon');
                    answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
                    icon.classList.toggle('open');
                });
            });
        </script>
    </body>
</html>