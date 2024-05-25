document.addEventListener('DOMContentLoaded', () => {
    var createButton = document.getElementById('createButton');
    var closeButton = document.querySelector('.closeBtn');
    var modalCreate = document.querySelector('.modalCreate');

    var editButton = document.querySelectorAll('.editBtn');
    var closeBtns = document.querySelector('.closeEditButton');
    var modalEdit = document.querySelector('.modalEdit');

    var deleteButton = document.querySelectorAll('.removeBtn');;
    var closeRemoveBtn = document.querySelector('.closeRemoveBtn');;
    var modalRemove = document.querySelector('.modalDelete');;

    function singleButton(btn, closeBtn, modal) {
        if (btn) {
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

    function multipleButtons(btns, closeBtns, modal) {
        if (btns) {
            btns.forEach(btn => {
                btn.addEventListener('click', (event) => {
                    modal.classList.add('show');
                    modal.classList.remove('close');
                });
                closeBtns.addEventListener('click', (event) => {
                    modal.classList.add('close');
                    modal.classList.remove('show');
                });                  
            });   
        }
    }

    function handleAction() {
        singleButton(createButton, closeButton, modalCreate);
        multipleButtons(editButton, closeBtns, modalEdit);
        multipleButtons(deleteButton, closeRemoveBtn, modalRemove);
    }

    handleAction();
});
