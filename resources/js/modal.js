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

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// $("#createForm").validate({

//     submitHandler: function() {

//         var name = $("#name").val();
//         var description = $("#description").val();
//         var priority = $("#priority").val();

//         // processing ajax request    
//         $.ajax({
//             url: "{{ route('taskSubmit') }}",
//             type: 'POST',
//             dataType: "json",
//             data: {
//                 name: name,
//                 description: description,
//                 priority: priority
//             },
//             success: function(data) {
//                 // log response into console
//                 console.log(data);
//             }
//         });
//     }
// });

handleAction();
