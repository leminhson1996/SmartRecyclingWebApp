<?php
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	$result = $client->GetAllCharity()->GetAllCharityResult;

	// $userID = json_decode($result);

	// $userID = $userID[0]->IdThanhVien;

	// $telephone = $client->GetUserById(['Id' => $userID])->GetUserByIdResult;

	// $telephone = json_decode($telephone);

	// $telephone = $telephone->SoDienThoai;

	$user = $client->GetAllUser()->GetAllUserResult;

	$result = json_decode($result);
	$total = count((array)$result);

	
	$res = [];

	for ($i = 0; $i < $total; $i++) {
		$resRow = [];
		foreach ($result[$i] as $key => $value) {
			$resRow += [$key => $value];
		}

		$userID = $result[$i]->IdThanhVien;
		$telephone = $client->GetUserById(['Id' => $userID])->GetUserByIdResult;
		$telephone = json_decode($telephone);
		if (isset($telephone->SoDienThoai))
			$telephone = $telephone->SoDienThoai;
		else
			$telephone="";

		$resRow += ['SoDienThoai' => $telephone];
		

		$res[$i] = $resRow;
		
	}

	
	$res = json_encode($res, JSON_FORCE_OBJECT);

	echo $res;
?>