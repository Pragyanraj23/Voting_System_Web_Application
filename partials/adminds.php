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

    <div class="bg-info text-center py-3">
        <h3 class="my-3">Welcome to the Admin Dashboard</h3>     

        <!-- Buttons Row -->
        <div class="d-flex justify-content-center flex-wrap gap-2">
            <a href="../partials/login.php"><button class="btn btn-dark text-light px-3 m-2">Back</button></a>
            <a href="logout.php"><button class="btn btn-dark text-light px-3 m-2">Logout</button></a>
            <a href="./groupRegistration.php"><button class="btn btn-dark text-light px-3 m-2">Group Registration</button></a>
            <a href="./UpdateSelection.php"><button class="btn btn-dark text-light px-3 m-2">Update Group/Voter</button></a>
            <a href="./DeleteSelection.php"><button class="btn btn-dark text-light px-3 m-2">Delete Group/Voter</button></a>
            <a href="../actions/adminResultShow.php"><button class="btn btn-dark text-light px-3 m-2">Result</button></a>
        </div>
    </div>
</body>
</html>
