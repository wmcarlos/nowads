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
					$sql = "select * from na_click where web_id = $this->web_id order by created desc";
				break;
				case 'getlastwebid':
					$sql = "select web_id from na_web where user_id = ".$_SESSION["user_id"]." and isactive = 'Y' order by web_id desc";
				break;
				case "verifyweb":
					$sql = "select 
								web_id 
							from na_web 
							where webkey = '$this->wk' and url = '$this->hs'";
				break;
				case "verifyip":
					$sql = "select 
							nc.ip,
							nc.created,
							nw.blockdays
							from na_click as nc
							inner join na_web as nw on (nw.web_id = nc.web_id)
							where nc.ip = '$this->ip' 
							and nc.web_id = $this->web_id order by created desc limit 1";
				break;
				case 'slw':
					$sql = "select web_id as value, name as text from na_web where isactive = 'Y' order by name asc";
				break;
				case 'byweb':
					$sql = "select * from na_web where web_id = $this->web_id order by created desc";
				break;
				case 'getclicksforchart':
					$sql = "select 
					date_format(created, '%d/%m/%Y') as day,
					count(click_id) as clicks
					from na_click 
					where created between DATE_FORMAT(NOW() ,'%Y-%m-01') 
					and LAST_DAY(NOW()) and web_id = $this->web_id
					group by date_format(created, '%d/%m/%Y')";
				break;
				case 'ctrmostclick':
					$sql = "select 
						count(click_id) as value,
						country as label
						from na_click 
						where created between DATE_FORMAT(NOW() ,'%Y-%m-01') 
						and LAST_DAY(NOW()) and web_id = $this->web_id 
						group by country";
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

		public function diffdays($d1){
			$date1 = new DateTime($d1);
			$date2 = new DateTime(date("Y-m-d H:m:s"));
			$diff = $date1->diff($date2)->format("%a");
			return $diff;
		}
	}
?>