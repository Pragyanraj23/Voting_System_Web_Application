<?php
include('connect.php');

// Get form data
$information = $_POST['notification'];
$notifyid       = $_POST['notifyid'];
$notdate     = $_POST['notdate'];

// Insert query
$sql = "INSERT INTO `notifydb` (information, notifyid, date) 
        VALUES ('$information', '$notifyid', '$notdate')";

$result = mysqli_query($con, $sql);

// Check result
if ($result) {
    echo '<script>
            alert("Notification Update Successful");
            window.location="../partials/adminDashboard.php";
          </script>';
} else {
    echo '<script>
            alert("Error! Notification not saved.");
            window.location="../partials/UpdateNotification.php";
          </script>';
}
?>
