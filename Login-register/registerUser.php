<?php 
	session_start();
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);


	$sendInfo = [
					'TenDangNhap' => $_POST['username'],
					'MatKhau' => $_POST['password'],
					'Email' => $_POST['email'],
					'HoTen' => '',
					'SoDienThoai' => '',
					'DiaChi' => '',
					'Id' => 0
				];

	$sendInfo = json_encode($sendInfo);

	$result = $client->AddUser(['jsonString' => $sendInfo])->AddUserResult;

	//echo $result;
	
	if ($result == 1) {
		$userId = $client->GetUserId(['userName' => $_POST['username']])
						->GetUserIdResult;
		if($userId) {
		 	//
		 	$_SESSION['userId'] = $userId;
		 	$_SESSION['username'] = $_POST['username'];
		 	echo true;
		}
	}

	// $_SESSION['userId'] = $userId;
 // 	$_SESSION['username'] = $_POST['usernameLogin'];
	
?>