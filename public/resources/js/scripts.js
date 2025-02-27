// scripts.js

// Get the navigation links
const navigationLinks = document.querySelectorAll("[data-route]");

// Add an event listener to each navigation link
navigationLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        const route = link.getAttribute("data-route");

        // Redirect to the stored URL if available, otherwise, use the link's route
        const redirectUrl = sessionStorage.getItem('redirect_url') || route;
        window.location.href = redirectUrl;
    });
});