<?php 
	require_once(models() . "model_role.php");
	$objRole = new model_role();

	$objRole->role_id = $_REQUEST["id"];
	$objRole->name = strtoupper($_POST["txtname"]);
	$operation = $_REQUEST["operation"];
	$error = 0;

	switch ($operation) {
		case 'add':
			$cant = $objRole->get("byname");
			if(count($cant) > 0){
				$error = 1;
			}else{
				$objRole->add();
			}
		break;
		case 'load':
			$arr = $objRole->get();
			if(count($arr) > 0){
				$id = $arr[0]["role_id"];
				$name = $arr[0]["name"];
				$isactive = $arr[0]["isactive"];
			}else{

			}
		break;

		case "change":
			$arr = $objRole->get("byname");
			if(count($arr) > 0){
				$error = 1;
			}else{
				$objRole->change();
			}
		break;

		case 'desactivate':
			if(!$objRole->isactive("N")){
				$error = 1;
			}
		break;

		case 'activate':
			if(!$objRole->isactive("Y")){
				$error = 1;
			}
		break;
	}

	#show all registers from table
	$all = $objRole->get("all");
	$cont = 0;
	$string = "";

	while($all[$cont]["role_id"] != null){
		$string.="<tr>";
			$string.="<td>".($cont+1)."</td>";
			$string.="<td>".$all[$cont]["name"]."</td>";
			$string.="<td>".setactions($all[$cont]["isactive"],$all[$cont]["role_id"],"role")."</td>";
		$string.="</tr>";
		$cont++;
	}
?>