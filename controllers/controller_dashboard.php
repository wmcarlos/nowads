<?php 
	require_once(models() . "model_click.php");
	$objClick = new model_click();
	$objClick->web_id = $_POST["txtweb_id"];
	$objClick->user_id = $_SESSION["user_id"];
	$operation = $_REQUEST["operation"];
	$error = 0;

	switch ($operation) {
		case "search":
			$vew = $objClick->get("byweb");
			if( count($vew) > 0 ){
				$slw = $objClick->get("slw");
				$getwebs = LoadSelect($slw, $objClick->web_id);
				$all = $objClick->get("all");
				$cont = 0;
				$string = "";
				while($all[$cont]["click_id"] != null){
					$string.="<tr>";
						$string.="<td>".($cont+1)."</td>";
						$string.="<td>".$all[$cont]["ip"]."</td>";
						$string.="<td>".$all[$cont]["country_code"]."</td>";
						$string.="<td>".$all[$cont]["country"]."</td>";
						$string.="<td>".$all[$cont]["city"]."</td>";
						$string.="<td>".$all[$cont]["lat"]."</td>";
						$string.="<td>".$all[$cont]["lon"]."</td>";
						$string.="<td>".$all[$cont]["created"]."</td>";
					$string.="</tr>";
					$cont++;
				}
				$gcfc = $objClick->get("getclicksforchart");
				$jsondata = json_encode($gcfc);
			}
		break;
		default:
			#show all registers from table
			$vew = $objClick->get("getlastwebid");
			if( count($vew) > 0 ){
				$objClick->web_id = $vew[0]["web_id"];
				$slw = $objClick->get("slw");
				$getwebs = LoadSelect($slw, $objClick->web_id);
				$all = $objClick->get("all");
				$cont = 0;
				$string = "";
				while($all[$cont]["click_id"] != null){
					$string.="<tr>";
						$string.="<td>".($cont+1)."</td>";
						$string.="<td>".$all[$cont]["ip"]."</td>";
						$string.="<td>".$all[$cont]["country_code"]."</td>";
						$string.="<td>".$all[$cont]["country"]."</td>";
						$string.="<td>".$all[$cont]["city"]."</td>";
						$string.="<td>".$all[$cont]["lat"]."</td>";
						$string.="<td>".$all[$cont]["lon"]."</td>";
						$string.="<td>".$all[$cont]["created"]."</td>";
					$string.="</tr>";
					$cont++;
				}
				$gcfc = $objClick->get("getclicksforchart");
				$jsondata = json_encode($gcfc);
			}
		break;
	}
?>