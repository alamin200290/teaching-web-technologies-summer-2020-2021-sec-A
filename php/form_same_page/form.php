<?php
	
	$username = "";
	
	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		if($username == ""){
			echo "invalid username!";
		}
	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="post" >

		Username: <input type="text" name="username" value="<?php echo $username; ?>" />
				<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>