var elUserMsg = document.getElementById('feedback-username');
var elPwdMsg = document.getElementById('feedback-password');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elunGroupUser = document.getElementById('unGroup-username');
var elunGroupPwd = document.getElementById('unGroup-password');

function checkInput(minLength, input, type, elMsg, elunGroup) {
    elunGroup.classList.remove('has-default');
    if (input.value.length < minLength) {
        elMsg.innerHTML = type + ' must be ' + minLength + ' characters or more';
        elunGroup.classList.remove('has-success');
        elunGroup.classList.add('has-error');
    }
    else {
        elMsg.innerHTML = '';
        elunGroup.classList.remove('has-error');
        elunGroup.classList.add('has-success');
    }
}

elUsername.addEventListener('blur', function() {
    checkInput(5, elUsername, 'Username', elUserMsg, elunGroupUser);
}, false);
elPassword.addEventListener('blur', function() {
    checkInput(8, elPassword, 'Password', elPwdMsg, elunGroupPwd);
}, false)