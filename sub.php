<?php 

	$email = $_POST["email"]."\r\n";


	if($email != null){

		$soubor=fopen("email.txt", "a");
		fwrite($soubor, $email);
		header("Location: index.html");

	}else{
		echo "Nezadali jste email";
	}
	
 ?>