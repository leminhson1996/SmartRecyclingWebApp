<?php
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$result = $client->GetAllProductsInStore()->GetAllProductsInStoreResult;

	echo $result;
?>