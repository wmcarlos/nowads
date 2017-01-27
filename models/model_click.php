<?php 
	require_once("model_db.php");

	class model_click extends model_db{
		private $click_id,
				$web_id,
				$created,
				$ip,
				$country_code,
				$country,
				$city,
				$lat,
				$lon,
				$wk,
				$hs;

		public function __construct(){
			$this->click_id = null;
			$this->web_id = null;
			$this->created = null;
			$this->ip = null;
			$this->country_code = null;
			$this->country = null;
			$this->city = null;
			$this->lat = null;
			$this->lon = null;
			$this->wk = null;
			$this->hs = null;
		}

		public function __set($atr, $val){
			$this->$atr = $val;
		}

		public function __get($atr){
			return $this->$atr;
		}

		public function add(){
			return $this->setquery("insert into 
				na_click (web_id,ip,country_code,country,city,lat,lon)
				values ($this->web_id,'$this->ip','$this->country_code','$this->country','$this->city','$this->lat','$this->lon')");
		}

		public function get($t="only"){
			$t = strtolower($t);
			$sql = "";

			switch ($t) {
				case 'all':
					$sql = "select * from na_click order by name asc";
				break;
				case "verifyweb":
					$sql = "select 
								web_id 
							from na_web 
							where webkey = '$this->wk' and url = '$this->hs'";
				break;
				case "verifyip":
					$sql = "select ip from na_click where ip = '$this->ip'";
				break;
			}

			$this->setquery($sql);

			while($row = $this->getdata()){
				$arr[] = $row;
			}

			$this->free_result();
			$this->close();
			return $arr;
		}
	}
?>