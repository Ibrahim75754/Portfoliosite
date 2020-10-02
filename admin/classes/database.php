<?php
	
	class DATABASE{
		public $server = "localhost";
		public $user = "root";
		public $pass = "";
		public $db = "corporx";

		public $con;

		public function __construct(){
			$this->con = new mysqli($this->server,$this->user,$this->pass,$this->db); 
		}


		public function run($query){
			$result = $this->con->query($query);
			return $result;
		}

		public function getrow(){
			return $this->con->affected_rows;
		}
	}

 ?>