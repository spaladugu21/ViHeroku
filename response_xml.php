<?php 
// include database files
include("config/databasewithsoap.php");
 
class Dbdata {
	protected $conn;
	protected $data = array();
	//initialize db connection 
	function __construct() {
		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	
	/*
	 Function Name: getToken
	 Params: ID
	 Created BY:
	 Created ON : 
	 Description : get token data from database
    */
	public function getToken($token) { 
		$currentTime=date('Y-m-d h:i:s');
		$sql = "SELECT * FROM public.token WHERE token= '" . trim($token) . "' AND token_expire >='" .$currentTime. "';"; 
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch  data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
	
	/*
	 Function Name: delToken
	 Params: ID
	 Created BY:
	 Created ON : 
	 Description : delete token  from database
    */
	public function delToken($token) { 
		
		$sql = "DELETE FROM public.token WHERE token = '".$token."'"; 
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch  data");
	
	}
	 
	 /*
	 Function Name: getDataBaseRecord
	 Params: ID
	 Created BY:
	 Created ON : 
	 Description : get data from db using ids
    */
	public function getDataBaseRecord($query) { 
		$sql = $query; 
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch  data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
}
?>
