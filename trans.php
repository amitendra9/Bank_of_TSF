<?php require_once ("header.php")?>
<div class="container col-8 p-3 mt-3 text-center bg-dark">
    <?php
		
		if ( isset($_SESSION['error']) ) {
             echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
            unset($_SESSION['error']);
        }
        if ( isset($_SESSION['success']) ) {
            echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
             unset($_SESSION['success']);
        }
		$stmt = $pdo->query("SELECT * FROM customers");
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
				
	?>
	<form action="success.php" method="post"> 
		<?php
            echo "<label class='mr-5 font-weight-bold'>Sender Customer: </label>";
			echo "<select name='sender' class='p-1 mb-3 col-3'>";
			foreach ($rows as $key){
                if($key['userName']!=$_POST['userName']){
                   echo "<option>\n";
                   echo $key['userName'];
                   echo"</option>\n";
                }    
            } 
            echo "</select><br>";
            echo "<label class='mr-5 font-weight-bold'>Reciever Customer: </label>";
            echo "<select name='reciever' class='p-1 mb-3 col-3'>";
			foreach ($rows as $key){
                if($key['userName']!=$_POST['userName']){
                    echo "<option>\n";
					echo $key['userName'];
				    echo"</option>\n";
                } 	
            } 
            echo "</select><br>";
		?>
		<label class='mr-5 font-weight-bold'>Amount</label>
		<input type="number" class='col-2 mt-3 required' name="trans">
		<input type="submit" value="Transfer">
	</form>
</div>
    <?php require_once ("footer.php")?>
