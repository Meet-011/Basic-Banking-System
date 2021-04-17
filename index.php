<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



</head>
<body> 
 

<div class="center head mt-0">

<nav class="navbar navbar-expand-sm navbar-light bg-light">
<!-- <nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;" > -->
  <!-- Brand/logo -->
  <a href="#" class="navbar-brand">
            <img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png" height="60" >
        </a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php"><h6>Home</h6></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./php/transfermoney.php"><h6>View Customers</h6></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./php/transactionhistory.php"><h6>Transactions</h6></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="./php/about.php"><h6>About Us</h6></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="./php/contact.php"><h6>Contact Us</h6></a>
    </li>
  </ul>
</nav>


<div class="container py-4">
<div class="card-deck-wrapper">
<div class="card-deck">


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/transaction.jpg" style="width: auto; height: 280px"; alt="Card image cap">
  <div class="card-body"> 
  <div class=" text-center">
    
    <button onclick="location.href='./php/transfermoney.php'" class="btn btn-primary"><b>Perform Transactions</b></button>
    </div>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/transaction history.jpg" style="width: auto; height: 280px"; alt="Card image cap">
  <div class="card-body">
  <div class=" text-center">
  
  <button onclick="location.href='./php/transactionhistory.php'" class="btn btn-primary"><b>Transaction History</b></button>
  </div></div>
</div>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/customer.jpg" style="width: auto; height: 280px"; alt="Card image cap">
  <div class="card-body">
  <div class=" text-center">
  
  <button class="btn btn-primary" type="button" onclick="location.href='tel:123-456-7890'" ><b>Customers Support</b></button>

  </div></div>
</div>
</div>
</div>
</div>
</div>

<footer class="bg-light text-center text-lg-start">

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  
<h6 class="info"><b>2021 © Made by Meet Panchal</b></h6>
    The Sparks Foundation
  </div>
 
</footer>

<script src="./js/main.js"></script>

</body>
</html>
