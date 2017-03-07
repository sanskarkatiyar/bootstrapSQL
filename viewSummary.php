<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Retail: VIEW (Summary)(</title>
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

  <div class="container col-md-6 col-md-offset-3">
  <div class="panel panel-default">
  <div class="panel-heading"><h4><strong>Current Summary of Retail</strong></h4></div>
  </div>
  <ul class="list-group">
  <?php
    $servername = "localhost";
    $username = "bce0619";
    $password = "sanskar";
    $dbname = "onlineretail";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = 'SELECT COUNT(DISTINCT InvoiceNo) AS total FROM retail;';
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);
    echo '<li class="list-group-item">Total Invoices Issued: <span class="badge">' . $data['total'] . '</span></li>';

    $sql = "SELECT SUM(Quantity) AS total FROM retail;";
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);
    echo '<li class="list-group-item">Total Units Sold: <span class="badge">' . $data['total'] . '</span></li>';

    $sql = "SELECT COUNT(DISTINCT Country) AS total FROM retail;";
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);
    echo '<li class="list-group-item">Number of Countries Delivered To: <span class="badge">' . $data['total'] . '</span></li>';

    $sql = "SELECT COUNT(DISTINCT StockCode) AS total FROM retail;";
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);
    echo '<li class="list-group-item">Total Stocks Brought In: <span class="badge">' . $data['total'] . '</span></li>';

    $sql = "SELECT COUNT(DISTINCT CustomerID) AS total FROM retail;";
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);
    echo '<li class="list-group-item">Total Customers: <span class="badge">' . $data['total'] . '</span></li>';

mysqli_close($conn);
    ?>
</ul>
</div>
  </div>
   <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>