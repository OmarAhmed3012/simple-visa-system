<?php

session_start();
require_once 'oop/dbFunctions.php';
$db = new dbFunction();



$response = array();
if ($_SESSION["Type"]==1||$_SESSION["Type"]==2){
	if(isset($_POST['Title'])&&isset($_POST['Topic'])){
		$userId  = $_SESSION["ID"];
		$type    = $_POST["Title"];
		$topic =  $_POST['Topic'];
		if ($db->addFeedback($userId,$type,$topic)){
			if ($_SESSION["Type"]==1){
				header('Location:H-VISA/hr.php');
			}else {
				header('Location:H-VISA/employee.php');
			}
			
			$response["error_msg"] = "feedback send";
			echo json_encode($response);
		}else{
			$response["error_msg"] = "error in send";
			echo json_encode($response);
		}
	
	}else{
		$response["error_msg"] = "error in topic data";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>