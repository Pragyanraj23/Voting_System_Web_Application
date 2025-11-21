<?php
session_start();
include('connect.php');

// Collect POST data
$username = mysqli_real_escape_string($con, $_POST['username']);
$mobile   = mysqli_real_escape_string($con, $_POST['mobile']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$govtid     = mysqli_real_escape_string($con, $_POST['govtid']);

// Handle uploaded photo
$image    = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];

// Step 1: Check if voterid exists in userdata
$sql = "SELECT * FROM `groupdata` WHERE govid='$govtid' LIMIT 1";
$result = mysqli_query($con, $sql);

if (!$result || mysqli_num_rows($result) === 0) {
    echo '<script>alert(" Invalid Group ID. Please check again.");
        window.location="../partials/adminDashboard.php";
        </script>';
    
}

// If found, fetch current data
$row = mysqli_fetch_assoc($result);

// Step 2: Upload new photo (if given), else keep old photo
if (!empty($image)) {
    $target = "../uploads/" . basename($image);
    if (!move_uploaded_file($tmp_name, $target)) {
        echo '<script>alert(" Photo upload failed. Try again.");
              window.location="../partials/voterRegistration.php";</script>';
        exit;
    }
} else {
    $image = $row['photo']; // keep old photo
}

// Step 3: Update Group details
$update = "UPDATE `groupdata` SET 
              gusername='$username',
              gmobile='$mobile',
              gpassword='$password',
              gphoto='$image'
           WHERE govid='$govtid'";

if (mysqli_query($con, $update)) {
    echo '<script>alert("Group details updated successfully!");
          window.location="../partials/adminDashboard.php";
          </script>';
} else {
    echo '<script>alert(" Update failed: ' . mysqli_error($con) . '");
          window.location="../partials/groupRegistration.php";
          </script>';
}
?>
