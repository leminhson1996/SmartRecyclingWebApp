<?php
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$sendInfo = [
					'TenVatThe' => $_GET['object'],
					'ChatLieu' => $_GET['material'],
					'MucDich' => $_GET['purpose']
				];

	$sendInfo = json_encode($sendInfo);

//	echo $postResult = $client->GetAllPost()->GetAllPostResult;

	$result = $client->Search(['jsonString' => $sendInfo])->SearchResult;

	

	echo $result;
	
?>