// Wait for the document to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Confirmation pop-up for "Read More" links
    const readMoreLinks = document.querySelectorAll('.read-more');
    readMoreLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const confirmNavigation = confirm("Are you sure you want to read more on this topic?");
            if (!confirmNavigation) {
                e.preventDefault(); // Prevents the link from opening if user clicks "Cancel"
            }
        });
    });

    // Display a welcome pop-up when the page loads
    alert("Welcome to CareerNest's News Page! Stay updated with the latest news.");
});
