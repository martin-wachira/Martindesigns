<!DOCTYPE >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header">
	<div id="menu" class="container">
		<ul>
			<li><a  style="color:pink" href="index.php" accesskey="1">Homepage</a></li>
            
			<li><a  style="color:pink" href="services.php" accesskey="2" >Services</a></li>
			
		</ul>
	</div>
</div>
<div id="logo" class="container">
	<h1><span style="color:purple">Martin F's & D's</span></h1>
</div>

	
    

    <div style="margin-left:150px; margin-right:150px; margin-top:0px; margin-bottom:50px; background-color:white" >
    
    
    <div style="margin-left:400px; text-align:left">
        
        
        <h1>Ladies View</h1>
        <?php
include_once('dbconnection.php');
$sql="select * FROM ladies";
$result=mysqli_query($con,$sql);
if(!$result)
{
die("unable to retrieve data");
}
echo "<table border=0 cellpadding=5 cellspacing=15><tr><th>AGE</th><th>SIZE</th><th>PRICE</th></tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr><td>".$row['age']."</td>".
	"<td>".$row['size']."</td>".
	"<td>".$row['price']."</td></tr>";
	
}
echo"</table>";
        
?>
    
        
        
     <h1>Gents View</h1>
        <?php
include_once('dbconnection.php');
$sql="select * FROM gents";
$result=mysqli_query($con,$sql);
if(!$result)
{
die("unable to retrieve data");
}
echo "<table border=0 cellpadding=5 cellspacing=15><tr><th>AGE</th><th>SIZE</th><th>PRICE</th></tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr><td>".$row['age']."</td>".
	"<td>".$row['size']."</td>".
	"<td>".$row['price']."</td></tr>";
	
}
echo"</table>";
        
?>    
         <h1>Kids View</h1>
        <?php
include_once('dbconnection.php');
$sql="select * FROM kids";
$result=mysqli_query($con,$sql);
if(!$result)
{
die("unable to retrieve data");
}
echo "<table border=0 cellpadding=5 cellspacing=15><tr><th>AGE</th><th>SIZE</th><th>PRICE</th></tr>";
while($row=mysqli_fetch_array($result))
{
echo "<tr><td>".$row['age']."</td>".
	"<td>".$row['size']."</td>".
	"<td>".$row['price']."</td></tr>";
	
}
echo"</table>";
        
?>    
                    
    </div>
    </div>
    
        
    <div style="text-align:center; background-color:pink">
        <br/><br/><br/><br/>
        
        
        
      <a href="logout.php"> <input style="color:maroon; padding:15px" type="button" value="LOGOUT" ></a>  
        
        
       &nbsp;
        <br/><br/><br/><br/>
        
    </div>
    
    
    
    

<div id="copyright" class="container">
	<p>Copyright &copy; 2017. All rights reserved. | Photos by martin | Design by Martin W.</p>
</div>
</body>
</html>
