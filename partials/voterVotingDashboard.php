<?php
session_start();

if (!isset($_SESSION["data"])) {
    header("Location: ../partials/loginDb.php");
    exit();
}

$data = $_SESSION["data"];

// Voter status check
$status = ($_SESSION['status'] == 1) 
    ? '<b class="text-success">Voted</b>' 
    : '<b class="text-danger">Not Voted</b>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-secondary text-white">

    <div class="container my-5">
        <a href="../partials/logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>

        <h1 class="my-3">Voting System</h1>

        <div class="row my-5">
            <!-- Groups Section -->
            <div class="col-md-6">
                <?php
                if (isset($_SESSION['groups']) && count($_SESSION['groups']) > 0) {
                    $groups = $_SESSION['groups'];
                    foreach ($groups as $group) {
                        ?>
                        <div class="row mb-3 p-4 bg-dark text-white rounded">
                            <div class="col-md-4">
                                <img src="../uploads/<?php echo $group['gphoto']; ?>" 
                                    alt="Group Image" >
                            </div>
                            <div class="col-md-8">
                                <strong class="h5">Group Name:</strong> 
                                <?php echo ($group['gusername']); ?><br>
                                <strong class="h5">Votes:</strong> 
                                <?php echo ($group['votes']); ?><br>
                            <!-- Vote button -->
                        <form action="../actions/voterVotingdashboardDb.php" method="POST">
                            <input type="hidden" name="groupvotes" value="<?php echo $group['votes']; ?>">
                            <input type="hidden" name="groupid" value="<?php echo $group['gid']; ?>">
                            <?php if ($_SESSION['status'] == 1) { ?>
                                <button class="btn btn-success my-2 px-3">Voted</button>
                            <?php } else { ?>
                                <button class="btn btn-danger my-2 px-3" type="submit">Vote</button>
                            <?php } ?>
                        </form>
                            </div>
                        </div>

                    
                        <hr class="bg-dark">
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning text-dark">
                        No groups to display
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-2 bg-secondary text-dark">

            </div>

            <!-- User Profile Section -->
            <div class="col-md-4 bg-secondary text-dark">
                
            
                <div class="col-md-12 bg-white text-center">
                <div class="text-center mb-3">
                    <img src="../uploads/<?php echo $data['photo']; ?>"
                        alt="User Image"  width="150" height="150">
                </div>
                <strong class="h5">Name:</strong> <?php echo htmlspecialchars($data['username']); ?><br><br>
                <strong class="h5">Mobile:</strong> <?php echo htmlspecialchars($data['mobile']); ?><br><br>
                <strong class="h5">Status:</strong> <?php echo $status; ?><br><br>
                <strong class="h5">Voter ID:</strong> <?php echo htmlspecialchars($data['voterid']); ?><br>
            </div>
            </div>
        </div>
    </div>

</body>
</html>
