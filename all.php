
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Bank Of TSF</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href=css/styles.css>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>

<body class="bg-primary text-white">
	<!-- -->
    <header class="bg-dark">
        <img src="img/Logo.png"  alt="Logo" height="72dp" class="float-left">
        
        <h1 class="display-3 font-weight-bold">BANK OF TSF</h1>
        
    </header>
	<!-- -->
    <nav class="pl-5 bg-dark">
            <ul class="nav">
            <li class="ml-5 mr-3 mb-3 col-2 nav-item text-center border border-raduis border-white rounded-lg"><a href="index.php" class="nav-link">Home</a></li>
            
            <li class="ml-5 mr-3 mb-3 col-2 nav-item text-center border border-raduis border-white rounded-lg"><a href="all.php" class="nav-link">View All Customer</a></li>
            <li class="ml-5 mr-5 mb-3 col-2 nav-item text-center border border-raduis border-white rounded-lg"><a href="trans.php" class="nav-link">Transfer Money</a></li>
            <li class="ml-5 mr-5 mb-3 col-2 nav-item text-center border border-raduis border-white rounded-lg"><a href="history.php" class="nav-link">Transfer History</a></li>
            </ul>
            
    </nav>
	<div class="container col-8 p-3 mt-3">
		<h3 class="text-center">Details of all Customers</h3>
		<?php 
			require_once "pdo.php";
			echo "<pre>\n";
			$stmt = $pdo->query("SELECT * FROM customers");
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo '<table class="table bg-dark text-white">'."\n";
				echo "<tr><td>";
				echo 'Customer id';
				echo("</td><td name='user1'>");
				echo 'Customer Name';
				echo ("</td><td>");
				echo 'Email id';
				echo ("</td><td>");
				echo'Current Balance';
				echo("</td></tr>\n");
			foreach ( $rows as $row ) {
				echo "<tr><td>";
				echo($row['customer_id']);
				echo("</td><td name='user1'>");
				echo($row['userName']);
				echo("</td><td>");
				echo($row['email']);
				echo("</td><td>");
				echo($row['currentBalance']);
				echo("</td></tr>\n");
			}
			echo "</table>\n";
			echo '<h3>Choose Customers</h3>';
			echo "<form action='single.php' method='post' >";
			echo "<select name='user' class='p-3 ml-5 mr-5 col-6'>";
			foreach ($rows as $key){
				echo "<option >\n";
				echo $key['userName'];
				echo"</option>\n";
			}
			echo "</select>";
			echo "<input type='submit' class='p-3 bg-dark text-white col-4'value='View Profile'>";
			echo "</form>" ;	
		?>		
	</div>
    <footer class="bg-dark p-3">
        <h4 class="">By Amitendra Singh</h4>
        <p class="p-3">
            <a href="https://github.com/amitendra9"><img src="https://img.icons8.com/ios-filled/2x/github-2.png" alt="" height="36dp"/></a>    
            <a href="https://auth.geeksforgeeks.org/user/amitendra9/profile"><img src="https://img.icons8.com/color/2x/GeeksforGeeks.png" alt="" height="36dp"/></a>     
            <a href="https://www.youtube.com/channel/UC7UgGDO79n7G8iHVVikmVZA?view_as=subscriber"><img src="https://img.icons8.com/metro/2x/youtube.png" alt="" height="36dp"/></a>      
            <a href="https://www.facebook.com/amitendra.singh.142/"><img src="img/fb.png" alt=""/></a>
        </p>
    </footer>
</body>
</html>
