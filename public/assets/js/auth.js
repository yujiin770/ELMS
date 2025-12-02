document.addEventListener('DOMContentLoaded', function() {
    const authCard = document.getElementById('auth-card');
    const swapToForgotBtn = document.getElementById('swap-to-forgot-btn');
    const swapToLoginBtn = document.getElementById('swap-to-login-btn');
    const nextStepButtons = document.querySelectorAll('.next-step-btn');
    const contentPanes = document.querySelectorAll('.auth-content');

    // Defines the speed of the content fade, should be less than the CSS slide speed
    const FADE_SPEED_MS = 300;

    /**
      @param {string} targetId - The ID of the main content to FADE IN.
      @param {string} relatedTargetId - The ID of the content in the other panel to FADE IN.
     **/
    
    function switchContent(targetId, relatedTargetId) {
        // Fade out all currently visible panes
        contentPanes.forEach(pane => {
            pane.classList.remove('content-visible');
        });

        setTimeout(() => {
            const targetPane = document.getElementById(targetId);
            if(targetPane) targetPane.classList.add('content-visible');
            
            const relatedPane = document.getElementById(relatedTargetId);
            if(relatedPane) relatedPane.classList.add('content-visible');
        }, FADE_SPEED_MS);
    }

    swapToForgotBtn.addEventListener('click', function(e) {
        e.preventDefault();
        authCard.classList.add('is-swapped'); 
        switchContent('forgot-step1-content', 'forgot-info'); 
    });

    // Go back to "Login" view
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
    document.getElementById('login-content').classList.add('content-visible');
    document.getElementById('login-info').classList.add('content-visible');
});