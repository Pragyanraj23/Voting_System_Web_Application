<?php
session_start();
include('connect.php');

// Collect POST data
$vtid     = mysqli_real_escape_string($con, $_POST['vtid']);


// Step 1: Check if voterid exists in userdata
$sql = "SELECT * FROM `userdata` WHERE voterid='$vtid' LIMIT 1";
$result = mysqli_query($con, $sql);

if (!$result || mysqli_num_rows($result) === 0) {
    echo '<script>alert(" Invalid Voter ID. Please check again.");
        window.location="../partials/voterRegistration.php";</script>';
    exit;
}

// If found, fetch current data
$row = mysqli_fetch_assoc($result);

// Step 3: delete voter details
$update = "DELETE from`userdata`
           WHERE voterid='$vtid'";

if (mysqli_query($con, $update)) {
    echo '<script>alert("Voter details deleted successfully!");
          window.location="../partials/adminDashboard.php";
          </script>';
} else {
    echo '<script>alert(" Update failed: ' . mysqli_error($con) . '");
          window.location="../partials/DeleteVoter.php";
          </script>';
}
?>
