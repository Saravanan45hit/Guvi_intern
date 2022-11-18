<?php
$con =mysqli_connect('localhost','root','','mydb');
if(!$con){
    // echo "Connection Successful!!";
   
    die(mysqli_error($con));
}else{
    echo "Connection Successful!!";

}
if(isset($_POST['reg'])){
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastnmae'];
    $email=$_POST['Email']; 
    $contactnumber=$_POST['Contact_number'];
    $password=$_POST['Password'];
    $retypepassword=$_POST['Repeatpassword'];
    // $user_ip=getIPAddress();


    $select_query="select * from `mytable` where email='$email'";
$result=mysqli_query($con,$select_query);
$row_count=mysqli_num_rows($result);
if($row_count>0){
    echo "<script>alert('UserName and Email Already exits')</script>";
}else if($password!=$retypepassword){
    echo "<script>alert('Password does not matches')</script>";
    
}else{

    // insert query
    echo "<script>alert('insert the values')</script>";
    $insert_query="insert into `mytable`(email,password) values ('$email','$password')";
    $sql_execute=mysqli_query($con,$insert_query);
        if($sql_execute){
            echo "<script>alert('Data insert Successfully')</script>";
        }
}

}