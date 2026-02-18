<?php 
include 'header.php';
?>

<div style="min-height: 70vh; display: flex; align-items: center; justify-content: center; flex-direction: column; font-family: 'Montserrat', sans-serif; background-color: #FBF6F0;">

<?php
include 'db.php';
$email = $_POST['email'];
$password = $_POST['pswd'];

$sql = "INSERT INTO users (email, pswd) VALUES ('$email', '$password')";

if($conn->query($sql) === TRUE) {
    echo "<div style='text-align:center;'>";
    echo "<i class='fas fa-user-plus' style='font-size: 80px; color: #472717; margin-bottom: 20px;'></i>";
    echo "<h2 style='font-family: \"Playfair Display\", serif;'>Account Created!</h2>";
    echo "<p>Your details have been stored in our System.</p>";
    echo "<a href='login.php' class='btn-box btn-box-dark' style='text-decoration: none;'>Go to Login</a>";
    echo "</div>";
} else {
    echo "<div style='text-align:center;'>";
    echo "<h2>Error</h2>";
    echo "ERROR: " . $sql . "<br>" . $conn->error;
    echo "</div>";
}
$conn->close();
?>

</div>

<?php include 'footer.php'; ?>
