<?php

	$orderId = intval($_REQUEST['orderId']);
	$bookId = $_REQUEST['bookId'];
	$orderAmount = $_REQUEST['orderAmount'];
	$price = $_REQUEST['price'];
	$userId = $_REQUEST['userId'];

	include 'conn.php';
	$sql = "update orders set bookId='$bookId',orderAmount='$orderAmount',
		userId='$userId',price='$price' where orderId=$orderId";
	$result = mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
