<?php include 'db.php'; 

if (isset($_POST['submit'])) {
    $Name   = $_POST['Name'];
    $Email  = $_POST['Email'];
    $Mobile = $_POST['Mobile'];

    $conn->query("INSERT INTO users (Name, Email, Mobile) VALUES ('$Name', '$Email', '$Mobile')");

    header("Location: indexx.php");

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Add New User</h2>
    <form method="POST">
        <input type="text" name="Name" class="form-control mb-2" placeholder="Enter Name" required>
        <input type="email" name="Email" class="form-control mb-2" placeholder="Enter Email" required>
        <input type="text" name="Mobile" class="form-control mb-2" placeholder="Enter Mobile" required>
        <button class="btn btn-success" name="submit">Save</button>
    </form>
</div>

</body>
</html>