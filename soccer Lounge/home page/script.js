var i = 0;
var images = ['./images/pexels-pixabay-209841.jpg',
    './images/pexels-gonzalo-acuña-10923063.jpg',
    './images/pexels-tom-fisk-large.jpg'
];
var slideTimer = 15000;

function changePicture() {
    document.getElementById('navmain').style.background = 'url(' + images[i] + ')';

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(changePicture, slideTimer);

}

window.onload = changePicture;
