<?php

session_start();
require_once 'oop/dbFunctions.php';
$db = new dbFunction();

$response = array();
if ($_SESSION["Type"]==0){
	if(isset($_POST['Email'])){
		if ($db->checkUser($_POST['Email'])){

			if (isset($_POST['Email'])){

				$user = $db->getHr($_POST['Email']);
				if($user){

					$name = $user["name"];
					$email = $user["email"];
					$password = $user["password"];
					$phone = $user["phone"];

				
					if(isset($_POST['Name'])){
						$name = $_POST['Name'];
					}
					if(isset($_POST['Password'])){
						$password = $_POST['Password'];
					}
					if(isset($_POST['Phone'])){
						$phone = $_POST['Phone'];
					}

						if($db->editHr($name,$email,$password,$phone)){
							header('Location:H-VISA/admin.php');
							$response["error_msg"] = "edit success";
							echo json_encode($response);
						}else{
							$response["error_msg"] = "edit faliled";
							echo json_encode($response);
						}
						
					
				}else{
					$response["error_msg"] = "check email";
					echo json_encode($response);
				}
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