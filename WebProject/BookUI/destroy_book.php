<?php

	$id = intval($_REQUEST['bookId']);

	include 'conn.php';

	$sql = "delete from books where bookId=$id";
	$result = @mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
