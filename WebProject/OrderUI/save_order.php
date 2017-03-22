<?php

	$bookId = $_REQUEST['bookId'];
	$orderAmount = $_REQUEST['orderAmount'];
	$orderId = $_REQUEST['orderId'];
	$price = $_REQUEST['price'];
	$userId = $_REQUEST['userId'];

	include 'conn.php';

	$sql = "insert into orders(bookId,orderAmount,orderId,price,userId) values($bookId, $orderAmount, $orderId, $price, $userId)";
	$result = mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
