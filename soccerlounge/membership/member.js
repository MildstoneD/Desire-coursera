var confirms = document.getElementById('cpword');
var pass = document.getElementById('pword');
var form = document.querySelector('form');
var passText = document.getElementById('pass');
var confirmPass = document.getElementById('confirm');

// form validation
form.addEventListener('submit', function checkpass(event) {

    if (confirms.value == pass.value) {
        this.submit;

    } else {
        // event.defaultPrevented();
        confirmPass.innerHTML = 'enter matching passwords!!';
        confirmPass.style.color = 'red';
        confirmPass.style.fontWeight = 'lighter';
        event.preventDefault();

    }
});