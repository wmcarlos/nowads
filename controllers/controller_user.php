<?php 
	require_once(models() . "model_user.php");
	require_once(models() . "model_role.php");
	$objUser = new model_user();
	$objrole = new model_role();

	$objUser->user_id = $_REQUEST["id"];
	$objUser->role_id = $_POST["txtrole_id"];
	$objUser->first_name = strtoupper($_POST["txtfirst_name"]);
	$objUser->last_name = strtoupper($_POST["txtlast_name"]);
	$objUser->username = $_POST["txtusername"];
	$objUser->email = $_POST["txtemail"];
	$objUser->phone = $_POST["txtphone"];
	$objUser->password = $_POST["txtpassword"];
	$operation = $_REQUEST["operation"];
	$error = 0;

	switch ($operation) {
		case 'add':
			$cant = $objUser->get("byname");
			if(count($cant) > 0){
				$error = 1;
			}else{
				$objUser->add();
			}
		break;
		case 'load':
			$arr = $objUser->get();
			if(count($arr) > 0){
				$id = $arr[0]["user_id"];
				$role_id = $arr[0]["role_id"];

				$data = $objrole->get("slt");
				$getroles = LoadSelect($data, $role_id);

				$first_name = $arr[0]["first_name"];
				$last_name = $arr[0]["last_name"];
				$username = $arr[0]["username"];
				$email = $arr[0]["email"];
				$phone = $arr[0]["phone"];
				$password = $arr[0]["password"];
				$isactive = $arr[0]["isactive"];
			}else{

			}
		break;

		case "change":
			$arr = $objUser->get("byname");
			if(count($arr) > 0){
				$error = 1;
			}else{
				$objUser->change();
			}
		break;

		case 'desactivate':
			if(!$objUser->isactive("N")){
				$error = 1;
			}
		break;

		case 'activate':
			if(!$objUser->isactive("Y")){
				$error = 1;
			}
		break;

		default:
			$data = $objrole->get("slt");
			$getroles = LoadSelect($data, null);
		break;
	}

	#show all registers from table
	$all = $objUser->get("all");
	$cont = 0;
	$string = "";

	while($all[$cont]["user_id"] != null){
		$string.="<tr>";
			$string.="<td>".($cont+1)."</td>";
			$objrole->role_id = $all[$cont]["role_id"];
			$role_name = $objrole->get("getname")[0]["name"];
			$string.="<td>".$role_name."</td>";
			$string.="<td>".$all[$cont]["first_name"]."</td>";
			$string.="<td>".$all[$cont]["last_name"]."</td>";
			$string.="<td>".$all[$cont]["username"]."</td>";
			$string.="<td>".$all[$cont]["email"]."</td>";
			$string.="<td>".$all[$cont]["phone"]."</td>";
			$string.="<td>".setactions($all[$cont]["isactive"],$all[$cont]["user_id"],"user")."</td>";
		$string.="</tr>";
		$cont++;
	}
?>