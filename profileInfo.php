<?php
	session_start();

	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$userId = 0;
	if(isset($_SESSION['userId'])) 
		$userId = $_SESSION['userId'];


	$recyclingResult = $client->GetAllPostOfUser(['userID' => $userId])->GetAllPostOfUserResult;
	$shoppingResult = $client->GetAllProductInStoreOfUser(['userID' => $userId])->GetAllProductInStoreOfUserResult;
	$charityResult = $client->GetAllCharityOfUser(['userID' => $userId])->GetAllCharityOfUserResult;

	$result =	[
					'recycling' => $recyclingResult,
					'shopping' => $shoppingResult,
					'charity' => $charityResult
				];
	$result = json_encode($result, JSON_FORCE_OBJECT);
	
	echo $result;
?>