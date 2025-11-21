<?php
$selectedRole = "";
if (isset($_POST['notifyid'])) {
    $selectedRole = $_POST['notifyid'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Voting System - Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info text-center text-dark py-3">
        <h3>Welcome to the Voting System</h3>
        <p>Please Select Update or Delete to continue.</p>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">

        <a href="../partials/UpdateNotification.php"><button class="btn btn-dark text-light px-3 m-4">Update Notification</button></a>
        <a href="../partials/DeleteNotification.php"><button class="btn btn-dark text-light px-3">Delete Notification</button></a>


            </div>
        </div>
    </div>


</body>
</html>
