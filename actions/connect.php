<?php

$con=mysqli_connect("localhost:3306","root","","votingsystemdb");
if($con){
    
}else{
        die(mysqli_connect_error($con));
}

?>