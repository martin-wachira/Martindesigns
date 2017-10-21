<?php
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    include_once('dbconnection.php');
    $sql="INSERT INTO customer(fname,lname,username,email,password)
        VALUES('$fname','$lname','$username','$email','$password')"
        ;
    mysqli_query($con,$sql);
    //echo"user registration successful";
	
	 echo "<script>alert('Customer Registration Successful!')</script>"; 
   
}
?>