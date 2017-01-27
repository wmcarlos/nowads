<?php 
	require_once("../models/model_click.php");
	$objClick = new model_click();

	$objClick->ip = $_GET["ip"];
	$objClick->country_code = $_GET["cc"];
	$objClick->country = $_GET["co"];
	$objClick->city = $_GET["ci"];
	$objClick->lat = $_GET["la"];
	$objClick->lon = $_GET["lo"];
	$objClick->wk = $_GET["wk"];
	$objClick->hs = $_GET["hs"];
	$operation = $_REQUEST["operation"];
	$request = Array();

	switch ($operation) {
		case 'add':
			$get = $objClick->get("verifyweb");
			if( count($get) > 0 ){
				$objClick->web_id = $get[0]["web_id"];
				if($objClick->add()){
					$request = Array(
						"code" => 01,
						"message" => "Successfully"
					); 
				}else{
					$request = Array(
						"code" => 02,
						"message" => "Connection Error"
					); 
				}
			}else{
				$request = Array(
						"code" => 03,
						"message" => "Not Authorized"
					); 
			}

			print json_encode($request);
		break;
	}
#path for api
#/api/get.php?operation=add&wk=77aac5ed024b43900c1992583cb23581&hs=www.librosdelprogramador.pw&ip=190.121.232.53&cc=VE&co=Venezuela&ci=Araure&la=9.5667&lo=-69.2167	
?>