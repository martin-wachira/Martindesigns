<?php  //Start the Session
session_start();
 require('dbconnection.php');
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = md5($_POST['password']);
//3.1.2 Checking the values are existing in the database or not
$sql="SELECT * FROM customer WHERE username='$username' AND password='$password'";
$result=mysqli_query($con,$sql);
 
//$result = mysqli_query($con, $sql) or die(mysqli_error($con));
//$count = mysqli_num_rows($result);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			//session_regenerate_id();
			//$member = mysql_fetch_assoc($result);
			//$_SESSION['SESS_MEMBER_ID'] = $member['id'];
		
			//echo "succees";
			$_SESSION['username'] = $username;
			header('location:view.php');
	
			//session_write_close();

		

			exit();
		}else {
			//Login failed
			
			//exit();
            echo "<script>alert('username or password is incorrect!')</script>";
           // header("location: admin.php");
			//echo "fail";
		}
	}else {
		die("Query failed");
	}











/*
$sql = "SELECT username,password FROM staff WHERE username='$username' and password='$password'";
 
$result = mysqli_query($con, $sql) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count>0){
$_SESSION['username'] = $username;
    
    
    header('location:login.php');    
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
//echo  "Invalid Login Credentials.";
echo "<script>alert('username or password is incorrect!')</script>"; 
}*/
}
/*
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];


  header("location:login.php"); 
 
}
//3.2 When the user visits the page first time, simple login form will be displayed.*/
?>