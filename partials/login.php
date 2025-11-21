<?php
$selectedRole = "";
if (isset($_POST['std'])) {
    $selectedRole = $_POST['std'];
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
                            <div class="row justify-content-left">
                <div class="col-md-1 mx-4">  <a href="../" class="btn btn-danger w-150 h-120 mb-2">Home</a>
                </div>
                  </div>
                  
        <h3>Welcome to the Voting System</h3>
        <p>Please login as a voter or admin to continue.</p>
        
        
        <div class="container my-5">
 
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Login Form -->
                    <form action="../actions/loginDb.php" method="POST" class="bg-light p-4 rounded shadow">
                        <h4 class="mb-3">Login</h4>
                        
                        <div class="mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number" required maxlength="10" minlength="10">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                        </div>


                        <!-- Role selection -->
                        <div class="mb-3">
                            <select name="std" id="roleSelect" class="form-control" required>
                                <option value="">-- Select Role --</option>
                                <option value="voter" <?php if($selectedRole=="voter") echo "selected"; ?>>Voter</option>
                                <option value="admin" <?php if($selectedRole=="admin") echo "selected"; ?>>Admin</option>
                            </select>
                        </div>

                        <!-- Voter ID (only when voter is selected) -->
                        <div class="mb-3" id="voterIdField" style="display: <?php echo ($selectedRole=="voter") ? "block" : "none"; ?>;">
                            <input type="text" class="form-control" name="vid" placeholder="Enter voter ID">
                        </div>

                        <button type="submit" class="btn btn-dark w-100">Login</button>
                    </form>

                    <!-- Extra Buttons -->
                    <div class="mt-4">
                        <a href="./voterRegistration.php" class="btn btn-success w-100 mb-2">➕ New Voter Registration</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS to toggle voter ID field -->
    <script>
        document.getElementById('roleSelect').addEventListener('change', function() {
            let voterIdField = document.getElementById('voterIdField');
            voterIdField.style.display = (this.value === 'voter') ? 'block' : 'none';
        });
    </script>
</body>
</html>
