<?php 
$pageTitle = "Sign In - CGG Cafe";
include 'header.php'; 
?>

<div class="login-container">
    <div class="login-box">
        <h2>Welcome Back</h2>
        
        <?php
        if(isset($_SESSION['login_error'])) {
            echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';
            unset($_SESSION['login_error']);
        }
        
        if(isset($_SESSION['login_success'])) {
            echo '<div class="success-message">' . $_SESSION['login_success'] . '</div>';
            unset($_SESSION['login_success']);
        }
        ?>
        
        <form action="authenticate.php" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            
            <button type="submit" class="login-btn">Sign In</button>
        </form>
    </div>
    
    <div class="copyright">
        ©️ 2026 CGG Cafe. All rights reserved.
    </div>
</div>

<?php include 'footer.php'; ?>
