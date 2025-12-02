document.addEventListener('DOMContentLoaded', function() {
    const authCard = document.getElementById('auth-card');
    const swapToForgotBtn = document.getElementById('swap-to-forgot-btn');
    const swapToLoginBtn = document.getElementById('swap-to-login-btn');
    const nextStepButtons = document.querySelectorAll('.next-step-btn');
    const contentPanes = document.querySelectorAll('.auth-content');

    function switchContent(targetId, relatedTargetId) {
        contentPanes.forEach(pane => {
            pane.classList.remove('content-visible');
        });
        const targetPane = document.getElementById(targetId);
        if(targetPane) targetPane.classList.add('content-visible');
        if(relatedTargetId) {
            const relatedPane = document.getElementById(relatedTargetId);
            if(relatedPane) relatedPane.classList.add('content-visible');
        }
    }

    swapToForgotBtn.addEventListener('click', function(e) {
        e.preventDefault();
        authCard.classList.add('is-swapped');
        switchContent('forgot-step1-content', 'forgot-info');
    });

    swapToLoginBtn.addEventListener('click', function(e) {
        e.preventDefault();
        authCard.classList.remove('is-swapped');
        switchContent('login-content', 'login-info');
    });

    nextStepButtons.forEach(button => {
        button.addEventListener('click', function() {
            const nextStepId = this.dataset.next;
            switchContent(nextStepId, 'forgot-info');
        });
    });

    // Initialize the page with the login form visible
    switchContent('login-content', 'login-info');
});