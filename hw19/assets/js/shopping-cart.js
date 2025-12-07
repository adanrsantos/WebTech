var elList = document.getElementById('list');
var count = document.getElementById('counter');
var addBtn = document.getElementById('addToList');
var removeBtn = document.getElementById('removeToList');
var itemIndex = 0;
updateCount();

function addItem() {
    var newEl, newElText;
    var input = document.getElementById('input').value;
    var msg = document.getElementById('message');
    msg.textContent = '';
    if (!input) {
        msg.textContent = 'Please Give Item a Name'
        return;
    }
    itemIndex++;
    newEl = document.createElement('div'); //whatever tag you want to insert
    newElText = document.createTextNode(input);
    newEl.appendChild(newElText);
    newEl.classList.add('alert');
    newEl.classList.add('alert-info');
    newEl.id = itemIndex;

    var removeBtn = document.createElement('button');
    removeBtn.textContent = 'X';
    removeBtn.classList.add('close-btn');
    removeBtn.addEventListener('click', function() {
        elList.removeChild(newEl);
        updateCount();
    }, false)
    newEl.appendChild(removeBtn);

    elList.appendChild(newEl); //add new alert div to parent list
    updateCount();
}

function updateCount() {
    var total = elList.children.length;
    count.textContent = total
    return total
}

addBtn.addEventListener('click', function() {
    addItem();
}, false);