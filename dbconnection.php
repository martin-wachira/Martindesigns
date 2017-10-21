<?php
$con=mysqli_connect('localhost','root','');
if($con==true)
{
mysqli_select_db($con, 'martindesigns');
}
else
{
echo "server connection failed";
}
?> 