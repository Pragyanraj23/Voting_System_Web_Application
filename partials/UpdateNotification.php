<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Voting System</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark">
  <h1 class="text-info text-center p-3">Voting System</h1>

  <div class="bg-info text-center text-dark py-3">
    <h3>Welcome to Notification Update</h3>
  </div>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <!-- Notification Form -->
        <form action="../actions/updateNotificationDb.php" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow">
          <h4 class="mb-3 text-center">Notification Form</h4>

          <!-- Notification Input -->
          <div class="mb-3">
            <label for="notification" class="form-label">Notification</label>     
            <input type="text" id="notification" name="notification" placeholder="Update notification"
                   class="form-control" required>
          </div>

          <!-- Notification ID -->
          <div class="mb-3">
            <label for="notifyid" class="form-label">Notification ID</label>
            <input type="text" id="notifyid" name="notifyid" placeholder="Notification ID"
                   class="form-control" required>
          </div>

          <!-- Date Selection -->
          <div class="mb-3">
            <label for="notdate" class="form-label">Select Date</label>
            <input type="date" id="notdate" name="notdate"
                   class="form-control" required>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-dark w-100">Update</button>
        </form>

      </div>
    </div>
  </div>
</body>
</html>
