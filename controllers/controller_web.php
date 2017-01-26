<?php 
	require_once(models() . "model_web.php");
	require_once(models() . "model_user.php");
	$objWeb = new model_web();
	$objuser = new model_user();

	$objWeb->web_id = $_REQUEST["id"];
	$objWeb->user_id = $_POST["txtuser_id"];
	$objWeb->name = strtoupper($_POST["txtname"]);
	$objWeb->url = $_POST["txturl"];
	$objWeb->blockdays = $_POST["txtblockdays"];
	$objWeb->webkey = $_POST["txtwebkey"];
	$operation = $_REQUEST["operation"];
	$error = 0;

	switch ($operation) {
		case 'add':
			$cant = $objWeb->get("byname");
			if(count($cant) > 0){
				$error = 1;
			}else{
				$objWeb->add();
			}
		break;
		case 'load':
			$arr = $objWeb->get();
			if(count($arr) > 0){
				$id = $arr[0]["web_id"];
				$user_id = $arr[0]["user_id"];

				$data = $objuser->get("slt");
				$getusers = LoadSelect($data, $user_id);

				$name = $arr[0]["name"];
				$url = $arr[0]["url"];
				$blockdays = $arr[0]["blockdays"];
				$webkey = $arr[0]["webkey"];
				$isactive = $arr[0]["isactive"];
			}else{

			}
		break;

		case "change":
			$arr = $objWeb->get("byname");
			if(count($arr) > 0){
				$error = 1;
			}else{
				$objWeb->change();
			}
		break;

		case 'desactivate':
			if(!$objWeb->isactive("N")){
				$error = 1;
			}
		break;

		case 'activate':
			if(!$objWeb->isactive("Y")){
				$error = 1;
			}
		break;

		default:
			$webkey = md5(generateRandomString());
			$data = $objuser->get("slt");
			$getusers = LoadSelect($data, null);
		break;
	}

	#show all registers from table
	$all = $objWeb->get("all");
	$cont = 0;
	$string = "";

	while($all[$cont]["web_id"] != null){
		$string.="<tr>";
			$string.="<td>".($cont+1)."</td>";
			$objuser->user_id = $all[$cont]["user_id"];
			$username = $objuser->get("getname")[0]["username"];
			$string.="<td>".$username."</td>";
			$string.="<td>".$all[$cont]["name"]."</td>";
			$string.="<td>".$all[$cont]["url"]."</td>";
			$string.="<td>".$all[$cont]["blockdays"]."</td>";
			$string.="<td>".$all[$cont]["webkey"]."</td>";
			$string.="<td>".setactions($all[$cont]["isactive"],$all[$cont]["web_id"],"web")."</td>";
		$string.="</tr>";
		$cont++;
	}
?>