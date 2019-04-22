<?php

session_start();
require_once 'oop/dbFunctions.php';
$db = new dbFunction();

$response = array();
if ($_SESSION["Type"]==1){
	if(isset($_POST['Statu'])){

		if ($db->checkVisa($_POST['Visaid'])){

				if($db->editStatu($_POST['Visaid'],$_POST['Statu'])){
					echo 1;

				}
			
		}else{
			$response["error_msg"] = "this user dont exist";
			echo json_encode($response);
		}
	}else{
		$response["error_msg"] = "check email ";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>