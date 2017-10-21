<!DOCTYPE >
<!--
Design by Martin W


-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pay</title>
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
		
	</div>
</div>
<div id="logo" class="container">
	
    <div style="text-align:center">
        <br/>
        <h2>Payment</h2>
        <br/>
        <p>For any ordered item should have a payment ticket</p>
        <p>Obtain Premium ticket order here</p>
        <br/>
        <div style="background-color:#001; color:green">
            <br/><br/><br/>
        <form method="post" action="payment.php">
            Username (of the registered customer)<br/><input style="padding:5px" type="text" name="username" required><br/><br/>
            Type of Receipt<br/>
            <select style="padding:5px" name="type">
                <option style="padding:5px" value="">Type of Receipt</option>
         <option style="padding:5px" value="Premium">Premium(most frequent shoppers) </option> 
         
          <option style="padding:5px" value="Elite">Elite(frequent customers)</option>
          <option style="padding:5px" value="Normal">Normal (normal shoppers)</option>
          </select><br/><br/>
            Amount(To credit to the account)<br/><input style="padding:5px" type="number" name="amount" required><br/><br/>
            Receipt code<br/><input style="padding:5px" type="text" name="code" required><br/><br/>
            <input style="background-color:yellow; color:red" type="submit" value="credit your account" name="submit"><br/><br/><br/>
            <hr/>
            
            <h3>PROCESS</h3><br/><br/>
            <p>Go to mpesa menu</p>
            <p>select lipa na mpesa</p>
            <p>select buy goods and services</p>
            <p>Till no. : 45633314</p>
            <p>enter amount</p>
            <p>enter mpesa pin</p>
            <p>wait for the code (use that code in the above form)</p>
            
            
           <br/>
            <a href="index.php">Go back to homepage</a>
            <br/>
        
        </form>
            <br/><br/><br/>
        </div>
        
    </div>
    
    

<div id="copyright" class="container">
	<p>Copyright &copy; 2017. All rights reserved. | Photos by Martin | Design by Martin W.</p>
</div>
</body>
</html>
