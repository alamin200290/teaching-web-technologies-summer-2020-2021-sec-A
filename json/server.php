<?php
	
	$data = $_POST['mydata'];
	$mydata = json_decode($data);

	$myarray =['name'=>'alamin', 'id'=>12, 'dept'=>'CS'];

	header('Content-type: application/json');
	echo json_encode($myarray);
?>