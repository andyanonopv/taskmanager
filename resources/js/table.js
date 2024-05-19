document.addEventListener('DOMContentLoaded', () => {
    const table = document.querySelector('table');
    const tableContainer = table.parentElement;

    function adjustTableWidth() {
        if (window.innerWidth < 768) {
            table.style.width = '100%';
        } else {
            table.style.width = 'auto';
        }
    }

    adjustTableWidth();
    window.addEventListener('resize', adjustTableWidth);
});