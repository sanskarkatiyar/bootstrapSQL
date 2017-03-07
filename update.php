<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Retail: MODIFY</title>

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
  </br><br>
    <div class="container text-center">
    <a href="update.html">
    <button class="btn btn-success">Execute Another Query</button></a><br><br>
  </div>
  <div class="container col-md-8 col-md-offset-2">
  <br>

<?php
$servername = "localhost";
$username = "bce0619";
$password = "sanskar";
$dbname = "onlineretail";

$invoiceNumber=$_GET['InvoiceNo'];
$stockCode=$_GET['StockCode'];
$description=$_GET['Description'];
$quantity=$_GET['Quantity'];
$unitPrice=$_GET['UnitPrice'];
$country=$_GET['Country'];
$customerID=$_GET['CustomerID'];
$invoiceDate=$_GET['InvoiceDate'];

$new_invoiceNumber=$_POST['new_invoiceNumber'];
$new_stockCode=$_POST['new_stockCode'];
$new_description=$_POST['new_description'];
$new_quantity=$_POST['new_quantity'];
$new_unitPrice=$_POST['new_unitPrice'];
$new_country=$_POST['new_country'];
$new_customerID=$_POST['new_customerID'];
$new_invoiceDate=$_POST['new_invoiceDate'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE retail SET InvoiceNo='" . $new_invoiceNumber . "',".
	"StockCode='".$new_stockCode."',".
	"Description='".$new_description."',".
	"Quantity='".$new_quantity."',".
	"UnitPrice='".$new_unitPrice."',".
	"Country='".$new_country."',".
	"InvoiceDate='".$new_invoiceDate."',".
	"CustomerID='".$new_customerID."' WHERE ".
	"InvoiceNo='".$invoiceNumber."' AND ".
	"StockCode='".$stockCode."' AND ".
	"Description='".$description."' AND ".
	"Quantity=".$quantity." AND ".
	"UnitPrice=".$unitPrice." AND ".
	"Country='".$country."' AND ".
	"CustomerID='".$customerID."';";

/*echo $sql;*/

mysqli_query($conn,$sql);

echo '<div class="alert alert-warning" role="alert">The following record been changed: <br><br>Invoice Number:&nbsp;<b>'. $invoiceNumber .'</b><br>Stock Code:&nbsp;<b>'. $stockCode .'</b><br>Description:&nbsp;<b>'. $description .'</b><br>Quantity:&nbsp;<b>'. $quantity .'</b><br>Invoice Date:&nbsp;<b>'. $invoiceDate .'</b><br>Customer ID:&nbsp;<b>'. $customerID .'</b><br>Country:&nbsp;<b>'. $country .'</b><br><br></div><br>';

echo '<div class="alert alert-success" role="alert">The modified record is as follows: <br><br>Invoice Number:&nbsp;<b>'. $new_invoiceNumber .'</b><br>Stock Code:&nbsp;<b>'. $new_stockCode .'</b><br>Description:&nbsp;<b>'. $new_description .'</b><br>Quantity:&nbsp;<b>'. $new_quantity .'</b><br>Invoice Date:&nbsp;<b>'. $new_invoiceDate .'</b><br>Customer ID:&nbsp;<b>'. $new_customerID .'</b><br>Country:&nbsp;<b>'. $new_country .'</b><br><br></div>';

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