<?php 
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["images"]["name"]);

	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$userId = 0;
	if (isset($_SESSION['userId']))
		$userId = $_SESSION['userId'];

	$client = new SOAPClient($webServiceUrl);

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('Y-m-d H:i:s');

	move_uploaded_file($_FILES["images"]["tmp_name"], $target_file);

	$sendInfo = [
					'IdThanhVien' => $userId,
					'TenDoVat' => $_POST['name'],
					'MoTa' => $_POST['description'],
					'SoLuotThich' => 0,
					'Hinh' => $target_file,
					'ThoiGianKhoiTao' => $date,
					'ThoiGianCapNhat' => $date
				];

	$sendInfo = json_encode($sendInfo);

	$sresult = $client->AddCharity(['jsonString' => $sendInfo])->AddCharityResult;
	//$result = $client->GetAllCharity()->GetAllCharityResult;
	//echo $_POST['description'];
	echo $result;
?>