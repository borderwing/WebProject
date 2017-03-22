<?php

	$id = intval($_REQUEST['userId']);
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['secondname'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];

	include 'conn.php';
	$sql = "update users set firstname='$firstname',secondname='$lastname',
		phone='$phone',email='$email' where userId=$id";
	$result = @mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
