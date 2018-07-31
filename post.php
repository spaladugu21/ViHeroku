<?php  
ini_set('display_errors', 0);
error_reporting(E_ALL);
include("config/databasewithsoap.php");
$db = new dbObj();
$connString =  $db->getConnstring();
$conn= $connString;
$xmlOutput = file_get_contents('php://input');

//for save xml get data
//$querytest ="INSERT INTO public.api_call (xmlformat) VALUES ('".$xmlOutput."')";
			 //pg_query($conn, $querytest) or die("error to save  data"); 

//Get XML Array 
$clean_xml=array();
$clean_xml = str_ireplace(['soapenv:', 'SOAP:'], '', $xmlOutput);
$clean_xml = str_ireplace(['sf:', 'SOAP:'], '', $clean_xml);
$xml = simplexml_load_string($clean_xml);
$xmlarray =object_to_array($xml); 
if(!empty($xmlarray) && $xmlarray!=='no_record'){
    foreach ($xmlarray as $key=>$val){
		    $OrganizationId=$val['notifications']['OrganizationId'];
			
			//for single records
		if(empty($val['notifications']['Notification'][0])){

			foreach($val as $fdata){
					$Id=$fdata['Notification']['sObject']['Id'];
                $Id = !empty($fdata['Notification']['sObject']['Id']) ? "'$Id'" : "NULL";
				$Ammout_Over_Limit_mph__c=$fdata['Notification']['sObject']['Ammout_Over_Limit_mph__c'];
                $Ammout_Over_Limit_mph__c = !empty($fdata['Notification']['sObject']['Ammout_Over_Limit_mph__c']) ? "'$Ammout_Over_Limit_mph__c'" : "NULL";
				$Amount_Over_Limit_Km_h__c=$fdata['Notification']['sObject']['Amount_Over_Limit_Km_h__c'];
                $Amount_Over_Limit_Km_h__c = !empty($fdata['Notification']['sObject']['Amount_Over_Limit_Km_h__c']) ? "'$Amount_Over_Limit_Km_h__c'" : "NULL";
				$Asset_Serial__c=$fdata['Notification']['sObject']['Asset_Serial__c'];
                $Asset_Serial__c = !empty($fdata['Notification']['sObject']['Asset_Serial__c']) ? "'$Asset_Serial__c'" : "NULL";
				$Asset_Type__c=$fdata['Notification']['sObject']['Asset_Type__c'];
                $Asset_Type__c = !empty($fdata['Notification']['sObject']['Asset_Type__c']) ? "'$Asset_Type__c'" : "NULL";
				$City__c=$fdata['Notification']['sObject']['City__c'];
                $City__c = !empty($fdata['Notification']['sObject']['City__c']) ? "'$City__c'" : "NULL";
				$Collection_Route_Text__c=$fdata['Notification']['sObject']['Collection_Route_Text__c'];
                $Collection_Route_Text__c = !empty($fdata['Notification']['sObject']['Collection_Route_Text__c']) ? "'$Collection_Route_Text__c'" : "NULL";
				$Collection_Route__c=$fdata['Notification']['sObject']['Collection_Route__c'];
                $Collection_Route__c = !empty($fdata['Notification']['sObject']['Collection_Route__c']) ? "'$Collection_Route__c'" : "NULL";
				$Container_RFID_tag__c=$fdata['Notification']['sObject']['Container_RFID_tag__c'];
                $Container_RFID_tag__c = !empty($fdata['Notification']['sObject']['Container_RFID_tag__c']) ? "'$Container_RFID_tag__c'" : "NULL";
				$Country__c=$fdata['Notification']['sObject']['Country__c'];
                $Country__c = !empty($fdata['Notification']['sObject']['Country__c']) ? "'$Country__c'" : "NULL";
				$CreatedById=$fdata['Notification']['sObject']['CreatedById'];
                $CreatedById = !empty($fdata['Notification']['sObject']['CreatedById']) ? "'$CreatedById'" : "NULL";
				$CreatedDate=$fdata['Notification']['sObject']['CreatedDate'];
                $CreatedDate = !empty($fdata['Notification']['sObject']['CreatedDate']) ? "'$CreatedDate'" : "NULL";
				$CreatedDateOnly__c=$fdata['Notification']['sObject']['CreatedDateOnly__c'];
                $CreatedDateOnly__c = !empty($fdata['Notification']['sObject']['CreatedDateOnly__c']) ? "'$CreatedDateOnly__c'" : "NULL";
				$Customer_Location__c=$fdata['Notification']['sObject']['Customer_Location__c'];
                $Customer_Location__c = !empty($fdata['Notification']['sObject']['Customer_Location__c']) ? "'$Customer_Location__c'" : "NULL";
				$Distance__c=$fdata['Notification']['sObject']['Distance__c'];
                $Distance__c = !empty($fdata['Notification']['sObject']['Distance__c']) ? "'$Distance__c'" : "NULL";
				$Duration__c=$fdata['Notification']['sObject']['Duration__c'];
                $Duration__c = !empty($fdata['Notification']['sObject']['Duration__c']) ? "'$Duration__c'" : "NULL";
				$Error_Code__c=$fdata['Notification']['sObject']['Error_Code__c'];
                $Error_Code__c = !empty($fdata['Notification']['sObject']['Error_Code__c']) ? "'$Error_Code__c'" : "NULL";
				$Error_Description__c=$fdata['Notification']['sObject']['Error_Description__c'];
                $Error_Description__c = !empty($fdata['Notification']['sObject']['Error_Description__c']) ? "'$Error_Description__c'" : "NULL";
				$Event_End_Date_Time__c=$fdata['Notification']['sObject']['Event_End_Date_Time__c'];
                $Event_End_Date_Time__c = !empty($fdata['Notification']['sObject']['Event_End_Date_Time__c']) ? "'$Event_End_Date_Time__c'" : "NULL";
				$Event_End__Latitude__s=$fdata['Notification']['sObject']['Event_End__Latitude__s'];
                $Event_End__Latitude__s = !empty($fdata['Notification']['sObject']['Event_End__Latitude__s']) ? "'$Event_End__Latitude__s'" : "NULL";
				$Event_End__Longitude__s=$fdata['Notification']['sObject']['Event_End__Longitude__s'];
                $Event_End__Longitude__s = !empty($fdata['Notification']['sObject']['Event_End__Longitude__s']) ? "'$Event_End__Longitude__s'" : "NULL";
				$Event_Start_Date_Time__c=$fdata['Notification']['sObject']['Event_Start_Date_Time__c'];
                $Event_Start_Date_Time__c = !empty($fdata['Notification']['sObject']['Event_Start_Date_Time__c']) ? "'$Event_Start_Date_Time__c'" : "NULL";
				$Event_Start_Date__c=$fdata['Notification']['sObject']['Event_Start_Date__c'];
                $Event_Start_Date__c = !empty($fdata['Notification']['sObject']['Event_Start_Date__c']) ? "'$Event_Start_Date__c'" : "NULL";
				$Event_Start_Tip_Date__c=$fdata['Notification']['sObject']['Event_Start_Tip_Date__c'];
                $Event_Start_Tip_Date__c = !empty($fdata['Notification']['sObject']['Event_Start_Tip_Date__c']) ? "'$Event_Start_Tip_Date__c'" : "NULL";
				$Event_Start__Latitude__s=$fdata['Notification']['sObject']['Event_Start__Latitude__s'];
                $Event_Start__Latitude__s = !empty($fdata['Notification']['sObject']['Event_Start__Latitude__s']) ? "'$Event_Start__Latitude__s'" : "NULL";
				$Event_Start__Longitude__s=$fdata['Notification']['sObject']['Event_Start__Longitude__s'];
                $Event_Start__Longitude__s = !empty($fdata['Notification']['sObject']['Event_Start__Longitude__s']) ? "'$Event_Start__Longitude__s'" : "NULL";
				$HarshAcceleration__c=$fdata['Notification']['sObject']['HarshAcceleration__c'];
                $HarshAcceleration__c = !empty($fdata['Notification']['sObject']['HarshAcceleration__c']) ? "'$HarshAcceleration__c'" : "NULL";
				$HarshBrakingInsyncId__c=$fdata['Notification']['sObject']['HarshBrakingInsyncId__c'];
                $HarshBrakingInsyncId__c = !empty($fdata['Notification']['sObject']['HarshBrakingInsyncId__c']) ? "'$HarshBrakingInsyncId__c'" : "NULL";
				$Heading__c=$fdata['Notification']['sObject']['Heading__c'];
                $Heading__c = !empty($fdata['Notification']['sObject']['Heading__c']) ? "'$Heading__c'" : "NULL";
				$HeartbeatInsyncId__c=$fdata['Notification']['sObject']['HeartbeatInsyncId__c'];
                $HeartbeatInsyncId__c = !empty($fdata['Notification']['sObject']['HeartbeatInsyncId__c']) ? "'$HeartbeatInsyncId__c'" : "NULL";
				$House_Number__c=$fdata['Notification']['sObject']['House_Number__c'];
                $House_Number__c = !empty($fdata['Notification']['sObject']['House_Number__c']) ? "'House_Number__c'" : "NULL";
				$IdleTimeInsyncId__c=$fdata['Notification']['sObject']['IdleTimeInsyncId__c'];
                $IdleTimeInsyncId__c = !empty($fdata['Notification']['sObject']['IdleTimeInsyncId__c']) ? "'$IdleTimeInsyncId__c'" : "NULL";
				$InsyncId__c=$fdata['Notification']['sObject']['InsyncId__c'];
                $InsyncId__c = !empty($fdata['Notification']['sObject']['InsyncId__c']) ? "'$InsyncId__c'" : "NULL";
				$IsDeleted=$fdata['Notification']['sObject']['IsDeleted'];
                $IsDeleted = !empty($fdata['Notification']['sObject']['IsDeleted']) ? "'$IsDeleted'" : "NULL";
				$IsLatestTip__c=$fdata['Notification']['sObject']['IsLatestTip__c'];
                $IsLatestTip__c = !empty($fdata['Notification']['sObject']['IsLatestTip__c']) ? "'$IsLatestTip__c'" : "NULL";
				$Is_GPS_Location__c=$fdata['Notification']['sObject']['Is_GPS_Location__c'];
                $Is_GPS_Location__c = !empty($fdata['Notification']['sObject']['Is_GPS_Location__c']) ? "'$Is_GPS_Location__c'" : "NULL";
				$Is_Tipped_Twice__c=$fdata['Notification']['sObject']['Is_Tipped_Twice__c'];
                $Is_Tipped_Twice__c = !empty($fdata['Notification']['sObject']['Is_Tipped_Twice__c']) ? "'$Is_Tipped_Twice__c'" : "NULL";
				$Is_Tip_Mismatched__c=$fdata['Notification']['sObject']['Is_Tip_Mismatched__c'];
                $Is_Tip_Mismatched__c = !empty($fdata['Notification']['sObject']['Is_Tip_Mismatched__c']) ? "'$Is_Tip_Mismatched__c'" : "NULL";
				$Is_Viewable_On_Map__c=$fdata['Notification']['sObject']['Is_Viewable_On_Map__c'];
                $Is_Viewable_On_Map__c = !empty($fdata['Notification']['sObject']['Is_Viewable_On_Map__c']) ? "'$Is_Viewable_On_Map__c'" : "NULL";
				$LastModifiedById=$fdata['Notification']['sObject']['LastModifiedById'];
                $LastModifiedById = !empty($fdata['Notification']['sObject']['LastModifiedById']) ? "'$LastModifiedById'" : "NULL";
				$LastModifiedDate=$fdata['Notification']['sObject']['LastModifiedDate'];
                $LastModifiedDate = !empty($fdata['Notification']['sObject']['LastModifiedDate']) ? "'$LastModifiedDate'" : "NULL";
				$LastReferencedDate=$fdata['Notification']['sObject']['LastReferencedDate'];
                $LastReferencedDate = !empty($fdata['Notification']['sObject']['LastReferencedDate']) ? "'$LastReferencedDate'" : "NULL";
				$LastViewedDate=$fdata['Notification']['sObject']['LastViewedDate'];
                $LastViewedDate = !empty($fdata['Notification']['sObject']['LastViewedDate']) ? "'$LastViewedDate'" : "NULL";
				$Location_Address__c=$fdata['Notification']['sObject']['Location_Address__c'];
                $Location_Address__c = !empty($fdata['Notification']['sObject']['Location_Address__c']) ? "'$Location_Address__c'" : "NULL";
				$Max_Speed_Miles_per_hour__c=$fdata['Notification']['sObject']['Max_Speed_Miles_per_hour__c'];
                $Max_Speed_Miles_per_hour__c = !empty($fdata['Notification']['sObject']['Max_Speed_Miles_per_hour__c']) ? "'$Max_Speed_Miles_per_hour__c'" : "NULL";
				$Name=$fdata['Notification']['sObject']['Name'];
                $Name = !empty($fdata['Notification']['sObject']['Name']) ? "'$Name'" : "NULL";
				$ObservationInsyncId__c=$fdata['Notification']['sObject']['ObservationInsyncId__c'];
                $ObservationInsyncId__c = !empty($fdata['Notification']['sObject']['ObservationInsyncId__c']) ? "'$ObservationInsyncId__c'" : "NULL";
				$Observation_Description__c=$fdata['Notification']['sObject']['Observation_Description__c'];
                $Observation_Description__c = !empty($fdata['Notification']['sObject']['Observation_Description__c']) ? "'$Observation_Description__c'" : "NULL";
				$Observation_Number__c=$fdata['Notification']['sObject']['Observation_Number__c'];
                $Observation_Number__c = !empty($fdata['Notification']['sObject']['Observation_Number__c']) ? "'$Observation_Number__c'" : "NULL";
				$Obs_Num_Desc__c=$fdata['Notification']['sObject']['Obs_Num_Desc__c'];
                $Obs_Num_Desc__c = !empty($fdata['Notification']['sObject']['Obs_Num_Desc__c']) ? "'$Obs_Num_Desc__c'" : "NULL";
				$OwnerId=$fdata['Notification']['sObject']['OwnerId'];
                $OwnerId = !empty($fdata['Notification']['sObject']['OwnerId']) ? "'$OwnerId'" : "NULL";
				$readerEvent__c=$fdata['Notification']['sObject']['readerEvent__c'];
                $readerEvent__c = !empty($fdata['Notification']['sObject']['readerEvent__c']) ? "'$readerEvent__c'" : "NULL";
				$RecordTypeId=$fdata['Notification']['sObject']['RecordTypeId'];
                $RecordTypeId = !empty($fdata['Notification']['sObject']['RecordTypeId']) ? "'$RecordTypeId'" : "NULL";
				$Responce_JSON__c=$fdata['Notification']['sObject']['Responce_JSON__c'];
                $Responce_JSON__c = !empty($fdata['Notification']['sObject']['Responce_JSON__c']) ? "'$Responce_JSON__c'" : "NULL";
				$Service_Provider__c=$fdata['Notification']['sObject']['Service_Provider__c'];
                $Service_Provider__c = !empty($fdata['Notification']['sObject']['Service_Provider__c']) ? "'$Service_Provider__c'" : "NULL";
				$SFDC_Container_Asset__c=$fdata['Notification']['sObject']['SFDC_Container_Asset__c'];
                $SFDC_Container_Asset__c = !empty($fdata['Notification']['sObject']['SFDC_Container_Asset__c']) ? "'$SFDC_Container_Asset__c'" : "NULL";
				$SFDC_Device_Id__c=$fdata['Notification']['sObject']['SFDC_Device_Id__c'];
                $SFDC_Device_Id__c = !empty($fdata['Notification']['sObject']['SFDC_Device_Id__c']) ? "'$SFDC_Device_Id__c'" : "NULL";
				$SFDC_Truck_ID__c=$fdata['Notification']['sObject']['SFDC_Truck_ID__c'];
                $SFDC_Truck_ID__c = !empty($fdata['Notification']['sObject']['SFDC_Truck_ID__c']) ? "'$SFDC_Truck_ID__c'" : "NULL";
				$SpeedingInsyncId__c=$fdata['Notification']['sObject']['SpeedingInsyncId__c'];
                $SpeedingInsyncId__c = !empty($fdata['Notification']['sObject']['SpeedingInsyncId__c']) ? "'$SpeedingInsyncId__c'" : "NULL";
				$State__c=$fdata['Notification']['sObject']['State__c'];
                $State__c = !empty($fdata['Notification']['sObject']['State__c']) ? "'$State__c'" : "NULL";
				$Street__c=$fdata['Notification']['sObject']['Street__c'];
                $Street__c = !empty($fdata['Notification']['sObject']['Street__c']) ? "'$Street__c'" : "NULL";
				$Telematic_Event_Date__c=$fdata['Notification']['sObject']['Telematic_Event_Date__c'];
                $Telematic_Event_Date__c = !empty($fdata['Notification']['sObject']['Telematic_Event_Date__c']) ? "'$Telematic_Event_Date__c'" : "NULL";
				$Timezone__c=$fdata['Notification']['sObject']['Timezone__c'];
                $Timezone__c = !empty($fdata['Notification']['sObject']['Timezone__c']) ? "'Timezone__c'" : "NULL";
				$TipNoTipNumber__c=$fdata['Notification']['sObject']['TipNoTipNumber__c'];
                $TipNoTipNumber__c = !empty($fdata['Notification']['sObject']['TipNoTipNumber__c']) ? "'$TipNoTipNumber__c'" : "NULL";
				$Tip_DateTime__c=$fdata['Notification']['sObject']['Tip_DateTime__c'];
                $Tip_DateTime__c = !empty($fdata['Notification']['sObject']['Tip_DateTime__c']) ? "'$Tip_DateTime__c'" : "NULL";
				$Tip_Date_Time__c=$fdata['Notification']['sObject']['Tip_Date_Time__c'];
                $Tip_Date_Time__c = !empty($fdata['Notification']['sObject']['Tip_Date_Time__c']) ? "'$Tip_Date_Time__c'" : "NULL";
				$Tip_Date__c=$fdata['Notification']['sObject']['Tip_Date__c'];
                $Tip_Date__c = !empty($fdata['Notification']['sObject']['Tip_Date__c']) ? "'$Tip_Date__c'" : "NULL";
				$Tip_hour_range__c=$fdata['Notification']['sObject']['Tip_hour_range__c'];
                $Tip_hour_range__c = !empty($fdata['Notification']['sObject']['Tip_hour_range__c']) ? "'$Tip_hour_range__c'" : "NULL";
				$Tip_Hour__c=$fdata['Notification']['sObject']['Tip_Hour__c'];
                $Tip_Hour__c = !empty($fdata['Notification']['sObject']['Tip_Hour__c']) ? "'$Tip_Hour__c'" : "NULL";
				$Tip_Lat_Lon__Latitude__s=$fdata['Notification']['sObject']['Tip_Lat_Lon__Latitude__s'];
                $Tip_Lat_Lon__Latitude__s = !empty($fdata['Notification']['sObject']['Tip_Lat_Lon__Latitude__s']) ? "'$Tip_Lat_Lon__Latitude__s'" : "NULL";
				$Tip_Lat_Lon__Longitude__s=$fdata['Notification']['sObject']['Tip_Lat_Lon__Longitude__s'];
                $Tip_Lat_Lon__Longitude__s = !empty($fdata['Notification']['sObject']['Tip_Lat_Lon__Longitude__s']) ? "'$Tip_Lat_Lon__Longitude__s'" : "NULL";
				$Tip_or_Non_Tip__c=$fdata['Notification']['sObject']['Tip_or_Non_Tip__c'];
                $Tip_or_Non_Tip__c = !empty($fdata['Notification']['sObject']['Tip_or_Non_Tip__c']) ? "'$Tip_or_Non_Tip__c'" : "NULL";
				$Truck_No__c=$fdata['Notification']['sObject']['Truck_No__c'];
                $Truck_No__c = !empty($fdata['Notification']['sObject']['Truck_No__c']) ? "'$Truck_No__c'" : "NULL";
				$Truck_Type__c=$fdata['Notification']['sObject']['Truck_Type__c'];
                $Truck_Type__c = !empty($fdata['Notification']['sObject']['Truck_Type__c']) ? "'$Truck_Type__c'" : "NULL";
				$Zip_Code__c=$fdata['Notification']['sObject']['Zip_Code__c'];
                $Zip_Code__c = !empty($fdata['Notification']['sObject']['Zip_Code__c']) ? "'$Zip_Code__c'" : "NULL";
				$RecordType=$fdata['Notification']['sObject']['RecordType'];
                $RecordType = !empty($fdata['Notification']['sObject']['RecordType']) ? "'$RecordType'" : "NULL";
			
			$query ="INSERT INTO public.individual_tip_non_tip_events__c (Id, Ammout_Over_Limit_mph__c, Amount_Over_Limit_Km_h__c, Asset_Serial__c, Asset_Type__c, City__c, Collection_Route_Text__c, Collection_Route__c, Container_RFID_tag__c, Country__c, CreatedById, CreatedDate, CreatedDateOnly__c, Customer_Location__c, Distance__c, Duration__c, Error_Code__c, Error_Description__c, Event_End_Date_Time__c, Event_End__Latitude__s, Event_End__Longitude__s, Event_Start_Date_Time__c, Event_Start_Date__c , Event_Start_Tip_Date__c, Event_Start__Latitude__s, Event_Start__Longitude__s, HarshAcceleration__c, HarshBrakingInsyncId__c, Heading__c, HeartbeatInsyncId__c, House_Number__c, IdleTimeInsyncId__c, InsyncId__c, IsDeleted, IsLatestTip__c, Is_GPS_Location__c, Is_Tipped_Twice__c, Is_Tip_Mismatched__c, Is_Viewable_On_Map__c, LastModifiedById, LastModifiedDate, LastReferencedDate, LastViewedDate, Location_Address__c, Max_Speed_Miles_per_hour__c, Name, ObservationInsyncId__c, Observation_Description__c, Observation_Number__c, Obs_Num_Desc__c, OwnerId, readerEvent__c, RecordTypeId, Responce_JSON__c, Service_Provider__c, SFDC_Container_Asset__c, SFDC_Device_Id__c, SFDC_Truck_ID__c, SpeedingInsyncId__c, State__c, Street__c, Telematic_Event_Date__c, Timezone__c, TipNoTipNumber__c, Tip_DateTime__c, Tip_Date_Time__c, Tip_Date__c, Tip_hour_range__c, Tip_Hour__c, Tip_Lat_Lon__Latitude__s, Tip_Lat_Lon__Longitude__s, Tip_or_Non_Tip__c, Truck_No__c, Truck_Type__c, Zip_Code__c) VALUES ($Id,$Ammout_Over_Limit_mph__c,$Amount_Over_Limit_Km_h__c,$Asset_Serial__c,$Asset_Type__c,$City__c,$Collection_Route_Text__c,$Collection_Route__c,$Container_RFID_tag__c,$Country__c,$CreatedById,$CreatedDate,$CreatedDateOnly__c,$Customer_Location__c,$Distance__c,$Duration__c,$Error_Code__c,$Error_Description__c,$Event_End_Date_Time__c,$Event_End__Latitude__s,$Event_End__Longitude__s,$Event_Start_Date_Time__c,$Event_Start_Date__c ,$Event_Start_Tip_Date__c,$Event_Start__Latitude__s,$Event_Start__Longitude__s,$HarshAcceleration__c,$HarshBrakingInsyncId__c,$Heading__c,$HeartbeatInsyncId__c,$House_Number__c,$IdleTimeInsyncId__c,$InsyncId__c,$IsDeleted,$IsLatestTip__c,$Is_GPS_Location__c,$Is_Tipped_Twice__c,$Is_Tip_Mismatched__c,$Is_Viewable_On_Map__c,$LastModifiedById,$LastModifiedDate,$LastReferencedDate,$LastViewedDate,$Location_Address__c,$Max_Speed_Miles_per_hour__c,$Name,$ObservationInsyncId__c,$Observation_Description__c,$Observation_Number__c,$Obs_Num_Desc__c,$OwnerId,$readerEvent__c,$RecordTypeId,$Responce_JSON__c,$Service_Provider__c,$SFDC_Container_Asset__c,$SFDC_Device_Id__c,$SFDC_Truck_ID__c,$SpeedingInsyncId__c,$State__c,$Street__c,$Telematic_Event_Date__c,$Timezone__c,$TipNoTipNumber__c,$Tip_DateTime__c,$Tip_Date_Time__c,$Tip_Date__c,$Tip_hour_range__c,$Tip_Hour__c,$Tip_Lat_Lon__Latitude__s,$Tip_Lat_Lon__Longitude__s,$Tip_or_Non_Tip__c,$Truck_No__c,$Truck_Type__c,$Zip_Code__c)"; 
			$queryRecordsSingle = pg_query($conn, $query) or die("error to save  data");
				if(!empty($queryRecordsSingle)){
					$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>true</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
				}else{
					$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>false</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
				}
			}
				
		}else{ //for mulitple records
		
			foreach($val['notifications']['Notification'] as $fdata){
				
				$Id=$fdata['sObject']['Id'];
                $Id = !empty($fdata['sObject']['Id']) ? "'$Id'" : "NULL";
				$Ammout_Over_Limit_mph__c=$fdata['sObject']['Ammout_Over_Limit_mph__c'];
                $Ammout_Over_Limit_mph__c = !empty($fdata['sObject']['Ammout_Over_Limit_mph__c']) ? "'$Ammout_Over_Limit_mph__c'" : "NULL";
				$Amount_Over_Limit_Km_h__c=$fdata['sObject']['Amount_Over_Limit_Km_h__c'];
                $Amount_Over_Limit_Km_h__c = !empty($fdata['sObject']['Amount_Over_Limit_Km_h__c']) ? "'$Amount_Over_Limit_Km_h__c'" : "NULL";
				$Asset_Serial__c=$fdata['sObject']['Asset_Serial__c'];
                $Asset_Serial__c = !empty($fdata['sObject']['Asset_Serial__c']) ? "'$Asset_Serial__c'" : "NULL";
				$Asset_Type__c=$fdata['sObject']['Asset_Type__c'];
                $Asset_Type__c = !empty($fdata['sObject']['Asset_Type__c']) ? "'$Asset_Type__c'" : "NULL";
				$City__c=$fdata['sObject']['City__c'];
                $City__c = !empty($fdata['sObject']['City__c']) ? "'$City__c'" : "NULL";
				$Collection_Route_Text__c=$fdata['sObject']['Collection_Route_Text__c'];
                $Collection_Route_Text__c = !empty($fdata['sObject']['Collection_Route_Text__c']) ? "'$Collection_Route_Text__c'" : "NULL";
				$Collection_Route__c=$fdata['sObject']['Collection_Route__c'];
                $Collection_Route__c = !empty($fdata['sObject']['Collection_Route__c']) ? "'$Collection_Route__c'" : "NULL";
				$Container_RFID_tag__c=$fdata['sObject']['Container_RFID_tag__c'];
                $Container_RFID_tag__c = !empty($fdata['sObject']['Container_RFID_tag__c']) ? "'$Container_RFID_tag__c'" : "NULL";
				$Country__c=$fdata['sObject']['Country__c'];
                $Country__c = !empty($fdata['sObject']['Country__c']) ? "'$Country__c'" : "NULL";
				$CreatedById=$fdata['sObject']['CreatedById'];
                $CreatedById = !empty($fdata['sObject']['CreatedById']) ? "'$CreatedById'" : "NULL";
				$CreatedDate=$fdata['sObject']['CreatedDate'];
                $CreatedDate = !empty($fdata['sObject']['CreatedDate']) ? "'$CreatedDate'" : "NULL";
				$CreatedDateOnly__c=$fdata['sObject']['CreatedDateOnly__c'];
                $CreatedDateOnly__c = !empty($fdata['sObject']['CreatedDateOnly__c']) ? "'$CreatedDateOnly__c'" : "NULL";
				$Customer_Location__c=$fdata['sObject']['Customer_Location__c'];
                $Customer_Location__c = !empty($fdata['sObject']['Customer_Location__c']) ? "'$Customer_Location__c'" : "NULL";
				$Distance__c=$fdata['sObject']['Distance__c'];
                $Distance__c = !empty($fdata['sObject']['Distance__c']) ? "'$Distance__c'" : "NULL";
				$Duration__c=$fdata['sObject']['Duration__c'];
                $Duration__c = !empty($fdata['sObject']['Duration__c']) ? "'$Duration__c'" : "NULL";
				$Error_Code__c=$fdata['sObject']['Error_Code__c'];
                $Error_Code__c = !empty($fdata['sObject']['Error_Code__c']) ? "'$Error_Code__c'" : "NULL";
				$Error_Description__c=$fdata['sObject']['Error_Description__c'];
                $Error_Description__c = !empty($fdata['sObject']['Error_Description__c']) ? "'$Error_Description__c'" : "NULL";
				$Event_End_Date_Time__c=$fdata['sObject']['Event_End_Date_Time__c'];
                $Event_End_Date_Time__c = !empty($fdata['sObject']['Event_End_Date_Time__c']) ? "'$Event_End_Date_Time__c'" : "NULL";
				$Event_End__Latitude__s=$fdata['sObject']['Event_End__Latitude__s'];
                $Event_End__Latitude__s = !empty($fdata['sObject']['Event_End__Latitude__s']) ? "'$Event_End__Latitude__s'" : "NULL";
				$Event_End__Longitude__s=$fdata['sObject']['Event_End__Longitude__s'];
                $Event_End__Longitude__s = !empty($fdata['sObject']['Event_End__Longitude__s']) ? "'$Event_End__Longitude__s'" : "NULL";
				$Event_Start_Date_Time__c=$fdata['sObject']['Event_Start_Date_Time__c'];
                $Event_Start_Date_Time__c = !empty($fdata['sObject']['Event_Start_Date_Time__c']) ? "'$Event_Start_Date_Time__c'" : "NULL";
				$Event_Start_Date__c=$fdata['sObject']['Event_Start_Date__c'];
                $Event_Start_Date__c = !empty($fdata['sObject']['Event_Start_Date__c']) ? "'$Event_Start_Date__c'" : "NULL";
				$Event_Start_Tip_Date__c=$fdata['sObject']['Event_Start_Tip_Date__c'];
                $Event_Start_Tip_Date__c = !empty($fdata['sObject']['Event_Start_Tip_Date__c']) ? "'$Event_Start_Tip_Date__c'" : "NULL";
				$Event_Start__Latitude__s=$fdata['sObject']['Event_Start__Latitude__s'];
                $Event_Start__Latitude__s = !empty($fdata['sObject']['Event_Start__Latitude__s']) ? "'$Event_Start__Latitude__s'" : "NULL";
				$Event_Start__Longitude__s=$fdata['sObject']['Event_Start__Longitude__s'];
                $Event_Start__Longitude__s = !empty($fdata['sObject']['Event_Start__Longitude__s']) ? "'$Event_Start__Longitude__s'" : "NULL";
				$HarshAcceleration__c=$fdata['sObject']['HarshAcceleration__c'];
                $HarshAcceleration__c = !empty($fdata['sObject']['HarshAcceleration__c']) ? "'$HarshAcceleration__c'" : "NULL";
				$HarshBrakingInsyncId__c=$fdata['sObject']['HarshBrakingInsyncId__c'];
                $HarshBrakingInsyncId__c = !empty($fdata['sObject']['HarshBrakingInsyncId__c']) ? "'$HarshBrakingInsyncId__c'" : "NULL";
				$Heading__c=$fdata['sObject']['Heading__c'];
                $Heading__c = !empty($fdata['sObject']['Heading__c']) ? "'$Heading__c'" : "NULL";
				$HeartbeatInsyncId__c=$fdata['sObject']['HeartbeatInsyncId__c'];
                $HeartbeatInsyncId__c = !empty($fdata['sObject']['HeartbeatInsyncId__c']) ? "'$HeartbeatInsyncId__c'" : "NULL";
				$House_Number__c=$fdata['sObject']['House_Number__c'];
                $House_Number__c = !empty($fdata['sObject']['House_Number__c']) ? "'$House_Number__c'" : "NULL";
				$IdleTimeInsyncId__c=$fdata['sObject']['IdleTimeInsyncId__c'];
                $IdleTimeInsyncId__c = !empty($fdata['sObject']['IdleTimeInsyncId__c']) ? "'$IdleTimeInsyncId__c'" : "NULL";
				$InsyncId__c=$fdata['sObject']['InsyncId__c'];
                $InsyncId__c = !empty($fdata['sObject']['InsyncId__c']) ? "'$InsyncId__c'" : "NULL";
				$IsDeleted=$fdata['sObject']['IsDeleted'];
                $IsDeleted = !empty($fdata['sObject']['IsDeleted']) ? "'$IsDeleted'" : "NULL";
				$IsLatestTip__c=$fdata['sObject']['IsLatestTip__c'];
                $IsLatestTip__c = !empty($fdata['sObject']['IsLatestTip__c']) ? "'$IsLatestTip__c'" : "NULL";
				$Is_GPS_Location__c=$fdata['sObject']['Is_GPS_Location__c'];
                $Is_GPS_Location__c = !empty($fdata['sObject']['Is_GPS_Location__c']) ? "'$Is_GPS_Location__c'" : "NULL";
				$Is_Tipped_Twice__c=$fdata['sObject']['Is_Tipped_Twice__c'];
                $Is_Tipped_Twice__c = !empty($fdata['sObject']['Is_Tipped_Twice__c']) ? "'$Is_Tipped_Twice__c'" : "NULL";
				$Is_Tip_Mismatched__c=$fdata['sObject']['Is_Tip_Mismatched__c'];
                $Is_Tip_Mismatched__c = !empty($fdata['sObject']['Is_Tip_Mismatched__c']) ? "'$Is_Tip_Mismatched__c'" : "NULL";
				$Is_Viewable_On_Map__c=$fdata['sObject']['Is_Viewable_On_Map__c'];
                $Is_Viewable_On_Map__c = !empty($fdata['sObject']['Is_Viewable_On_Map__c']) ? "'$Is_Viewable_On_Map__c'" : "NULL";
				$LastModifiedById=$fdata['sObject']['LastModifiedById'];
                $LastModifiedById = !empty($fdata['sObject']['LastModifiedById']) ? "'$LastModifiedById'" : "NULL";
				$LastModifiedDate=$fdata['sObject']['LastModifiedDate'];
                $LastModifiedDate = !empty($fdata['sObject']['LastModifiedDate']) ? "'$LastModifiedDate'" : "NULL";
				$LastReferencedDate=$fdata['sObject']['LastReferencedDate'];
                $LastReferencedDate = !empty($fdata['sObject']['LastReferencedDate']) ? "'$LastReferencedDate'" : "NULL";
				$LastViewedDate=$fdata['sObject']['LastViewedDate'];
                $LastViewedDate = !empty($fdata['sObject']['LastViewedDate']) ? "'$LastViewedDate'" : "NULL";
				$Location_Address__c=$fdata['sObject']['Location_Address__c'];
                $Location_Address__c = !empty($fdata['sObject']['Location_Address__c']) ? "'$Location_Address__c'" : "NULL";
				$Max_Speed_Miles_per_hour__c=$fdata['sObject']['Max_Speed_Miles_per_hour__c'];
                $Max_Speed_Miles_per_hour__c = !empty($fdata['sObject']['Max_Speed_Miles_per_hour__c']) ? "'$Max_Speed_Miles_per_hour__c'" : "NULL";
				$Name=$fdata['sObject']['Name'];
                $Name = !empty($fdata['sObject']['Name']) ? "'$Name'" : "NULL";
				$ObservationInsyncId__c=$fdata['sObject']['ObservationInsyncId__c'];
                $ObservationInsyncId__c = !empty($fdata['sObject']['ObservationInsyncId__c']) ? "'$ObservationInsyncId__c'" : "NULL";
				$Observation_Description__c=$fdata['sObject']['Observation_Description__c'];
                $Observation_Description__c = !empty($fdata['sObject']['Observation_Description__c']) ? "'$Observation_Description__c'" : "NULL";
				$Observation_Number__c=$fdata['sObject']['Observation_Number__c'];
                $Observation_Number__c = !empty($fdata['sObject']['Observation_Number__c']) ? "'$Observation_Number__c'" : "NULL";
				$Obs_Num_Desc__c=$fdata['sObject']['Obs_Num_Desc__c'];
                $Obs_Num_Desc__c = !empty($fdata['sObject']['Obs_Num_Desc__c']) ? "'$Obs_Num_Desc__c'" : "NULL";
				$OwnerId=$fdata['sObject']['OwnerId'];
                $OwnerId = !empty($fdata['sObject']['OwnerId']) ? "'$OwnerId'" : "NULL";
				$readerEvent__c=$fdata['sObject']['readerEvent__c'];
                $readerEvent__c = !empty($fdata['sObject']['readerEvent__c']) ? "'$readerEvent__c'" : "NULL";
				$RecordTypeId=$fdata['sObject']['RecordTypeId'];
                $RecordTypeId = !empty($fdata['sObject']['RecordTypeId']) ? "'$RecordTypeId'" : "NULL";
				$Responce_JSON__c=$fdata['sObject']['Responce_JSON__c'];
                $Responce_JSON__c = !empty($fdata['sObject']['Responce_JSON__c']) ? "'$Responce_JSON__c'" : "NULL";
				$Service_Provider__c=$fdata['sObject']['Service_Provider__c'];
                $Service_Provider__c = !empty($fdata['sObject']['Service_Provider__c']) ? "'$Service_Provider__c'" : "NULL";
				$SFDC_Container_Asset__c=$fdata['sObject']['SFDC_Container_Asset__c'];
                $SFDC_Container_Asset__c = !empty($fdata['sObject']['SFDC_Container_Asset__c']) ? "'$SFDC_Container_Asset__c'" : "NULL";
				$SFDC_Device_Id__c=$fdata['sObject']['SFDC_Device_Id__c'];
                $SFDC_Device_Id__c = !empty($fdata['sObject']['SFDC_Device_Id__c']) ? "'$SFDC_Device_Id__c'" : "NULL";
				$SFDC_Truck_ID__c=$fdata['sObject']['SFDC_Truck_ID__c'];
                $SFDC_Truck_ID__c = !empty($fdata['sObject']['SFDC_Truck_ID__c']) ? "'$SFDC_Truck_ID__c'" : "NULL";
				$SpeedingInsyncId__c=$fdata['sObject']['SpeedingInsyncId__c'];
                $SpeedingInsyncId__c = !empty($fdata['sObject']['SpeedingInsyncId__c']) ? "'$SpeedingInsyncId__c'" : "NULL";
				$State__c=$fdata['sObject']['State__c'];
                $State__c = !empty($fdata['sObject']['State__c']) ? "'$State__c'" : "NULL";
				$Street__c=$fdata['sObject']['Street__c'];
                $Street__c = !empty($fdata['sObject']['Street__c']) ? "'$Street__c'" : "NULL";
				$Telematic_Event_Date__c=$fdata['sObject']['Telematic_Event_Date__c'];
                $Telematic_Event_Date__c = !empty($fdata['sObject']['Telematic_Event_Date__c']) ? "'$Telematic_Event_Date__c'" : "NULL";
				$Timezone__c=$fdata['sObject']['Timezone__c'];
                $Timezone__c = !empty($fdata['sObject']['Timezone__c']) ? "'$Timezone__c'" : "NULL";
				$TipNoTipNumber__c=$fdata['sObject']['TipNoTipNumber__c'];
                $TipNoTipNumber__c = !empty($fdata['sObject']['TipNoTipNumber__c']) ? "'$TipNoTipNumber__c'" : "NULL";
				$Tip_DateTime__c=$fdata['sObject']['Tip_DateTime__c'];
                $Tip_DateTime__c = !empty($fdata['sObject']['Tip_DateTime__c']) ? "'$Tip_DateTime__c'" : "NULL";
				$Tip_Date_Time__c=$fdata['sObject']['Tip_Date_Time__c'];
                $Tip_Date_Time__c = !empty($fdata['sObject']['Tip_Date_Time__c']) ? "'$Tip_Date_Time__c'" : "NULL";
				$Tip_Date__c=$fdata['sObject']['Tip_Date__c'];
                $Tip_Date__c = !empty($fdata['sObject']['Tip_Date__c']) ? "'$Tip_Date__c'" : "NULL";
				$Tip_hour_range__c=$fdata['sObject']['Tip_hour_range__c'];
                $Tip_hour_range__c = !empty($fdata['sObject']['Tip_hour_range__c']) ? "'$Tip_hour_range__c'" : "NULL";
				$Tip_Hour__c=$fdata['sObject']['Tip_Hour__c'];
                $Tip_Hour__c = !empty($fdata['sObject']['Tip_Hour__c']) ? "'$Tip_Hour__c'" : "NULL";
				$Tip_Lat_Lon__Latitude__s=$fdata['sObject']['Tip_Lat_Lon__Latitude__s'];
                $Tip_Lat_Lon__Latitude__s = !empty($fdata['sObject']['Tip_Lat_Lon__Latitude__s']) ? "'$Tip_Lat_Lon__Latitude__s'" : "NULL";
				$Tip_Lat_Lon__Longitude__s=$fdata['sObject']['Tip_Lat_Lon__Longitude__s'];
                $Tip_Lat_Lon__Longitude__s = !empty($fdata['sObject']['Tip_Lat_Lon__Longitude__s']) ? "'$Tip_Lat_Lon__Longitude__s'" : "NULL";
				$Tip_or_Non_Tip__c=$fdata['sObject']['Tip_or_Non_Tip__c'];
                $Tip_or_Non_Tip__c = !empty($fdata['sObject']['Tip_or_Non_Tip__c']) ? "'$Tip_or_Non_Tip__c'" : "NULL";
				$Truck_No__c=$fdata['sObject']['Truck_No__c'];
                $Truck_No__c = !empty($fdata['sObject']['Truck_No__c']) ? "'$Truck_No__c'" : "NULL";
				$Truck_Type__c=$fdata['sObject']['Truck_Type__c'];
                $Truck_Type__c = !empty($fdata['sObject']['Truck_Type__c']) ? "'$Truck_Type__c'" : "NULL";
				$Zip_Code__c=$fdata['sObject']['Zip_Code__c'];
                $Zip_Code__c = !empty($fdata['sObject']['Zip_Code__c']) ? "'$Zip_Code__c'" : "NULL";
				$RecordType=$fdata['sObject']['RecordType'];
                $RecordType = !empty($fdata['sObject']['RecordType']) ? "'$RecordType'" : "NULL";
			
			$query ="INSERT INTO public.individual_tip_non_tip_events__c (Id, Ammout_Over_Limit_mph__c, Amount_Over_Limit_Km_h__c, Asset_Serial__c, Asset_Type__c, City__c, Collection_Route_Text__c, Collection_Route__c, Container_RFID_tag__c, Country__c, CreatedById, CreatedDate, CreatedDateOnly__c, Customer_Location__c, Distance__c, Duration__c, Error_Code__c, Error_Description__c, Event_End_Date_Time__c, Event_End__Latitude__s, Event_End__Longitude__s, Event_Start_Date_Time__c, Event_Start_Date__c , Event_Start_Tip_Date__c, Event_Start__Latitude__s, Event_Start__Longitude__s, HarshAcceleration__c, HarshBrakingInsyncId__c, Heading__c, HeartbeatInsyncId__c, House_Number__c, IdleTimeInsyncId__c, InsyncId__c, IsDeleted, IsLatestTip__c, Is_GPS_Location__c, Is_Tipped_Twice__c, Is_Tip_Mismatched__c, Is_Viewable_On_Map__c, LastModifiedById, LastModifiedDate, LastReferencedDate, LastViewedDate, Location_Address__c, Max_Speed_Miles_per_hour__c, Name, ObservationInsyncId__c, Observation_Description__c, Observation_Number__c, Obs_Num_Desc__c, OwnerId, readerEvent__c, RecordTypeId, Responce_JSON__c, Service_Provider__c, SFDC_Container_Asset__c, SFDC_Device_Id__c, SFDC_Truck_ID__c, SpeedingInsyncId__c, State__c, Street__c, Telematic_Event_Date__c, Timezone__c, TipNoTipNumber__c, Tip_DateTime__c, Tip_Date_Time__c, Tip_Date__c, Tip_hour_range__c, Tip_Hour__c, Tip_Lat_Lon__Latitude__s, Tip_Lat_Lon__Longitude__s, Tip_or_Non_Tip__c, Truck_No__c, Truck_Type__c, Zip_Code__c) VALUES ($Id,$Ammout_Over_Limit_mph__c,$Amount_Over_Limit_Km_h__c,$Asset_Serial__c,$Asset_Type__c,$City__c,$Collection_Route_Text__c,$Collection_Route__c,$Container_RFID_tag__c,$Country__c,$CreatedById,$CreatedDate,$CreatedDateOnly__c,$Customer_Location__c,$Distance__c,$Duration__c,$Error_Code__c,$Error_Description__c,$Event_End_Date_Time__c,$Event_End__Latitude__s,$Event_End__Longitude__s,$Event_Start_Date_Time__c,$Event_Start_Date__c ,$Event_Start_Tip_Date__c,$Event_Start__Latitude__s,$Event_Start__Longitude__s,$HarshAcceleration__c,$HarshBrakingInsyncId__c,$Heading__c,$HeartbeatInsyncId__c,$House_Number__c,$IdleTimeInsyncId__c,$InsyncId__c,$IsDeleted,$IsLatestTip__c,$Is_GPS_Location__c,$Is_Tipped_Twice__c,$Is_Tip_Mismatched__c,$Is_Viewable_On_Map__c,$LastModifiedById,$LastModifiedDate,$LastReferencedDate,$LastViewedDate,$Location_Address__c,$Max_Speed_Miles_per_hour__c,$Name,$ObservationInsyncId__c,$Observation_Description__c,$Observation_Number__c,$Obs_Num_Desc__c,$OwnerId,$readerEvent__c,$RecordTypeId,$Responce_JSON__c,$Service_Provider__c,$SFDC_Container_Asset__c,$SFDC_Device_Id__c,$SFDC_Truck_ID__c,$SpeedingInsyncId__c,$State__c,$Street__c,$Telematic_Event_Date__c,$Timezone__c,$TipNoTipNumber__c,$Tip_DateTime__c,$Tip_Date_Time__c,$Tip_Date__c,$Tip_hour_range__c,$Tip_Hour__c,$Tip_Lat_Lon__Latitude__s,$Tip_Lat_Lon__Longitude__s,$Tip_or_Non_Tip__c,$Truck_No__c,$Truck_Type__c,$Zip_Code__c)";
			$queryRecords = pg_query($conn, $query) or die("error to save  data");
			if(!empty($queryRecords)){
				$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>true</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
			}else{
				$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>false</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
			}
			 
			}
		}
		header('Content-type: text/xml');
	    echo $XML;
		}
	}else{
			$XML = '<?xml version="1.0" encoding="utf-8"?><soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"><soapenv:Body><notificationsResponse xmlns="http://soap.sforce.com/2005/09/outbound"><Ack>false</Ack></notificationsResponse></soapenv:Body></soapenv:Envelope>';
			header('Content-type: text/xml');
	        echo $XML;
		}

     /*
       Function Name : object_to_array
       Params : 
       Description :for convert object to array
      */
		function object_to_array($data) 
			{
			if ((! is_array($data)) and (! is_object($data))) return 'no_record'; //$data;

			$result = array();

			$data = (array) $data;
			foreach ($data as $key => $value) {
				if (is_object($value)) $value = (array) $value;
				if (is_array($value)) 
				$result[$key] = object_to_array($value);
				else
					$result[$key] = $value;
			}

			return $result;
			}
 ?>

