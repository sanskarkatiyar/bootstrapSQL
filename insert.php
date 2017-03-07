<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Retail: INSERT</title>
    <!-- Bootstrap -->
	<!-- <link href="../../Documents/JS Practice/css/bootstrap.css" rel="stylesheet"> -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  
  <div class="jumbotron">
<h1 class="text-center">CSE2004 - DA 2</h1>
<p class="text-center"><strong>Sanskar Katiyar - 15BCE0619</strong>  </p>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	
	<div class="container">
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<ul class="nav nav-tabs nav-justified">
	  <li role="presentation"><a href="index.html">Home</a></li>
	  <li role="presentation"><a href="insert.html">Insert</a></li>
	  <li role="presentation"><a href="update.html">Update/Delete</a></li>
      <li role="presentation"><a href="view.html">View</a></li>
  </ul>
<br><br>
    <div class="container text-center">
    <a href="insert.html">
    <button class="btn btn-success">Execute Another Query</button></a><br><br>
  </div>
  <div class="container col-md-8 col-md-offset-2">
  <br>
<?php
$servername = "localhost";
$username = "bce0619";
$password = "sanskar";
$dbname = "onlineretail";

$invoiceNumber=$_POST['invoiceNumber'];
$stockCode=$_POST['stockCode'];
$description=$_POST['description'];
$quantity=$_POST['quantity'];
$unitPrice=$_POST['unitPrice'];
$country=$_POST['country'];
$date=$_POST['date'];
$time=$_POST['time'];
$customerID=$_POST['customerID'];
$invoiceDate=$date . " " . $time;

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, "
  INSERT INTO retail(InvoiceNo,StockCode,Description,Quantity,InvoiceDate,UnitPrice,CustomerID,Country) 
  VALUES('". $invoiceNumber ."','". $stockCode ."','". $description ."','".$quantity ."','". $invoiceDate ."','". $unitPrice ."','". $customerID ."','". $country."')") or die(mysql_error());

echo '<div class="alert alert-success" role="alert">Query Executed Successfully: <br><br>Invoice Number:&nbsp;<b>'. $invoiceNumber .'</b><br>Stock Code:&nbsp;<b>'. $stockCode .'</b><br>Description:&nbsp;<b>'. $description .'</b><br>Quantity:&nbsp;<b>'. $quantity .'</b><br>Invoice Date:&nbsp;<b>'. $invoiceDate .'</b><br>Customer ID:&nbsp;<b>'. $customerID .'</b><br>Country:&nbsp;<b>'. $country .'</b><br><br>The above record was added to the table. </div>';

mysqli_close($conn);
?>
    
    </br>
    </br>
  </div>
  </div>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>