<?php require_once ("header.php")?>
	<div class="container p-3 mt-5 mb-5 bg-dark col-6 border border-white">
		<?php 
			$stmt = $pdo->query("SELECT * FROM customers");
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "<h2 id='Name' class='text-center p-3 mb-3'>";  
			echo $_POST['user']."'s Profile";
			echo "</h2>";
			foreach($rows as $row){
				if ($_POST['user']==$row['userName']){
					echo '<table class="table bg-dark text-white">'."\n";
					echo "<tr><td>";
					echo "Customer Name";
					echo "</td><td name='usersName'>";
					echo $row['userName'];
					echo "</td><tr>";

					echo "<tr><td>";
					echo "Customer id";
					echo "</td><td>";
					echo $row['customer_id'];
					echo "</td></tr>";
					
					echo "<tr><td>";
					echo "Gender";
					echo "</td><td>";
					echo $row['gender'];
					echo "</td></tr>";

					echo "<tr><td>";
					echo "DOB";
					echo "</td><td>";
					echo $row['dob'];
					echo "</td></tr>";

					echo "<tr><td>";
					echo "Email id";
					echo "</td><td>";
					echo $row['email'];
					echo "</td></tr>";

					echo "<tr><td>";
					echo "Current Balance (Rs.)";
					echo "</td><td>";
					echo $row['currentBalance'];
					echo "</td><tr>";

					echo "<tr><td>";
					echo "Address";
					echo "</td><td>";
					echo $row['address'];
					echo "</td><tr>";
					
					echo "</table>\n";
				}
			}
			
		?>	
		<div class="p-3 ml-5 col-4 bg-primary text-white border border-raduis border-white rounded-lg text-center">
		<a href="trans.php">Transfer Money</a>
		</div>
	</div>
<?php require_once ("footer.php")?>
