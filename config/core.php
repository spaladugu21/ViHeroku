<?php
// show error reporting
  //0 for hide warning errors
  //1 for show all warning errors
ini_set('display_errors', 0);
error_reporting(E_ALL);
 
 // Start session
@session_start();

// required headers
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: access");
	header("Access-Control-Allow-Methods: GET");
	header("Access-Control-Allow-Credentials: true");
	header('Content-Type: application/json');
?>