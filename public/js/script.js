document.getElementById("menu-toggle").addEventListener("click", function () {
    var menu = document.getElementById("navbar-mobile");
    if (menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
});

function changeText(element, text) {
    element.innerText = text;
}

function scrollToTopFunction() {
    document.getElementById("top").scrollIntoView({ behavior: "smooth" });
}

// Example of showing the button when scrolling down (optional)
window.onscroll = function () {
    var scrollToTopButton = document.getElementById("scrollToTop");
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
};

document.addEventListener("DOMContentLoaded", function () {
    const carouselContainer = document.querySelector(
        "#carousel .carousel-wrapper"
    );
    const carouselItems = document.querySelectorAll("#carousel .carousel-item");
    const prevButton = document.querySelector("[data-carousel-prev]");
    const nextButton = document.querySelector("[data-carousel-next]");
    let currentIndex = 0;

    function showItem(index) {
        const totalItems = carouselItems.length;
        if (index < 0) index = totalItems - 1;
        if (index >= totalItems) index = 0;
        carouselContainer.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;
    }

    prevButton.addEventListener("click", function () {
        showItem(currentIndex - 1);
    });

    nextButton.addEventListener("click", function () {
        showItem(currentIndex + 1);
    });
});

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
