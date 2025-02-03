//Show features on click
document.addEventListener('DOMContentLoaded', () => {
    const circles = document.querySelectorAll('.circle-inner');
    const defaultImage = document.getElementById('battery');
    const hoverContent = document.querySelectorAll('.content');

    let currentTarget = null;

    // Function to show the targeted content and hide others
    function showContent(targetId) {
        // Hide all hover content
        hoverContent.forEach(content => {
            content.style.display = 'none';
            content.classList.remove('show');
        });

        if (targetId) {
            // Show the specific target content
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.style.display = 'block';
                setTimeout(() => targetElement.classList.add('show'), 10);
            }

            // Update the current visible target
            currentTarget = targetId;
        } else {
            // No target clicked: show default image and hide everything else
            defaultImage.style.display = 'block';
            defaultImage.classList.add('show');
            currentTarget = null;
        }
    }

    // Add event listeners to circles
    circles.forEach(circle => {
        const targetId = circle.getAttribute('data-target');

        // On click, show the corresponding content
        circle.addEventListener('click', () => {
            showContent(targetId);
        });
    });

    // Set default state on page load
    showContent(null);
});



//show navbar on scroll
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById("phone-nav-container");
    const posterImage = document.getElementById('posterImage');
    let imageHeight = 0;

    // Function to update the image height
    function updateImageHeight() {
        imageHeight = posterImage.offsetHeight;
    }

    // Ensure the image is fully loaded before getting its height
    posterImage.onload = updateImageHeight;

    // Fallback in case the image is cached and already loaded
    if (posterImage.complete) {
        updateImageHeight();
    }

    // Function to handle scroll logic
    function handleScroll() {
        const scrollPosition = window.scrollY || window.pageYOffset;

        if (scrollPosition > imageHeight) {
            navbar.classList.remove("hidden");
            navbar.classList.add("visible");
        } else {
            navbar.classList.remove("visible");
            navbar.classList.add("hidden");
        }
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);

    // Add resize event listener to recalculate image height and re-run scroll logic
    window.addEventListener('resize', () => {
        updateImageHeight(); // Recalculate image height
        handleScroll(); // Re-run scroll logic
    });
});



//Zoom in circles on hover
// document.addEventListener('DOMContentLoaded', () => {
//     const circles = document.querySelectorAll('.circle');

//     circles.forEach(circle => {
//         const innerCircleId = circle.getAttribute('data-inner');
//         const innerCircle = document.getElementById(innerCircleId);

//         circle.addEventListener('mouseover', () => {
//             if (innerCircle) {
//                 innerCircle.setAttribute('r', parseFloat(innerCircle.getAttribute('r')) / 0.75);
//             }
//         });

//         circle.addEventListener('mouseout', () => {
//             if (innerCircle) {
//                 innerCircle.setAttribute('r', parseFloat(innerCircle.getAttribute('r')) * 0.75);
//             }
//         });
//     });
// });



// Function to resize all feature-wrapper-mobile elements to match image-wrapper-mobile
function resizeFeatureWrappers() {
    const imageWrapper = document.querySelector('.image-wrapper-mobile');
    const featureWrappers = document.querySelectorAll('.feature-wrapper-mobile');

    if (imageWrapper && featureWrappers.length > 0) {
        // Get the width and height of the image-wrapper-mobile
        const width = imageWrapper.offsetWidth;
        const height = imageWrapper.offsetHeight;

        // Loop through all feature-wrapper-mobile elements
        featureWrappers.forEach(featureWrapper => {
            featureWrapper.style.width = `${width}px`;
            featureWrapper.style.height = `${height}px`;
        });
    }
}

window.addEventListener('load', resizeFeatureWrappers);
window.addEventListener('resize', resizeFeatureWrappers);



//Show and close feature-wrapper-mobile on click
document.addEventListener('DOMContentLoaded', function() {
    const hoverCircles = document.querySelectorAll('.circle-inner');
    hoverCircles.forEach(circle => {
        circle.addEventListener('click', function() {
            const targetId = circle.getAttribute('data-target');
            const featureWrapper = document.getElementById(targetId);
            if (featureWrapper) {
                featureWrapper.style.display = 'block';
            }
        });
    });

    const closeButtons = document.querySelectorAll('.xmark');
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const featureWrapper = button.closest('.feature-wrapper-mobile');
            if (featureWrapper) {
                featureWrapper.style.display = 'none';
            }
        });
    });
});