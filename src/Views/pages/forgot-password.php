<div class="card login-card" id="forgot-password-card">
    <div class="row g-0">
        <!-- Left Form Panel (Comes first in code) -->
        <div class="col-md-6 form-panel">
            <div class="form-body">
                <h2>FORGOT PASSWORD</h2>
                <form action="/reset-password" method="POST">
                    <!-- New Password Field -->
                    <div class="mb-4">
                        <label for="newPassword" class="form-label">New Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                            <span class="input-group-text"><i class="bi bi-eye"></i></span>
                        </div>
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                            <span class="input-group-text"><i class="bi bi-eye"></i></span>
                        </div>
                    </div>
                    
                    <p class="helper-text">*Please enter your One-Time Password</p>

                    <!-- Confirm Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">CONFIRM</button>
                    </div>

                    <p class="footer-text">
                        &copy; 2025 ELMS. Secure Student Access Portal.
                    </p>
                </form>
            </div>
        </div>
        
        <!-- Right Info Panel -->
        <div class="col-md-6 info-panel">
            <h1>Hello There!</h1>
            <p>Already remember your password?</p>
            <!-- This button will trigger the flip animation back to the login page -->
            <a href="#" class="btn btn-outline-light" id="flip-to-login-btn">SIGN IN</a>
        </div>
    </div>
</div>