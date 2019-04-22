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
	if(isset($_POST['Name'])&&isset($_POST['Email'])&&isset($_POST['Password'])&&isset($_POST['Phone'])&&isset($_POST['Passportnum'])
		&&isset($_POST['City'])){

		$name  	  = $_POST['Name'];
		$email    = $_POST['Email'];
		$password =  $_POST['Password'];
		$phone =  $_POST['Phone'];
		$passportnum = $_POST['Passportnum'];
		$city = $_POST['City'];
		if ($db->checkUser($email)){
			$response["error_msg"] = "User already exist with ".$email;
			echo json_encode($response);
		}else{
			$user = $db->addEmployee($name,$email,$password,$phone,$passportnum,$city);
			if($user){
				header('Location:H-VISA/admin.php');
				$response["error_msg"] = "register success";
				echo json_encode($response);
			}else{
				$response["error_msg"] = "error in registeration";
				echo json_encode($response);
			}
		}
	}else{
		$response["error_msg"] = "error in registeration data";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>