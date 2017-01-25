<?php 
	require_once(models() . "model_db.php");

	class model_role extends model_db{
		private $role_id,
				$created,
				$updated,
				$name,
				$isactive;

		public function __construct(){
			$this->role_id = null;
			$this->created = null;
			$this->updated = null;
			$this->name = null;
			$this->isactive = null;
		}

		public function __set($atr, $val){
			$this->$atr = $val;
		}

		public function __get($atr){
			return $this->$atr;
		}

		public function add(){
			return $this->setquery("insert into na_role (name) values ('$this->name')");
		}

		public function get($t="only"){
			$t = strtolower($t);
			$sql = "";

			switch ($t) {
				case 'only':
					$sql = "select * from na_role where role_id = $this->role_id";
				break;
				case 'all':
					$sql = "select * from na_role order by name asc";
				break;
				case 'byname':
					$sql = "select * from na_role where name = '$this->name' ";
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
			return $this->setquery("update na_role set name = '$this->name', updated = Now() where role_id = $this->role_id");
		}

		public function isactive($v){
			return $this->setquery("update na_role set isactive = '$v', updated = Now() where role_id = $this->role_id");
		}
	}
?>