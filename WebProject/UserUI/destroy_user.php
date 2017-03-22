<?php

	$id = $_REQUEST['userId'];

	include 'conn.php';

	$sql = "delete from users where userId = $id";
	$result = mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
