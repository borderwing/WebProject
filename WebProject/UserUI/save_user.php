<?php

	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['secondname'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$userId = $_REQUEST['userId'];

	include 'conn.php';

	$sql = "insert into users(firstname,secondname,phone,email,userId) values('$firstname','$lastname', $phone,'$email', $userId)";
	$result = mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
