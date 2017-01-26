<?php 
	require_once(models() . "model_user.php");
	$objUser = new model_user();
	$objUser->username = $_POST["txtusername"];
	$objUser->password = $_POST["txtpassword"];
	$operation = $_REQUEST["operation"];
	$error = 0;

	switch ($operation) {
		case 'login':
			$get = $objUser->get("login");
			if( count($get) > 0 ){
				$_SESSION["role_id"] = $get[0]["role_id"];
				$_SESSION["role"] = $get[0]["role"];
				$_SESSION["first_name"] = $get[0]["first_name"];
				$_SESSION["last_name"] = $get[0]["last_name"];
				$_SESSION["username"] = $get[0]["username"];
				$_SESSION["access"] = Array();

				if($_SESSION["role_id"] == 1){
					$_SESSION["access"][0]["id"] = 2;
					$_SESSION["access"][0]["view"] = "role";
					$_SESSION["access"][1]["id"] = 3;
					$_SESSION["access"][1]["view"] = "user";
					$_SESSION["access"][2]["id"] = 4;
					$_SESSION["access"][2]["view"] = "web";
				}else if ($_SESSION["role_id"] == 2){
					$_SESSION["access"][0]["id"] = 2;
					$_SESSION["access"][0]["view"] = "web";
				}
				print("<script> document.location.href='?v=dashboard' </script>");
			}else{
				$error = 1;
			}
		break;
		case 'logout':
			unset($_SESSION["role_id"]);
			unset($_SESSION["role"]);
			unset($_SESSION["first_name"]);
			unset($_SESSION["last_name"]);
			unset($_SESSION["username"]);
			unset($_SESSION["access"]);
			session_destroy();
			print("<script> document.location.href='?v=login' </script>");
		break;
	}
?>