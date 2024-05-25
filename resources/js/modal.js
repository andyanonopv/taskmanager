document.addEventListener('DOMContentLoaded', () => {
    // Function to handle single button and modal pair
    function handleSingleButton(button, closeButton, modal) {
        button.addEventListener('click', () => {
            modal.classList.add('show');
            modal.classList.remove('close');
        });
        closeButton.addEventListener('click', () => {
            modal.classList.add('close');
            modal.classList.remove('show');
        });
    }

    // Function to handle multiple buttons and corresponding modals
    function handleMultipleButtons(buttons, closeButtons, modals) {
        buttons.forEach((button, index) => {
            let modal = modals[index];
            let closeButton = closeButtons[index];
            handleSingleButton(button, closeButton, modal);
        });
    }

    // Elements for create modal
    const createButton = document.getElementById('createButton');
    const closeButton = document.querySelector('.closeBtn');
    const modalCreate = document.querySelector('.modalCreate');

    if (createButton && closeButton && modalCreate) {
        handleSingleButton(createButton, closeButton, modalCreate);
    }

    // Elements for edit modals
    const editButtons = document.querySelectorAll('.editBtn');
    const closeEditButtons = document.querySelectorAll('.closeEditButton');
    const editModals = document.querySelectorAll('.modalEdit');

    if (editButtons.length > 0 && closeEditButtons.length > 0 && editModals.length > 0) {
        handleMultipleButtons(editButtons, closeEditButtons, editModals);
    }

    // Elements for delete modals
    const deleteButtons = document.querySelectorAll('.removeBtn');
    const closeDeleteButtons = document.querySelectorAll('.closeRemoveBtn');
    const deleteModals = document.querySelectorAll('.modalDelete');

    if (deleteButtons.length > 0 && closeDeleteButtons.length > 0 && deleteModals.length > 0) {
        handleMultipleButtons(deleteButtons, closeDeleteButtons, deleteModals);
    }
});
