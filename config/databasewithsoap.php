<?php 
Class dbObj{
	
	// specify your own database credentials
	var $servername;
	var $username;
	var $password;
	var $dbname;
	var $port;
	var $conn;
	var $sslmode;
	function __construct() {
		$this->servername = getenv('servername');
		$this->username = getenv('username');
		$this->password = getenv('password');
		$this->dbname = getenv('dbname');
		$this->port = getenv('port');
		$this->sslmode = getenv('sslmode');
	}
	
	  /*
	 Function Name: getConnstring
	 Params: NULL
	 Created BY:
	 Created ON : 
	 Description : connection for Postgres server in Heroku
    */
	function getConnstring() { 
		$con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password." sslmode=".$this->sslmode."") or die("Connection failed: ".pg_last_error());
      
		/* check connection */
		if (pg_last_error()) {
			 echo json_encode(
				array("message" => "Connection failed")
			  );
			exit();
		} else {
			$this->conn = $con;
		}
		 // pg_close($con);
		return $this->conn;
	}
}
?>
