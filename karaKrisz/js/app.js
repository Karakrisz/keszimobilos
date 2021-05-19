/******************** shop start **********************/

if (window.location.href.search('shop') == 33 || window.location.href.search('shop') == 27) {
    //elementHide();
}

function elementHide() {

    let header = document.getElementsByClassName("top-header");
    let navbar = document.getElementsByClassName("navbar");

    for (let i = 0; i < header.length; i++) {
        header[i].style.display = "none";
    }

    for (let i = 0; i < navbar.length; i++) {
        navbar[i].style.display = "none";
    }

}


let slideIndex = 1;
showSlides(slideIndex);

function nextSlide() {
    showSlides(slideIndex += 1);
}

function previousSlide() {
    showSlides(slideIndex -= 1);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("item");

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }

    for (let slide of slides) {
        slide.style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}