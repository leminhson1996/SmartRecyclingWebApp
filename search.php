<?php
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$sendInfo = [
					'TenVatThe' => $_GET['object'],
					'ChatLieu' => $_GET['material'],
					'MucDich' => $_GET['purpose']
				];

	echo $sendInfo = json_encode($sendInfo);

	$result = $client->Search(['jsonString' => $sendInfo])->SearchResult;
	
	print_r($result);
?>