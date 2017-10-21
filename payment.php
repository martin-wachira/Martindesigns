<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $type=$_POST['type'];
    $amount=$_POST['amount'];
    $code=$_POST['code'];
    include_once('dbconnection.php');
    $sql="INSERT INTO payment(username,type,amount,code)
        VALUES('$username','$type','$amount','$code')";
    
     
       
     
    mysqli_query($con,$sql);
   echo "<script>alert('Account Credited!! Continue Shopping with us')</script>";
    
}
?>