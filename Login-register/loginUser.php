<?php
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$result = $client->CheckLogin([	'userName' => $_POST['usernameLogin'], 
									'password' => $_POST['passwordLogin']])
					 ->CheckLoginResult;

	echo $result;
?>