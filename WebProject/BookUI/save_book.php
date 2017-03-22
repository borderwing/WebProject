<?php

	$bookId = $_REQUEST['bookId'];
	$author = $_REQUEST['author'];
	$price = $_REQUEST['price'];
	$leftAmount = $_REQUEST['leftAmount'];

	include 'conn.php';

	$sql = "insert into books(bookId, author, price, leftAmount) values($bookId, '$author', $price, $leftAmount)";
	$result = @mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
