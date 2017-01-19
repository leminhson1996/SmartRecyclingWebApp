<?php
	session_start();
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$result = $client->CheckLogin([	'userName' => $_POST['usernameLogin'], 
									'password' => $_POST['passwordLogin']])
					 ->CheckLoginResult;


	if ($result == 1) {
		$userId = $client->GetUserId(['userName' => $_POST['usernameLogin']])
						->GetUserIdResult;
		if($userId) {
		 	//
		 	$_SESSION['userId'] = $userId;
		 	$_SESSION['username'] = $_POST['usernameLogin'];
		 	echo true;
		 	//header('Location: ../index.html');
		}
	}

?>