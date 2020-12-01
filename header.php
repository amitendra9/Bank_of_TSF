
<?php
require_once "pdo.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Bank Of TSF</title>
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php require_once ("bootstrap.php")?>
</head>

<body class="bg-primary text-white">
    <!--Logo With Subject Title -->
    <header class="bg-dark">
        <img src="img/Logo.png"  alt="Logo" height="72dp" class="float-left">
        
        <h1 class="display-3 font-weight-bold">BANK OF TSF</h1>
        
    </header>
    <!-- -->
    <!--Navigation bar -->
    <nav class="pl-5 bg-dark">
            <ul class="nav">
            <li class="ml-5 mr-3 mb-3 col-2 nav-item text-center border border-raduis border-white rounded-lg"><a href="index.php" class="nav-link">Home</a></li>
            
            <li class="ml-5 mr-3 mb-3 col-2 nav-item text-center border border-raduis border-white rounded-lg"><a href="all.php" class="nav-link">View All Customer</a></li>
            <li class="ml-5 mr-5 mb-3 col-2 nav-item text-center border border-raduis border-white rounded-lg"><a href="trans.php" class="nav-link">Transfer Money</a></li>
            <li class="ml-5 mr-5 mb-3 col-2 nav-item text-center border border-raduis border-white rounded-lg"><a href="history.php" class="nav-link">Transfer History</a></li>
            </ul>
            
    </nav>
