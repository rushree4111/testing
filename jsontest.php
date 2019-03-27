<?php
	$response = array();

	$array["id"]= 1;
	$array["name"] = "Ram";
	$array["email"] = "ram@gmail.com";

	$response[] = $array;

	$array["id"]= "2";
	$array["name"] = "Shyam";
	$array["email"] = "shyam@gmail.com";

	$response[] = $array;

	$array["id"]= "3";
	$array["name"] = "Hari";
	$array["email"] = "hari@gmail.com";

	$response[] = $array;

	$result["data"] = $response;
	$result["status"] = "200";
	echo "<pre>";
	//print_r($response);

	echo json_encode($result);



?>