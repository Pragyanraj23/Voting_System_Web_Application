<?php
session_start();
include("connect.php");



// Fetch groups with real votes
$getGroups = mysqli_query($con, "SELECT gusername, gphoto, votes, gid FROM groupdata WHERE gstandard='group'");
$groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Result Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body class="bg-secondary text-white">

<div class="container my-5 bg-secondary text-white">
    <h1 class="mb-4">Voting Result Dashboard</h1>
    <a href="../partials/logout.php" class="btn btn-danger mb-3">Logout</a>

    <?php if (count($groups) > 0) { ?>
        <table class="table table-bordered bg-dark text-white table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Group Image</th>
                    <th>Group Name</th>
                    <th>Total Votes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groups as $group) { ?>
                    <tr>
                        <td><img src="../uploads/<?php echo $group['gphoto']; ?>" width="120"></td>
                        <td><?php echo ($group['gusername']); ?></td>
                        <td><strong><?php echo $group['votes']; ?></strong></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-warning">No Result found</div>
    <?php } ?>
</div>

</body>
</html>
