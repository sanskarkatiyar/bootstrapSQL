<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Retail: VIEW (Modify)</title>
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
      <li role="presentation"><a href="view.html">View</a></li>
  </ul>
  </br>
    <div class="container text-center">
    <a href="update.html">
    <button class="btn btn-success">Execute Another Query</button></a><br><br>

  </div>
  <br>
  <div class="container col-md-8 col-md-offset-2">
  <br>
  </div>
  </div>
  <div class="container">
  <table class="table table-striped">
    <tr>
      <th>InvoiceNo</th>
      <th>StockCode</th>
      <th>Description</th>
      <th>Quantity</th>
      <th>UnitPrice</th>
      <th>Timestamp</th>
      <th>CustomerID</th>
      <th>Country</th>
      <th>Modify/Delete</th>
    </tr>

<?php
    $servername = "localhost";
    $username = "bce0619";
    $password = "sanskar";
    $dbname = "onlineretail";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $operation = $_POST["operation"];
    $comparator = $_POST["comparator"];
    $val = $_POST["val"];
    $limits = $_POST["limiter"];

    if($comparator=="Quantity" || $comparator=="UnitPrice" || $comparator=="CustomerID")
    {
      $sql = "SELECT * FROM retail WHERE ". $comparator . $operation . $val . " LIMIT " . $limits . ";";
    }
    else
    {
      if($operation="="){
        $operation=" LIKE ";
      }
      else
      {
        $operation=" NOT LIKE ";
      }
      
      $sql = "SELECT * FROM retail WHERE ". $comparator . $operation . " \"" . $val. "%\"" . "LIMIT " . $limits . ";";

    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo 
            '<tr>
            <td>' . $row["InvoiceNo"] . '</td>
            <td>' . $row["StockCode"] . '</td>
            <td>' . $row["Description"] . '</td>
            <td>' . $row["Quantity"] . '</td>
            <td>' . $row["UnitPrice"] . '</td>
            <td>' . $row["InvoiceDate"] . '</td>
            <td>' . $row["CustomerID"] . '</td>
            <td>' . $row["Country"] . '</td>
            <td>
            <form style="float:left;" action="updateMod.php?InvoiceNo=' . $row["InvoiceNo"] . '&StockCode=' . $row["StockCode"] . '&Description=' . $row["Description"] . '&Quantity=' . $row["Quantity"] . '&UnitPrice=' . $row["UnitPrice"] . '&InvoiceDate=' . $row["InvoiceDate"] .'&CustomerID=' . $row["CustomerID"] . '&Country=' . $row["Country"] .'" method="POST">
            <input type="submit" class="btn btn-primary btn-xs" value="Modify">&nbsp;</button>
            </form>

            <form style="float:left;" action="delete.php?InvoiceNo=' . $row["InvoiceNo"] . '&StockCode=' . $row["StockCode"] . '&Description=' . $row["Description"] . '&Quantity=' . $row["Quantity"] . '&UnitPrice=' . $row["UnitPrice"] . '&InvoiceDate=' . $row["InvoiceDate"] .'&CustomerID=' . $row["CustomerID"] . '&Country=' . $row["Country"] .'" method="POST">

            <input type="submit" class="btn btn-danger btn-xs" value="Delete"></button></td>
            </form>
            </tr>';

        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>
</table>
  </div>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>