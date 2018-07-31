<?php
// include core and response files
	include("config/core.php"); 
	include("response.php");
	//include("token.php");
	
	// instantiate token and  object
	if(isset($_GET['token'])){
		$newObj = new Dbdata();
		$gettoken=trim($_GET['token']);
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
	$gettoken=trim($_GET['token']);
		//check conditions basis of token trure or false
	if(isset($matchedToken) && $matchedToken!="false" && $matchedToken==$gettoken){
       // for check condition basis of urls and redirect to functions
	
			if(isset($_GET['id'])) {
				$geId=$_GET['id'];
				// instantiate database and  object
				$newObj = new Dbdata();
				$emps = $newObj->getIndividualWithId($geId);
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
					
				// instantiate database and  object
				$newObj = new Dbdata();
				$emps = $newObj->getIndividual();
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
				}
	}else{
		echo json_encode(
						array("message" => "Unauthorized Token || Expired Token")
					  );
	}
    //delete token
	$newObj = new Dbdata();
	$tokenData = $newObj->delToken($gettoken);
 ?>

