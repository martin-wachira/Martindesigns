<?php
if(isset($_POST['submit']))
{
    $age=$_POST['age'];
    $size=$_POST['size'];
    $price=$_POST['price'];
    include_once('dbconnection.php');
    $sql="INSERT INTO gents(age,size,price)
        VALUES('$age','$size','$price')";
    
     
       
     
    mysqli_query($con,$sql);
   // echo"order successful";
        
    echo "<script>alert('Order Placed Successful! Feel free to shop with us!!');window.location.href='gents.php';</script>";
    
}
?>