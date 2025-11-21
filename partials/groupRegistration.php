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
        <h3>Welcome to the Group Registration System</h3>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Login Form -->
                    <form action="../actions/groupRegisterDb.php" method="POST" enctype="multipart/form-data"  class="bg-light p-4 rounded shadow">
                        <h4 class="mb-3">Group Registraion Form</h4>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number" required maxlength="10" minlength="10">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="cpassword" placeholder="Enter your  confirm password" required>
                        </div>
                        
                        <div class="mb-3">
                            <input type="file" class="form-control" name="photo" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="govid" placeholder="Enter your government id" required>
                        </div>
                        <!-- <div class="mb-3">
                            <input type="text" class="form-control" name="gid" placeholder="Goverment Id " required>
                        </div> -->

                        <div class="mb-3">
                            <select name="std" class="form-control" required>
                                <option value="group">Group</option>
                                <option value="other">other</option>
                            </select>
                        </div>

  

                        <button type="submit" class="btn btn-dark w-100">Register</button>
                    </form>

                    <!-- Extra Buttons -->
                    <div class="mt-4">
                        <a href="../" class="btn btn-success w-100 mb-2">Already Registerd!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>