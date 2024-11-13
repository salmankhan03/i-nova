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


document.querySelectorAll('.question-wrap').forEach(question => {
    question.addEventListener('click', function () {
        const answer = this.nextElementSibling;
        const icon = this.querySelector('.faq-icon');
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        icon.classList.toggle('open');
    });
});

// JavaScript to add 'visible' class when the element is in the viewport
document.addEventListener("scroll", function() {
    // Get all elements with class 'banner-container'
    const banners = document.querySelectorAll(".details-image");
    
    banners.forEach(banner => {
        const rect = banner.getBoundingClientRect();
        
        // Check if the banner is within the viewport
        if (rect.top < window.innerHeight && rect.bottom >= 0) {
            banner.classList.add("visible");
        }
    });
});
