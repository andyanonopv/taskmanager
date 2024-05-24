document.addEventListener('DOMContentLoaded', () => {
    var createButton = document.getElementById('createButton');
    var closeButton = document.querySelector('.closeBtn');
    var modalCreate = document.querySelector('.modalCreate');

    var editBtns = document.querySelectorAll('.editBtn');

    var overlays = document.querySelectorAll('.overlay');
    console.log(overlays);

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

  

    function handleAction() {
        singleButton(createButton, closeButton, modalCreate);
    }

    handleAction();
});
