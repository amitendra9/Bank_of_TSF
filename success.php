<?php require_once ("header.php")?>
    <!-- -->
    <div class="container col-8 p-3 mt-3 bg-dark">
        <?php
			$stmt = $pdo->query("SELECT * FROM customers");
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            //
            // Data validation
            if ( $_POST['sender'] == $_POST['reciever']) {
                $_SESSION['error'] = '<script>window.alert("Sender and Recivecer should be different")</script>';
                header("Location: trans.php");
                return;
            }
            
            if ( strlen($_POST['trans'])< 1) {
                $_SESSION['error'] = '<script>window.alert("Please fill valid amount")</script>';
                header("Location: trans.php");
                return;
            }
            //
            if ((float)$_POST['trans']<0 || is_numeric((float)$_POST['trans']==TRUE)){
                $_SESSION['error'] = '<script>window.alert("Please fill valid amount")</script>';
                header("Location: trans.php");
                return;
            }

            //Inserting data to transfers table database
            $sql=("INSERT INTO transfers(sender, reciever, amt) VALUES (:sender, :reciever, :amt)");
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':sender' => $_POST['sender'],
                ':reciever' =>  $_POST['reciever'],
                ':amt' => $_POST['trans']));

            //Updating data  of customers table database 
            $sql1 = "UPDATE customers SET currentBalance = :Balance WHERE userName = :username";
            $stmt1 = $pdo->prepare($sql1);
            foreach ($rows as $keys){
                if($keys['userName']==$_POST['sender']){
                    echo  $_POST['sender'];
                    $stmt1->execute(array(
                    ':Balance' => ($keys['currentBalance'] - $_POST['trans']),
                    ':username' => $_POST['sender']));
                }
            }
            foreach ($rows as $keys){
                if($keys['userName']==$_POST['reciever']){
                    echo  $_POST['reciever'];
                    $stmt1->execute(array(
                    ':Balance' => $keys['currentBalance'] + $_POST['trans'],
                    ':username' => $_POST['reciever']));
                }
            }
            $_SESSION['success'] = '<script>window.alert("Transaction is successfully done!!!")</script>';
            header( 'Location: trans.php' ) ;
            return;
        ?>
       
		<form class="container mt-5 mb-5" action="index.php">
            <input type="submit" value="Back to Home" class="p-3 bg-primary text-white border border-raduis border-white rounded-lg text-center">
        </form>
	</div>
    <footer class="bg-dark  p-3">
    
        <h4 class="font-weight-bold">By Amitendra Singh</h4>
        <p>
            <a href="https://github.com/amitendra9"><img src="https://img.icons8.com/ios-filled/2x/github-2.png" alt="" height="36dp"/></a>    
            <a href="https://auth.geeksforgeeks.org/user/amitendra9/profile"><img src="https://img.icons8.com/color/2x/GeeksforGeeks.png" alt="" height="36dp"/></a>     
            <a href="https://www.youtube.com/channel/UC7UgGDO79n7G8iHVVikmVZA?view_as=subscriber"><img src="https://img.icons8.com/metro/2x/youtube.png" alt="" height="36dp"/></a>      
            <a href="https://www.facebook.com/amitendra.singh.142/"><img src="img/fb.png" alt=""/></a>
        </p>
    </footer>
</body>
</html>
