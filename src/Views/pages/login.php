<div class="container-fluid login-container">
    <div class="card login-card">
        <div class="row g-0">
            <!-- Left Info Panel -->
            <div class="col-md-6 info-panel">
                <h1>Hello There!</h1>
                <p>Did you forgot your password?</p>
                <a href="#" class="btn btn-outline-light" id="flip-to-forgot-btn">Forgot Password</a>
            </div>

            <!-- Right Form Panel -->
            <div class="col-md-6 form-panel">
                <div class="form-body">
                    <h2>SIGN IN</h2>
                    <form action="/login" method="POST">
                        <!-- User ID Field -->
                        <div class="mb-4">
                            <label for="userID" class="form-label">User ID</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="userID" name="userID" required>
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <span class="input-group-text"><i class="bi bi-eye"></i></span>
                            </div>
                        </div>

                        <!-- Sign In Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">SIGN IN</button>
                        </div>

                        <p class="footer-text">
                            &copy; 2025 ELMS. Secure Student Access Portal.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>