<?php

	$orderId = intval($_REQUEST['orderId']);

	include 'conn.php';

	$sql = "delete from orders where orderId = $orderId";
	$result = mysqli_query($conn, $sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
		echo json_encode(array('msg'=>'Some errors occured.'));
	}
?>
