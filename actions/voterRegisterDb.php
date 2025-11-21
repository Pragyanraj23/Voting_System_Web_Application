<?PHP
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];
$vid=$_POST['vid'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword){
    echo '<script>
    alert("Password do not match");
    window.location="../partials/voterRegistration.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into `userdata` (username,mobile,password,voterid,gender,photo,standard,status)
     values('$username','$mobile','$password','$vid','$gender','$image','$std',0)";

     $result=mysqli_query($con,$sql);

     if($e=$result){
            echo '<script>alert("Registration Successful")
            window.location="../partials/login.php";
            </script>';
     }else{
      echo '<script>
        alert("Invalid Credentials!");
        window.location="../partials/voterRegistration.php";
    </script>';
}

}


    



?>