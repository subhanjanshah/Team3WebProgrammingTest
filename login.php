<?php 
$pageTitle = "Sign In - CGG Cafe";
include 'header.php'; 
?>

<div class="login-container">
    <div class="login-box">
        <h2>Welcome Back</h2>
        
        <form action="create2.php" method="POST">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            
            <div class="form-group">
                <label for="pswd">Password</label>
                <input type="password" id="pswd" name="pswd" placeholder="Enter your password" required>
            </div>
            
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            
            <button type="submit" class="login-btn">Sign In</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>
