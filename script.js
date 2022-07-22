var i = 0;
var images = [
    './images/pexels-pixabay-209841.jpg',
    './images/football.jpg',
    './images/pexels-tom-fisk.jpg'
];
var slideTimer = 15000;
var backimg = document.getElementById('image-background');

function changePicture() {

    backimg.style.background = 'url(' + images[i] + ')';
    backimg.style.width = '100%';
    backimg.style.backgroundSize = 'cover';
    backimg.style.backgroundRepeat = 'no-repeat';
    backimg.style.backgroundPosition = 'center';

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

function openCity(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultTab").click();
