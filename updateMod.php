<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Retail: UPDATE</title>
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
  </br>
  <div class="container col-md-8 col-md-offset-2">
  <br>
  </br>


<?php

  $invoiceNumber=$_GET['InvoiceNo'];
  $stockCode=$_GET['StockCode'];
  $description=$_GET['Description'];
  $quantity=$_GET['Quantity'];
  $unitPrice=$_GET['UnitPrice'];
  $country=$_GET['Country'];
  $customerID=$_GET['CustomerID'];
  $invoiceDate=$_GET['InvoiceDate'];

  echo '
	<form class="form-horizontal" action="update.php?InvoiceNo=' . $invoiceNumber . '&StockCode=' . $stockCode . '&Description=' . $description . '&Quantity=' . $quantity . '&UnitPrice=' . $unitPrice . '&InvoiceDate=' . $invoiceDate .'&CustomerID=' . $customerID . '&Country=' . $country .'" method="POST">
       <div class="form-group">
    	<label for="invoiceNumber">Invoice Number</label>
    	<input type="text" class="form-control" id="new_invoiceNumber" name="new_invoiceNumber" value="'. $invoiceNumber .'" required>
	  </div>

       <div class="form-group">
    	<label for="stockCode">Stock Code</label>
    	<input type="text" class="form-control" name="new_stockCode" id="new_stockCode" value="'. $stockCode .'" required>
	  </div>
        
        <div class="form-group">
    	<label for="description">Description</label>
    	<input type="text" class="form-control" name="new_description" id="new_description" value="'. $description .'" required>
  		</div>
        
      <div class="form-group">
    	<label for="quantity">Quantity</label>
    	<input type="number" required class="form-control" name="new_quantity" id="new_quantity" value='. $quantity .' min="0" default=1>
  		</div>
        
        <div class="form-group">
        
    	<label for="unitPrice">Unit Price</label>
    	<div class="input-group">
    	<span class="input-group-addon" name="basic-addon1">£</span>
		
        <input type="number" class="form-control" name="new_unitPrice" id="new_unitPrice" value='. $unitPrice .' step=0.01 min="0.00" required aria-describedby="basic-addon1"></div>
  		</div>
        
      <div class="form-group">
    	<label for="date">Date</label>
    	<input type="text" required class="form-control" name="new_invoiceDate" id="new_invoiceDate" value="'. $invoiceDate .'" required>
  		</div>
        
        <div class="form-group">
    	<label for="customerID">CustomerID</label>
    	<input type="text" required class="form-control" name="new_customerID" id="new_customerID" value="'. $customerID .'" required>
  		</div>
        
      <div class="form-group">
    	<label for="country">Country</label>
    	<input type="text" required class="form-control" name="new_country" id="new_country" value="'. $country .'" required>
  		</div>
       <div class="ol-md-offset-4"> 
      <div class="form-group">
      	<button type="submit" class="btn btn-success btn-lg">Modify</button>
        <button type="reset" class="btn btn-info btn-lg">Reset</button>
  	  </div></div> 
	</form>';
?>
    </br>
    </br>
  </div>
  </div>

  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>