const gridItems = document.querySelectorAll('.grid-element');

gridItems.forEach(item => {
    item.addEventListener('click', () => {
        const details = item.querySelector('.content-details');
        details.style.display = details.style.display === 'block' ? 'none' : 'block';
        element.classList.toggle('expanded');
    });
});