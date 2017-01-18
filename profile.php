<?php
	session_start();

	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$userId = 0;
	if(isset($_SESSION['userId'])) 
		$userId = $_SESSION['userId'];

	$result = $client->GetUserById(['Id' => $userId])->GetUserByIdResult;

	echo $result;
?>