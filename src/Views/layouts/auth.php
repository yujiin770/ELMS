<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELMS - Secure Access</title>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/login.css">
</head>
<body>

    <main class="login-container">
        <?php include $page; ?>
    </main>
    
    <!-- JavaScript Files -->
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/auth.js"></script>
</body>
</html>