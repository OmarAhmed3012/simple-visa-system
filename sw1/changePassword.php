<?php

session_start();
require_once 'oop/dbFunctions.php';
$db = new dbFunction();


$response = array();
if ($_SESSION["Type"]==1||$_SESSION["Type"]==2){
	if(isset($_POST['Pass'])&&isset($_POST['oldPass'])){
		$userId  = $_SESSION["ID"];
		$type    = $_SESSION["Type"];
		$password =  $_POST['Pass'];
		if ($_POST['Pass']==$_POST['oldPass']){
			if ($db->changePass($type,$userId,$password,$_POST['oldPass'],$_SESSION["UID"])){
			if ($_SESSION["Type"]==1){
				header('Location:H-VISA/hr.php');
			}else {
				header('Location:H-VISA/employee.php');
			}
				$response["error_msg"] = "feedback send";
				echo json_encode($response);
			}else{
				$response["error_msg"] = "error in change";
				echo json_encode($response);
			}
		}else{
			$response["error_msg"] = "check pass again";
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