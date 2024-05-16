document.querySelectorAll('.truncate-js').forEach(function (element) {
    
    if (element.scrollWidth > element.clientWidth) {
        // element.textContent = element.textContent.slice(0, -60) + '...';
    }
});