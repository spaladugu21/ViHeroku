<?php  
ini_set('display_errors', 0);
ini_set('memory_limit', '512M');
error_reporting(E_ALL);
 // Start session
@session_start();
header("Access-Control-Allow-Origin: *");
include("response_xml.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
$xmlOutput = file_get_contents('php://input');
$xml = simplexml_load_string($xmlOutput);
if(!empty($xml)){
	// instantiate token and  object
	if(isset($xml->token)){
		$newObj = new Dbdata();
		$gettoken=trim($xml->token);
		$tokenData = $newObj->getToken($gettoken);
			if(!empty($tokenData)){
				foreach($tokenData as $key => $tok) {
					$tokenVal=$tok;
				}
				$matchedToken=$tokenVal['token'];
			}else{
				$matchedToken='false';
			}
		
	}else{
		echo json_encode(
						array("message" => "Invalid Token Parameter.")
					  );
					  return ;
	}
	$gettoken=trim($xml->token);
	//check conditions basis of token trure or false
	
	if(isset($matchedToken) && $matchedToken!="false" && $matchedToken==$gettoken){
       // for check condition basis of urls and redirect to functions
	  // instantiate database and  object
				$newObj = new Dbdata();
				$emps = $newObj->getDataBaseRecord($xml->query);
				// products array
				$products_arr=array();
				$products_arr["results"]=array();
				if(!empty($emps)){
						foreach($emps as $key => $emp) {
							array_push($products_arr["results"], $emp);
						}
					// make it json format	
					echo json_encode($products_arr);
					}else{
						echo json_encode(
						array("message" => "No data found.")
					  );
					}
	}else{
		echo json_encode(
						array("message" => "Unauthorized Token || Expired Token")
					  );
	}
	
}else{
	 echo json_encode(
						array("message" => 'No Input Data!')
					  );
}
 //delete token
	$newObj = new Dbdata();
	$tokenData = $newObj->delToken($gettoken);
 ?>
