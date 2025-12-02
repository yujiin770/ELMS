<div class="login-card" id="auth-card">
    <div class="row g-0">
        <!-- INFO PANEL (ON THE LEFT) -->
        <div class="col-md-6 info-panel">
            <!-- Login Info -->
            <div id="login-info" class="auth-content">
                <div class="school-branding">
                    <img src="<?php echo BASE_URL; ?>assets/images/dcsa-logo2.png" alt="School Logo" class="school-logo">
                    <h4 class="school-name">Datamex College of Saint Adeline</h4>
                </div>

                <h1>Hello There!</h1>
                <p>Did you forgot your password?</p>
                <a href="#" class="btn btn-outline-light" id="swap-to-forgot-btn">Forgot Password</a>
            </div>

            

            <!-- Forgot Password Info (This is shown for all forgot password) -->
            <div id="forgot-info" class="auth-content">
               <div class="school-branding">
                    <img src="<?php echo BASE_URL; ?>assets/images/dcsa-logo2.png" alt="School Logo" class="school-logo">
                    <h4 class="school-name">Datamex College of Saint Adeline</h4>
                </div>

                <h1>Hello There!</h1>
                <p>Already remember your password?</p>
                <a href="#" class="btn btn-outline-light" id="swap-to-login-btn">SIGN IN</a>
            </div>
        </div>

        <!-- FORM PANEL (ON THE RIGHT) -->
        <div class="col-md-6 form-panel">
            <!-- Login Form -->
            <div id="login-content" class="auth-content">
                <h2>SIGN IN</h2>
                <form>
                    <div class="mb-4">
                        <label class="form-label">User ID</label>
                        <div class="input-group"><input type="text" class="form-control"><span class="input-group-text"><i class="bi bi-person"></i></span></div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <div class="input-group"><input type="password" class="form-control"><span class="input-group-text"><i class="bi bi-eye"></i></span></div>
                    </div>
                    <div class="d-grid"><button type="submit" class="btn btn-primary">SIGN IN</button></div>
                    <p class="footer-text">&copy; 2025 ELMS. Secure Student Access Portal.</p>
                </form>
            </div>

            <!-- Forgot Step 1: User ID -->
            <div id="forgot-step1-content" class="auth-content">
                <h2>FORGOT PASSWORD</h2>
                <form>
                    <div class="mb-4">
                        <label class="form-label">User ID</label>
                        <div class="input-group"><input type="text" class="form-control" placeholder="Enter your User ID"><span class="input-group-text"><i class="bi bi-person"></i></span></div>
                    </div>
                    <p class="helper-text">*Provide your User ID so we can send you an OTP.</p>
                    <div class="d-grid"><button type="button" class="btn btn-primary next-step-btn" data-next="forgot-step2-content">CONFIRM</button></div>
                    <p class="footer-text">&copy; 2025 ELMS. Secure Student Access Portal.</p>
                </form>
            </div>
            
            <!-- Forgot Step 2: OTP -->
            <div id="forgot-step2-content" class="auth-content">
                <h2>FORGOT PASSWORD</h2>
                <form>
                    <div class="mb-4">
                        <label class="form-label">OTP</label>
                        <div class="input-group"><input type="text" class="form-control" placeholder="Enter your OTP"><span class="input-group-text"><i class="bi bi-eye"></i></span></div>
                    </div>
                    <p class="helper-text">*Please enter your One-Time Password.</p>
                    <div class="d-grid"><button type="button" class="btn btn-primary next-step-btn" data-next="forgot-step3-content">CONFIRM</button></div>
                    <p class="footer-text">&copy; 2025 ELMS. Secure Student Access Portal.</p>
                </form>
            </div>

            <!-- Forgot Step 3: New Password -->
            <div id="forgot-step3-content" class="auth-content">
                <h2>FORGOT PASSWORD</h2>
                <form>
                    <div class="mb-4">
                        <label class="form-label">New Password</label>
                        <div class="input-group"><input type="password" class="form-control"><span class="input-group-text"><i class="bi bi-eye"></i></span></div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-group"><input type="password" class="form-control"><span class="input-group-text"><i class="bi bi-eye"></i></span></div>
                    </div>
                    <div class="d-grid"><button type="submit" class="btn btn-primary">CONFIRM</button></div>
                    <p class="footer-text">&copy; 2025 ELMS. Secure Student Access Portal.</p>
                </form>
            </div>
        </div>
    </div>
</div>