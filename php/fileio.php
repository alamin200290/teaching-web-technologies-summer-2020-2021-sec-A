<?php

	/*$file = fopen('test.txt', 'r');
	$data = fread($file, filesize('test.txt'));
	echo $data;
	fclose($file);*/

	/*$file = fopen('test.txt', 'w');
	fwrite($file, 'this is new content...');
	fclose($file);
	echo "done";*/

	$file = fopen('test.txt', 'a');
	fwrite($file, 'this is old content...');
	fclose($file);
	echo "done";

?>