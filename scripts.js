document.addEventListener('DOMContentLoaded', () => {
    const bookNowButtons = document.querySelectorAll('.book-now');
    const modal = document.getElementById('booking-form-modal');
    const closeButton = document.querySelector('.close-button');

    bookNowButtons.forEach(button => {
        button.addEventListener('click', () => {
            modal.style.display = 'flex';
        });
    });

    closeButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});
