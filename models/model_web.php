<?php 
	require_once(models() . "model_db.php");

	class model_web extends model_db{
		private $web_id,
				$user_id,
				$created,
				$updated,
				$name,
				$url,
				$blockdays,
				$webkey,
				$isactive;

		public function __construct(){
			$this->web_id = null;
			$this->user_id = null;
			$this->created = null;
			$this->updated = null;
			$this->name = null;
			$this->url = null;
			$this->blockdays = null;
			$this->webkey = null;
			$this->isactive = null;
		}

		public function __set($atr, $val){
			$this->$atr = $val;
		}

		public function __get($atr){
			return $this->$atr;
		}

		public function add(){
			return $this->setquery("insert into 
				na_web (user_id,name,url,blockdays,webkey)
				values ($this->user_id,'$this->name','$this->url',$this->blockdays,'$this->webkey')");
		}

		public function get($t="only"){
			$t = strtolower($t);
			$sql = "";

			switch ($t) {
				case 'only':
					$sql = "select * from na_web where web_id = $this->web_id";
				break;
				case 'all':
					$sql = "select * from na_web order by name asc";
				break;
				case 'byname':
					$sql = "select * from na_web where url = '$this->url' ";
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

		public function change(){
			return $this->setquery("update na_web
				set user_id = $this->user_id,
				name = '$this->name',
				url = '$this->url',
				blockdays = $this->blockdays,
				webkey = '$this->webkey',
				updated = Now() 
				where web_id = $this->web_id");
		}

		public function isactive($v){
			return $this->setquery("update na_web set isactive = '$v', updated = Now() where web_id = $this->web_id");
		}
	}
?>