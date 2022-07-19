var i = 0;
var images = [
    './images/pexels-pixabay-209841.jpg',
    './images/football.jpg',
    './images/pexels-tom-fisk.jpg'
];
var slideTimer = 15000;

function changePicture() {
    document.getElementById('image-background').style.background =
        'url(' + images[i] + ')';

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(changePicture, slideTimer);

}

window.onload = changePicture;

var hamburg = document.getElementById('ham');
var mainNav = document.getElementById('links-nav');

hamburg.addEventListener('click', function() {
    if (mainNav.style.display === 'none') {
        mainNav.style.display = 'block';
    } else {
        mainNav.style.display = 'none';
    }
});