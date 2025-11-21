
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
        <h3>Welcome to the Group Delete System</h3>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Login Form -->
                    <form action="../actions/DeleteGroupDb.php" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow">
                        <h4 class="mb-3">Group Delete Form</h4>
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
                            <input type="text" class="form-control" name="govtid" placeholder="Enter your government id" required>
                        </div>

                <!--Gender-->
<!-- /                        <div class="mb-3">
                            <select name="gender" class="form-control" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div> -->
                        <!-- <div class="mb-3">
                            <select name="std" class="form-control" required>
                                <option value="voter">voter</option>
                                <option value="other">other</option>
                            </select>
                        </div> -->

  

                        <button type="submit" class="btn btn-dark w-100">Delete Done</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
