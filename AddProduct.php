<?php 
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["images"]["name"]);
	$userId = 0;
	if (isset($_SESSION['userId']))
		$userId = $_SESSION['userId'];

	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('Y-m-d H:i:s');

	move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);

	$sendInfo = [
					'IdThanhVien' => $userId,
					'Hinh' => $target_file,
					'MoTa' => $_POST['description'],
					'ThoiGianKhoiTao' => $date,
					'ThoiGianCapNhat' => $date
				];

	$sendInfo = json_encode($sendInfo);

	$result = $client->AddProductInStore(['jsonString' => $sendInfo])->AddProductInStoreResult;

	//$result = $client->GetAllProductsInStore()->GetAllProductsInStoreResult;

	echo $result;
?>