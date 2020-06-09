$(document).ready(function () {
    $('.carousel__inner').slick({
        speed: 500,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false
    });
});

// Get the modal
var modal = document.getElementById('modal');

// Get the button that opens the modal
var btn = document.getElementById("card-page__link");

// Get the <span> element that closes the modal
var close = document.getElementsByClassName("modal-order__close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



