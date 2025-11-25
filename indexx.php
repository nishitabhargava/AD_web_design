<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">CRUD Operation Project</h2>

    <a href="create.php" class="btn btn-primary mb-3">Add New User</a>

    <table class="table table-bordered table-striped">
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['ID']; ?></td>
            <td><?= $row['Name']; ?></td>
            <td><?= $row['Email']; ?></td>
            <td><?= $row['Mobile']; ?></td>
            <td>
                <a href="update.php?id=<?= $row['ID']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete.php?id=<?= $row['ID']; ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>