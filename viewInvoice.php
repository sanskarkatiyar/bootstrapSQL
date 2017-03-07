<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Retail: VIEW (Invoice)</title>
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

  <div class="container">

  <ul class="nav nav-tabs nav-justified">
    <li role="presentation"><a href="index.html">Home</a></li>
    <li role="presentation"><a href="insert.html">Insert</a></li>
    <li role="presentation"><a href="update.html">Update/Delete</a></li>
      <li role="presentation" class="active"><a href="#">View</a></li>
  </ul>
  </br>
  <div class="container col-md-8 col-md-offset-2">
  <br>
  <br>
  <a href="view.html">
  
  </a>  
  <br>
  <br>
  </div>
  </div>

  <div class="container text-center">
    <a href="view.html">
    <button class="btn btn-success">Execute Another Query</button></a><br><br>

  </div>
  <div class="container">
  <div class="panel panel-primary">
<?php
    $servername = "localhost";
    $username = "bce0619";
    $password = "sanskar";
    $dbname = "onlineretail";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $invNum = $_POST["invNum"];

    $sql = "SELECT StockCode,Description,Quantity,UnitPrice FROM retail WHERE InvoiceNo=" . "\"" . $invNum . "\";";

    $grandTotal=0.00;
    $result = mysqli_query($conn, $sql);

  echo '<div class="panel-heading"><h4>Invoice: <strong>' . $invNum . '</strong></h4></div>
    <table class="table table-striped">
    <tr>
      <th>StockCode</th>
      <th>Description</th>
      <th>Quantity</th>
      <th>UnitPrice</th>
      <th>Total</th>
    </tr>';

        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            
            $itemTotal=$row["UnitPrice"]*$row["Quantity"];
            $grandTotal=$grandTotal+$itemTotal;
            
            echo "<tr>
            <td>" . $row["StockCode"] . "</td>
            <td>" . $row["Description"] . "</td>
            <td>" . $row["Quantity"] . "</td>
            <td>" . $row["UnitPrice"] . "</td>
            <td>" . $itemTotal . "</td>
            </tr>";
            }
        } else {
            echo "No Such Invoice Exists";
        }

    echo '</table><div class="panel-footer text-right">Grand Total: <strong>£' . $grandTotal . '</strong></div></div></div>';

  mysqli_close($conn); 
  ?>

  <!-- SCRIPTS -->
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>