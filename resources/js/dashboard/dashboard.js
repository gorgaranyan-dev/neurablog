document.addEventListener('DOMContentLoaded', () => {
    const formPages = document.querySelectorAll('.form-page');
    const backButton = document.querySelector('#back');
    const nextButton = document.querySelector('#next');
    const progressBarFill = document.querySelector('.progress-bar-fill');
    const form = document.querySelector('form.login-form');
    let currentPage = 1;

    updatePage();

    nextButton.addEventListener('click', () => {
        if (currentPage < formPages.length) {
            currentPage++;
            updatePage();
        } else if (currentPage === formPages.length) {
            // Submit the form normally on last step
            form.submit();
        }
    });

    backButton.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            updatePage();
        }
    });

    function updatePage() {
        formPages.forEach(page => {
            const isActive = page.dataset.page == currentPage;
            page.classList.toggle('active', isActive);
            page.classList.toggle('d-none', !isActive);
        });

        const progress = ((currentPage - 1) / (formPages.length - 1)) * 100;
        progressBarFill.style.width = `${progress}%`;

        backButton.classList.toggle('button-disabled', currentPage === 1);

        if (currentPage === formPages.length) {
            nextButton.textContent = 'Start Installation';
        } else {
            nextButton.textContent = 'Next';
        }
        nextButton.classList.toggle('button-disabled', false);

        document.querySelectorAll('.progress-steps .step').forEach((step, index) => {
            const stepNumber = index + 1;
            step.classList.toggle('active', stepNumber <= currentPage);
        });
    }
});