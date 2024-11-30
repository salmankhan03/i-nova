// feature-background scroll in when it's in the viewport
function featureBackgroundAnimation() {
    const banners = document.querySelectorAll(".feature-background");
    
    banners.forEach(banner => {
        const rect = banner.getBoundingClientRect();
        
        // Check if the banner is within the viewport
        if (rect.top < window.innerHeight - 200 && rect.bottom >= 0) {
            banner.classList.add("visible");
        } 
        // else {
        //     banner.classList.remove("visible");
        // }
    });
}

// On scroll event, check if the banners are in the viewport
document.addEventListener("scroll", featureBackgroundAnimation);

// On page load or refresh, check the banners visibility as well
document.addEventListener("DOMContentLoaded", featureBackgroundAnimation);