<?php 
	class model_db{
		private $server,
				$user,
				$password,
				$db,
				$result,
				$con;

		private function connect(){
			$this->server = "localhost";
			$this->user = "root";
			$this->password = "";
			$this->db = "nowads";
			$this->con = mysql_connect($this->server,$this->user,$this->password) or die ("Error al Intentar Conectar con el Servidor " . mysql_error());
			mysql_select_db($this->db, $this->con) or die ("Error al Intentar Conectarse a la Base de Datos " . mysql_error());
		}

		protected function setquery($sql){
			$this->connect();
			$this->result = mysql_query($sql, $this->con) or die ("Error al Realizar la Consulta ". mysql_error());
			return mysql_affected_rows();
		}

		protected function getdata(){
			return mysql_fetch_array($this->result);
		}

		protected function transaction($t="begin"){
			$t = strtolower($t);
			$sql = "";
			switch ($t) {
				case 'begin':
					$sql = "BEGIN";
				break;
				case 'commit':
					$sql = "COMMIT";
				break;
				case 'roolback':
					$sql = "ROOLBACK";
				break;
			}

			return $this->setquery($sql);
		}

		protected function free_result(){
			mysql_free_result($this->result);
		}

		protected function close(){
			mysql_close();
		}
	}
?>