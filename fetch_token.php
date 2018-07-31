<?php 
// include core files
include("config/core.php");
include("response.php");
   $token  =   md5(uniqid(microtime(), true));
   echo json_encode(
				array("token" => $token)
			  );
	//save token to db
	$newObj = new Dbdata();
	$emps = $newObj->addToken($token);		

   
?>