<?php require_once ("header.php")?>
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
<?php require_once ("footer.php")?>
