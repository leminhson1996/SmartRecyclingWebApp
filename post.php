<?php
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$postResult = $client->GetAllPost()->GetAllPostResult;

	$userID = json_decode($postResult);

	$userID = $userID[0]->IdThanhVien;

	$userName = $client->GetUserById(['Id' => $userID])->GetUserByIdResult;

	$userName = json_decode($userName);

	$userName = $userName[0]->TenDangNhap;
	$postResult = json_decode($postResult);
	$postResult = $postResult[0];

	$res = [];

	foreach ($postResult as $key => $value) {
		$res += [$key => $value];
	}
	$res += ['ThanhVien' => $userName];

	$res = json_encode($res);
	//echo $res;

	$result = $client->GetAllCharity()->GetAllCharityResult;

	echo $result;
?>