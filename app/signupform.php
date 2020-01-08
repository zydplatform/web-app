<?php
require_once('config.php');
	$fname =  trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$address = trim($_POST['address']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	// $encryption =md5($password);

	if($fname!==''||$lname!==''||$address!==''||$email!==''||$password!==''){
		//inserting data
		$insert_query =$mysqli->prepare("insert into signup(fname,lname,address,email,password)values(?,?,?,?,?)");
		$insert_query->bind_param("sssss",$fname,$lname,$address,$email,$password);
		$insert_query->execute();
		if($insert_query->execute()===TRUE){
		// echo "query not executed successfully";
	}
	else{
			// echo "query is executed";
	}
		// echo "variables not empty";		
	
	}
	else{
		// echo "variables empty";	
	}

$insert_query->close();
$mysqli->close();
?>