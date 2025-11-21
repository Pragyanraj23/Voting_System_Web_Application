<?php
session_start();
include('connect.php');

$std = $_POST['std'];


if ($std === "voter") {
    $username = $_POST['username'];
    $mobile   = $_POST['mobile'];
    $password = $_POST['password'];
    // $photo = $_FILES['photo'];
    $vid      = isset($_POST['vid']) ? $_POST['vid'] : '';

    $sql = "SELECT * FROM `userdata`
            WHERE username='$username'
            AND mobile='$mobile'
            -- And photo='$photo'
            AND password='$password'
            AND voterid='$vid'
            AND standard='voter'";

    $sqlg="SELECT * FROM `groupdata`
            WHERE gusername='$username'
            AND gmobile='$mobile'
            AND gpassword='$password'
            AND gstandard='group'";

    $result = mysqli_query($con, $sql);
    $resultg= mysqli_query($con, $sqlg);
    

    if ($result && mysqli_num_rows($result) > 0 || $resultg && mysqli_num_rows($resultg)>0  ) {
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        // Load all voters
        $resultvoter = mysqli_query($con, "SELECT username, photo, voterid, id FROM `userdata` WHERE standard='voter'");
        $_SESSION['voters'] = mysqli_fetch_all($resultvoter, MYSQLI_ASSOC);

        // Load all groups
        $resultgroup = mysqli_query($con, "SELECT gusername, gphoto, votes, gid FROM `groupdata` WHERE gstandard='group'");
        $_SESSION['groups'] = mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);

        // Save session
        $_SESSION['id']     = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data']   = $data;

        // Redirect to voter dashboard
        echo '<script>("Login Succesfull")
        window.location="../partials/voterVotingDashboard.php";
        </script>';
    } else {
        echo '<script>alert("Invalid voter details, check credentials");
        window.location="../partials/login.php";
        </script>';
    }
}else{
        // Admin login
    $username = $_POST["username"];
    $mobile   = $_POST["mobile"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `admindata`
            WHERE username='$username'
            AND password='$password'
            AND mobile='$mobile'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['admin'] = $data;
        echo '<script>
        window.location="../partials/adminDashboard.php";
        </script>';
    } else {
        echo '<script>alert("Invalid admin credentials");
        window.location="../partials/login.php";
        </script>';
    }

}



