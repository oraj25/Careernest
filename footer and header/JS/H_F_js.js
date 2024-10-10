// Shrink the header when scrolling down
window.onscroll = function () {
    shrinkHeader();
};

function shrinkHeader() {
    const header = document.querySelector("header");
    if (window.scrollY > 50) {
        header.style.padding = "8px 20px";
    } else {
        header.style.padding = "15px 20px";
    }
}




