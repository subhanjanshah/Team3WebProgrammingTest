<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM bookatable WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Delete Booking Data</title>
</head>
<body>
<h2>Delete Booking Confirmation</h2>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Date: <br>
<input type="text" name="bookdate" value="<?php echo $row['bookdate']; ?>">
<br>
Time :<br>
<input type="text" name="booktime" value="<?php echo $row['booktime']; ?>">
<br>
Duration (Hours):<br>
<input type="text" name="duration" value="<?php echo $row['duration']; ?>">
<br>
Table Preference:<br>
<input type="text" name="tablepreference" value="<?php echo $row['tablepreference']; ?>">
<br><br>

<input type="submit" name="submit" value="Delete" >
</form>
<?php 
if(isset($_POST['submit'])){

    $query = mysqli_query($conn,"DELETE FROM bookatable where id='$a'");
    if($query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='read.php'> Check your updated List </a>";
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
?>
</body>
</html>