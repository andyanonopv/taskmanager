var createButton = document.getElementById('createButton');
var closeButton = document.querySelector('.closeBtn');

var deleteButtons = document.querySelectorAll('.removeBtn');
var closeDeleteButtons = document.querySelectorAll('.closeRemoveBtn');

var editButtons = document.querySelectorAll('.editBtn');
var closeEditButtons = document.querySelectorAll('.closeEditButton');

// var modalCreate = document.querySelector('.modalCreate');
// var modalEdit = document.querySelector('.modalEdit');
// var modalDelete = document.querySelector('.modalDelete');

var createForm = document.getElementById('createForm');
var editForm = document.getElementById('editForm');
var deleteForm = document.getElementById('deleteForm');

function singleButton(btn, closeBtn, modal) {
    if(btn) {
            btn.addEventListener('click', (event) => {
                modal.classList.add('show');
                modal.classList.remove('close');
            });
            closeBtn.addEventListener('click', (event) => {
                modal.classList.add('close');
                modal.classList.remove('show');
            });
    }
}

function multipleButtons(btn, closeBtn) {
    if(btn) {
        btn.forEach((btns, index) => {
            btns.addEventListener('click', (event) => {
                let modalId = btn.getAttribute('data-modal-id');
                let modal = document.getElementById(modalId);
                console.log(modal);
                modal.classList.add('show');
                modal.classList.remove('close');
            });
        
            closeBtn[index].addEventListener('click', (event) => {
                modal.classList.add('close');
                modal.classList.remove('show');
            });
        });
    }
}

function handleAction() {
    singleButton(createButton, closeButton);

    multipleButtons(editButtons, closeEditButtons);

    multipleButtons(deleteButtons, closeDeleteButtons);
}

handleAction();