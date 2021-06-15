<?php
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];

		if($username == ""){
			echo "invalid username!";
		}else{
			echo $username;
		}

	}else{
		echo 'invalid request';
	}
?>