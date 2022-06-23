var i = 0;
var images = ['./images/pexels-1200.jpg',
    './images/pexels-gonzalo-acuña-10923063.jpg',
    './images/pexels-tom-1200.jpg'
];
var slideTimer = 5000;

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