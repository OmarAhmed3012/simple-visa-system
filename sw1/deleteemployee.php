<?php

session_start();
require_once 'oop/dbFunctions.php';
$db = new dbFunction();

/*
 * Method : Post
 * Params : Name,Email,Password,Phone
 * Result : Json
 */

$response = array();

if ($_SESSION["Type"]==0){
	if(isset($_POST['Email'])){
		$email = $_POST['Email'];
		if ($db->deleteEmployee($email)){
			header('Location:H-VISA/admin.php');
			$response["error_msg"] = "delete success";
			echo json_encode($response);
		}else{
			$response["error_msg"] = "delete failed";
			echo json_encode($response);
		}
	}else{
		$response["error_msg"] = "error in type ";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>