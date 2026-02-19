<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CGG Cafe - All Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #FBF6F0; font-family: 'Montserrat', sans-serif;">
    <div class="container mt-5">
        <h2 style="font-family: 'Playfair Display', serif; color: #472717;">CGG Cafe Reservations</h2>
        <table class="table table-bordered table-striped mt-3 bg-white">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Duration</th>
                    <th>Preference</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM bookatable ORDER BY bookdate ASC, booktime ASC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                   while ($row = $result->fetch_assoc())
                    {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['bookdate']}</td>
                            <td>{$row['booktime']}</td>
                            <td>{$row['duration']} Hour(s)</td>
                            <td>{$row['tablepreference']}</td>
                            <td>
                                <a href='update.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
                                <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure you want to cancel this booking?\")'>Delete</a>
                            </td>
                        </tr>";
}
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No reservations found.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>