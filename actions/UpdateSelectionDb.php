<?php
session_start();
include('connect.php');

$std = $_POST['std'];

if ($std === "voter") {

    $vid  = isset($_POST['vid']) ? $_POST['vid'] : '';

    // voter login requires voterid
    $sql = "SELECT id, voterid, status FROM `userdata` WHERE voterid='$vid' LIMIT 1";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        // // Save session
        // $_SESSION['id']     = $data['id'];
        // $_SESSION['status'] = $data['status'];
        // $_SESSION['data']   = $data;

        // Redirect to voter dashboard
        echo '<script>
        window.location="../partials/UpdateVoter.php";
        </script>';
    } else {
        echo '<script>
        alert("Invalid voter details. Please check your login credentials.");
        window.location="../partials/UpdateSelection.php";
        </script>';
    }

} else {
    // Group login
    echo '<script>
    window.location="../partials/UpdateGroup.php";
    </script>';
}
?>
