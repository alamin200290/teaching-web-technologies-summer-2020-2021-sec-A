<?php

	$name 	= "xyz";
	$id		= 123;
	$cgpa	= 2.1;

	$student = array(1, 'alamin', 2.3);	
	$student[0];

	$student = [1, 'alamin', '2.3'];	
	$student[0];

	$students =array(
						array(1, 'xyz', 2.0),
						array(2, 'abc', 3.0),
						array(3, 'pqr', 4.0),
					);
	$students[2][2];

	$students =[
					[1, 'xyz', 2.0],
					[2, 'abc', 3.0],
					[3, 'pqr', 4.0],
				];
	$students[2][2];

	$student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>'2.3'];
	$student['name'];

	$students = [
					's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>2.5],
					's2'=>['id'=>1, 'name'=>'xyz', 'cgpa'=>2.3],
					's3'=>['id'=>1, 'name'=>'abc', 'cgpa'=>2.8],
				];
	$students['s3']['cgpa'];

	$students = [
					['id'=>1, 'name'=>'alamin', 'cgpa'=>2.5],
					['id'=>1, 'name'=>'xyz', 'cgpa'=>2.3],
					['id'=>1, 'name'=>'abc', 'cgpa'=>2.8],
				];
	//echo $students[2]['cgpa'];

	//echo 'alamin'.' cgpa:1.5';
	//print('alamin');

	//echo $id;

	function sum($a=0, $b=0){
		return $a+$b;
	}

	//echo sum();

	$a = '1';
	$b = 1;

	/*if($a === $b){
		echo "true";
	}else{
		echo "false";
	}*/
	
	/*$i=0;
	while ($i < 5) {
		echo "print my name...";
		$i++;
	}*/

	/*$students =[
					[1, 'xyz', 2.0],
					[2, 'abc', 3.0],
					[3, 'pqr', 4.0],
				];

	for($i=0; $i<count($students); $i++){
		for ($j=0; $j < count($students[$i]) ; $j++) { 
			echo $students[$i][$j]." ";
		}
		echo "--";
	}*/


	$student=['id'=>1, 'name'=>'alamin', 'cgpa'=>2.5];

	/*foreach ($student as $std) {
		echo "<h3>".$std."</h3>";
	}*/
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>This is PHP page</title>
</head>
<body>
	<h1>Welcome! <?php echo $name ?> </h1>
</body>
</html>