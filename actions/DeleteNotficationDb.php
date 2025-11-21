<?php
session_start();
include('connect.php');

// Collect POST data
$notifyid     = mysqli_real_escape_string($con, $_POST['notifyid']);


// Step 1: Check if voterid exists in userdata
$sql = "SELECT * FROM `notifydb` WHERE notifyid='$notifyid' LIMIT 1";
$result = mysqli_query($con, $sql);

if (!$result || mysqli_num_rows($result) === 0) {
    echo '<script>alert(" Invalid Gorvernmnet ID. Please check again.");
        window.location="../partials/adminDashboard.php";</script>';
    exit;
}

// If found, fetch current data
$row = mysqli_fetch_assoc($result);

// Step 3: delete voter details
$delete = "DELETE from`notifydb`
           WHERE notifyid='$notifyid'";

if (mysqli_query($con, $delete)) {
    echo '<script>alert("Notification deleted successfully!");
          window.location="../partials/adminDashboard.php";
          </script>';
} else {
    echo '<script>alert(" Update failed: ' . mysqli_error($con) . '");
          window.location="../partials/DeleteNotification.php";
          </script>';
}
?>
