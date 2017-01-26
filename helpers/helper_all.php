<?php 
	session_start();
	global $url;

	function getheader(){
		include(ABSPATH . "header.php");
	}

	function getbody(){
		include(ABSPATH . "body.php");
	}

	function getfooter(){
		include(ABSPATH . "footer.php");
	}

	function getwidget(){
		include(ABSPATH . "widget.php");
	}

	function models(){
		global $url;
		$url = ABSPATH . "models/";
		return $url;
	}

	function controllers(){
		global $url;
		$url = ABSPATH . "controllers/";
		return $url;
	}

	function views(){
		global $url;
		$url = ABSPATH . "views/";
		return $url;
	}

	function helpers(){
		global $url;
		$url = ABSPATH . "helpers/";
		return $url;
	}

	function api(){
		global $url;
		$url = ABSPATH . "api/";
		return $url;
	}

	function db(){
		global $url;
		$url = ABSPATH . "db/";
		return $url;
	}

	function config(){
		global $url;
		$url = ABSPATH . "config/";
		return $url;
	}

	function setview($insession = "no"){
		$v = $_GET["v"];
		if(isset($v) and !empty($v)){
			$cont = controllers() . "controller_".$v.".php";
			$view = views() . "view_".$v.".php";
			if(is_file($cont) and is_file($view)){
				include($cont);
				include($view);
			}else{
				if($insession == "no"){
					include(controllers() . "controller_login.php");
					include(views() . "view_login.php");
				}else if ($insession == "yes"){
					include(controllers() . "controller_dashboard.php");
					include(views() . "view_dashboard.php");
				}
			}
		}else{
			include(controllers() . "controller_login.php");
			include(views() . "view_login.php");
		}
	}

	function setactions($isactive,$id,$v){
		$buttons = "";
		if($isactive == "Y"){
			$buttons.="<a href='?v=".$v."&id=".$id."&operation=load' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span> Modify</a> <a href='#' onclick=\"isactive('".$isactive."',".$id.",'".$v."')\" class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span> Desactivate</a>";
		}else if ($isactive == "N"){
			$buttons.="<a href='#' onclick=\"isactive('".$isactive."',".$id.",'".$v."')\" class='btn btn-success'><span class='glyphicon glyphicon-ok'></span> Activate</a>";
		}
		return $buttons;
	}

	function LoadSelect($data, $selected){
		$string = "";
		if(count($data) > 0){
			$cont = 0;
			while($data[$cont]["value"] != null){
				if($data[$cont]["value"] == $selected){
					$string.="<option value='".$data[$cont]["value"]."' selected='selected'>".$data[$cont]["text"]."</option>";
				}else{
					$string.="<option value='".$data[$cont]["value"]."'>".$data[$cont]["text"]."</option>";
				}
				$cont++;
			}
		}
		return $string;
	}


?>