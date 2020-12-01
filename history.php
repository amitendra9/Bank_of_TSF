<?php require_once ("header.php")?>
    <div class="container col-8 p-3 mt-3">
    <?php
       
        $stmt = $pdo->query("SELECT * FROM transfers");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<table class="table bg-dark text-white">'."\n";
            echo "<tr><td>";
            echo " Transaction id";
            echo "</td><td>";
            echo "Sender";
            echo "</td><td>";
            echo "Reciever";
            echo "</td><td>";
            echo "Amount(Rs.)";
            echo "</td></tr>\n";
		foreach ( $rows as $row ) {
		    echo "<tr><td>";
		    echo($row['transaction_id']);
		    echo("</td><td name='user1'>");
		    echo($row['sender']);
		    echo("</td><td>");
		    echo($row['reciever']);
		    echo("</td><td>");
			echo($row['amt']);
			echo("</td></tr>\n");
		}
        echo "</table>\n";
    ?>
    </div>
    <div>
        
        </P>
		<form class="container m-5" action="index.php">
            <input type="submit" value="Back to Home" class="ml-5 col-2 p-3 bg-dark text-white border border-raduis border-white rounded-lg text-center">
        </form>
	</div>
<?php require_once ("footer.php")?>
