<?php 
	require_once(models() . "model_db.php");

	class model_user extends model_db{
		private $user_id,
				$role_id,
				$created,
				$updated,
				$first_name,
				$last_name,
				$username,
				$email,
				$phone,
				$password,
				$isactive;

		public function __construct(){
			$this->user_id = null;
			$this->role_id = null;
			$this->created = null;
			$this->updated = null;
			$this->first_name = null;
			$this->last_name = null;
			$this->username = null;
			$this->email = null;
			$this->phone = null;
			$this->password = null;
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
				na_user (role_id,first_name,last_name,username,email,phone,password) 
				values ('$this->role_id','$this->first_name','$this->last_name','$this->username','$this->email','$this->phone',MD5('$this->password'))");
		}

		public function get($t="only"){
			$t = strtolower($t);
			$sql = "";

			switch ($t) {
				case 'only':
					$sql = "select * from na_user where user_id = $this->user_id";
				break;
				case 'all':
					$sql = "select * from na_user order by first_name, last_name asc";
				break;
				case 'byname':
					$sql = "select * from na_user where username = '$this->username'";
				break;
				case 'login':
					$this->password = md5($this->password);
					$sql = "select 
								us.role_id, 
								rl.name as role,
								us.username, 
								us.first_name, 
								us.last_name 
								from na_user  as us
								inner join na_role as rl on (rl.role_id = us.role_id)
								where us.username = '$this->username' 
								and us.password = '$this->password'";
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
			return $this->setquery("update na_user 
				set role_id = $this->role_id,
				first_name = '$this->first_name',
				last_name = '$this->last_name',
				username = '$this->username',
				email = '$this->email',
				phone = '$this->phone',
				password = MD5('$this->password'),
				updated = Now() 
				where user_id = $this->user_id");
		}

		public function isactive($v){
			return $this->setquery("update na_user set isactive = '$v', updated = Now() where user_id = $this->user_id");
		}
	}
?>