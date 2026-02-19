<?php
include 'db.php';

// 1. Fetch existing data to populate the form
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bookatable WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

// 2. Handle the form submission to update the database
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $date = $_POST['bookdate'];
    $time = $_POST['booktime'];
    $duration = $_POST['duration'];
    $preference = $_POST['tablepreference'];

    $update_sql = "UPDATE bookatable SET 
                   bookdate='$date', 
                   booktime='$time', 
                   duration='$duration', 
                   tablepreference='$preference' 
                   WHERE id=$id";

    if ($conn->query($update_sql) === TRUE) {
        header("Location: read.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking - CGG Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #FBF6F0;">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow p-4 border-0">
            <h2 class="text-center mb-4" style="font-family: 'Playfair Display', serif;">Edit Booking #<?php echo $row['id']; ?></h2>
            
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="mb-3">
                    <label class="form-label fw-bold">Date</label>
                    <input type="date" class="form-control" name="bookdate" value="<?php echo $row['bookdate']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Time</label>
                    <input type="time" class="form-control" name="booktime" value="<?php echo $row['booktime']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Duration</label>
                    <select class="form-select" name="duration">
                        <option value="1" <?php if($row['duration'] == '1') echo 'selected'; ?>>1 Hour</option>
                        <option value="2" <?php if($row['duration'] == '2') echo 'selected'; ?>>2 Hours</option>
                        <option value="3" <?php if($row['duration'] == '3') echo 'selected'; ?>>3 Hours</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Table Preference</label>
                    <select class="form-select" name="tablepreference">
                        <option value="Any" <?php if($row['tablepreference'] == 'Any') echo 'selected'; ?>>Any Table</option>
                        <option value="Window" <?php if($row['tablepreference'] == 'Window') echo 'selected'; ?>>Window Seat</option>
                        <option value="Quiet" <?php if($row['tablepreference'] == 'Quiet') echo 'selected'; ?>>Quiet Corner</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 fs-5" name="update">Update Booking</button>
                <a href="read.php" class="btn btn-secondary w-100 py-2 mt-2">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>