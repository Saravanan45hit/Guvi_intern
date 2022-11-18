<?php

$con =mysqli_connect('localhost','root','','mydb');
if(!$con){
    // echo "Connection Successful!!";
   
    die(mysqli_error($con));
}else{
        echo "Connection Successful!!";

}

if(isset($_POST['user_login'])){
    $firstname=$_POST['firstname'];
    $password=$_POST['password'];
    $select_query="select * from `user_id` where firstname='$firstname'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);

if($rows_count>0){
    echo "<script>alert('Login Sucessfully')</script>";
   
    if(password_verify($user_password,$row_data['password'])){
        
        if($rows_count==1){
echo "<script>window.open('./profile.html?name=$firstname','_self')</script>";


        }else{
        echo "<script>alert('Login Sucessfully')</script>";
        echo "<script>window.open('index.html?name=$firstname','_self')</script>";
        }
}else{
    echo "<script>alert('Invalid Credentials')</script>";
    }
}else{
    echo "<script>alert('Invalid Credentials')</script>";
}

}
?>