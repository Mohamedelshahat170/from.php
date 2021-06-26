<?php 

    //PDO   = php data opjects
    //dsn   = data source name
	$dsn      = "mysql:host=localhost;dbname=project";
	$username = "root";
	$pass     = "";
	$option   = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

	try{

		$con = new PDO($dsn , $username , $pass , $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$stmt = $con->prepare("INSERT INTO users (user_name, user_email, user_phone ,user_meg)
	    VALUES (:user_name , :user_email, :user_phone , :user_meg)");

	   $stmt->bindParam(':user_name' , $user);
	   $stmt->bindParam(':user_email' , $email);
	   $stmt->bindParam(':user_phone', $phone);
	   $stmt->bindParam(':user_meg'  , $meg);
	   $stmt->execute();
		echo "you are connect";
	}
	catch(PDOException $e){
		echo "falid" . $e->getMessage();

	}
    
    $con = null;

    ?>
 
