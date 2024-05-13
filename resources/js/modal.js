var createButton = document.getElementById('createButton');
var closeButton = document.querySelector('.closeBtn');

var deleteButtons = document.querySelectorAll('.removeBtn');
var closeDeleteButtons = document.querySelectorAll('.closeRemoveBtn');

var editButtons = document.querySelectorAll('.editBtn');
var closeEditButtons = document.querySelectorAll('.closeEditButton');

var modalCreate = document.querySelector('.modalCreate');
var modalEdit = document.querySelector('.modalEdit');
var modalDelete = document.querySelector('.modalDelete');

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

function multipleButtons(btn, closeBtn, modal) {
    if(btn) {
        btn.forEach((btns, index) => {
            btns.addEventListener('click', (event) => {
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
    singleButton(createButton, closeButton, modalCreate);

    multipleButtons(editButtons, closeEditButtons, modalEdit);

    multipleButtons(deleteButtons, closeDeleteButtons, modalDelete);
}

// $('#createForm').submit(function(e) {
//     e.preventDefault();

//     // Serialize the form data
//    const formData = new FormData(form);
//     // Send an AJAX request
//     $.ajax({
//         type: 'POST',
//         url: '{!! route("tasks.store") !!}',
//         data: formData,
//         dataType: 'json',
//         processData: false,  
//         contentType: false, 
//         success: function(response) {
//             // Handle the response message
//             $('#cf-response-message').text(response.message);
//         },
//         error: function(xhr, status, error) {
//             // Handle errors if needed
//             console.error(xhr.responseText);
//         }
//     });
// });

handleAction();
