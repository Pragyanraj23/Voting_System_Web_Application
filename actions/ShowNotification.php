<?php
session_start();
include("connect.php");

// Fetch notifications
$getnotification = mysqli_query($con, "SELECT notifyid, information, date FROM notifydb");
$notifications = mysqli_fetch_all($getnotification, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notification Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body class="bg-secondary text-white">

<div class="container my-5">
  <h1 class="mb-4">Notification Dashboard</h1>
  <a href="../partials/logout.php" class="btn btn-danger mb-3">Logout</a>

  <?php if (count($notifications) > 0) { ?>
    <table class="table table-bordered bg-dark text-white table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Notification ID</th>
          <th>Notification</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($notifications as $notification) { ?>
          <tr>
            <td><?php echo htmlspecialchars($notification['notifyid']); ?></td>
            <td><?php echo htmlspecialchars($notification['information']); ?></td>
            <td><strong><?php echo htmlspecialchars($notification['date']); ?></strong></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  <?php } else { ?>
    <div class="alert alert-warning">No Notifications found</div>
  <?php } ?>
</div>

</body>
</html>
