<?php 
	require_once(models() . "model_user.php");
	$objUser = new model_user();
	$objUser->user_id = $_SESSION["user_id"];
	$objUser->first_name = strtoupper($_POST["txtfirst_name"]);
	$objUser->last_name = strtoupper($_POST["txtlast_name"]);
	$objUser->username = $_POST["txtusername"];
	$objUser->email = $_POST["txtemail"];
	$objUser->phone = $_POST["txtphone"];
	$objUser->password = $_POST["txtpassword"];
	$operation = $_REQUEST["operation"];

	switch ($operation) {
		case "change":

		break;
		default:
			$arr = $objUser->get();
			if(count($arr) > 0){
				$first_name = $arr[0]["first_name"];
				$last_name = $arr[0]["last_name"];
				$username = $arr[0]["username"];
				$email = $arr[0]["email"];
				$phone = $arr[0]["phone"];
			}
		break;
	}
?>