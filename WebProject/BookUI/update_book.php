<?php

	$bookId = intval($_REQUEST['bookId']);
	$author = $_REQUEST['author'];
	$price = $_REQUEST['price'];
	$leftAmount = $_REQUEST['leftAmount'];

	include 'conn.php';
	$sql = "update books set author='$author',price='$price',
		leftAmount='$leftAmount' where bookId=$bookId";
	$result = @mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
