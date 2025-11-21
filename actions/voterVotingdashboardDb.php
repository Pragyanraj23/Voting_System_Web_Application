<?php
session_start();
include("connect.php");

$votes=$_POST['groupvotes'];
if($_SESSION['status']==0){
$totalvotes=$votes+1;
}else{ 
    $totalvotes=$votes;
}

$uid=$_SESSION['id'];
$gid=$_POST['groupid'];



$updatevotes=mysqli_query($con,"UPDATE `groupdata` SET votes='$totalvotes'
WHERE gid='$gid'");
$updatestatus=mysqli_query($con,"UPDATE `groupdata` SET gstatus=1 WHERE gid='$gid'");

$updatestatus=mysqli_query($con,"UPDATE `userdata` SET status=1 WHERE id='$uid'");

if($updatevotes and $updatestatus){
    if($_SESSION['status']==0){
        $getgroups=mysqli_query($con,"SELECT gusername,gphoto,votes,gid FROM `groupdata` WHERE gstandard='group'");
        $groups=mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
        $_SESSION['groups']=$groups;
        $_SESSION['status']=1;
        //  $_SESSION['gstatus']=1;
    echo '<script>
    alert("Voting Successful");
    window.location="../partials/voterVotingDashboard.php";
    </script>';

    }else{
    echo '<script>
    alert("Already Voted");
    window.location="../partials/voterVotingDashboard.php";
    </script>';
}
    

}   else{
    echo '<script>
    alert("Error Occurred! Vote after sometime");
    window.location="../partials/dashboard.php";
    </script>';
}
// if($_SESSION['status']==1){
//     $totalvotes=$votes;
// }else{
//     echo '<script>
//     alert("Already Voted");
//     window.location="../partials/dashboard.php";
//     </script>';
// }




?>