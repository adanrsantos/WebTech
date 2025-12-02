var fn = document.getElementById('firstName');
var ln = document.getElementById('lastName');
var email = document.getElementById('email');
var user = document.getElementById('username');
var pwd = document.getElementById('password');
var comment = document.getElementById('comment');

var nameRegex = /^[A-Za-z'-]{2,}$/
var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
var phoneRegex = /^[0-9]{10}$/
var usernameRegex = /^.{6,}$/
var passwordRegex = /^.{6,}$/
var commentRegex = /^.+$/

var fnMsg = 'Invalid First Name can only contain alphabet characters (no numbers) with a minimum of 2 characters, hyphens, and apostrophes, cannot be NULL';
var lnMsg = 'Invalid Last Name can only contain alphabet characters (no numbers) with a minimum of 2 characters, hyphens, and apostrophes, cannot be NULL';
var emailMsg = 'Invalid Email can only follow a valid email format (example@example.com)';
var phoneMsg = 'Invalid Phone Number can only contain numbers, including area code exactly 10 digits, cannot be NULL, cannot contain hyphens nor parenthesis';
var userMsg = 'Invalid Username must have a minimum of 6 characters, cannot be NULL';
var pwdMsg = 'Invalid Password must have a minimum of 6 characters, cannot be NULL';
var commentMsg = 'Invalid Comment can only contain any character, cannot be NULL';

function checkInput(regex, input, msgContent, group, msg) {
    elGroup = document.getElementById(group)
    elMsg = document.getElementById(msg);
    if (regex && !regex.test(input.value)) {
        elMsg.innerHTML = msgContent;
        elGroup.classList.remove('has-success');
        elGroup.classList.add('has-error');
    }
    else {
        elMsg.innerHTML = '';
        elGroup.classList.remove('has-error');
        elGroup.classList.add('has-success');
    }
}

fn.addEventListener('blur', function() {
    checkInput(nameRegex, fn, fnMsg, 'fnGroup', 'fnFeedBack');
}, false);
ln.addEventListener('blur', function() {
    checkInput(nameRegex, ln, lnMsg, 'lnGroup', 'lnFeedBack');
}, false);
email.addEventListener('blur', function() {
    checkInput(validRegex, email, emailMsg, 'emailGroup', 'emailFeedBack');
}, false);
phone.addEventListener('blur', function() {
    checkInput(phoneRegex, phone, phoneMsg, 'phoneGroup', 'phoneFeedBack');
}, false);
user.addEventListener('blur', function() {
    checkInput(usernameRegex, user, userMsg, 'usernameGroup', 'usernameFeedBack');
}, false);
pwd.addEventListener('blur', function() {
    checkInput(passwordRegex, pwd, pwdMsg, 'pwdGroup', 'pwdFeedBack');
}, false);
comment.addEventListener('blur', function() {
    checkInput(commentRegex, comment, commentMsg, 'commentGroup', 'commentFeedBack');
}, false);