<?PHP
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];
$govid=$_POST['govid'];

if($password!=$cpassword){
    echo '<script>
    alert("Password do not match");
    window.location="../partials/groupRegistration.php";
    </script>';
}

else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into `groupdata` (gusername,gmobile,gpassword,gphoto,gstandard,gstatus,votes,govid)
     values('$username','$mobile','$password','$image','$std',0,0,'$govid')";

     $result=mysqli_query($con,$sql);

     if($e=$result){
            echo '<script>alert("Registration Successful")
            window.location="../partials/adminDashboard.php";
            </script>';
     }
     else{
         echo '<script>
    alert("Invalid Credentials.Try again!");
    window.location="../partials/groupRegistration.php";
    </script>';

     }
    

}


?>