<?php 
include 'db.php';

$ID = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$ID");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $Name   = $_POST['Name'];
    $Email  = $_POST['Email'];
    $Mobile = $_POST['Mobile'];

    $conn->query("UPDATE users SET Name='$Name', Email='$Email', Mobile='$Mobile' WHERE id=$ID");

    header("Location: indexx.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Edit User</h2>
    <form method="POST">
        <input type="text" name="Name" value="<?= $row['Name']; ?>" class="form-control mb-2" required>
        <input type="email" name="Email" value="<?= $row['Email']; ?>" class="form-control mb-2" required>
        <input type="text" name="Mobile" value="<?= $row['Mobile']; ?>" class="form-control mb-2" required>
        <button class="btn btn-primary" name="update">Update</button>
    </form>
</div>

</body>
</html>
