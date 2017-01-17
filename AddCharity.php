<?php 
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('Y-m-d H:i:s');

	$sendInfo = [
					'IdThanhVien' => $_SESSION['userId'],
					'TenDoVat' => $_POST['name'],
					'MoTa' => $_POST['description'],
					'SoLuotThich' => 0,
					'Hinh' => '123.png',
					'ThoiGianKhoiTao' => $date,
					'ThoiGianCapNhat' => $date
				];

	$sendInfo = json_encode($sendInfo);

	//result = $client->AddCharity(['jsonString' => $sendInfo])->AddCharityResult;
	$result = $client->GetAllCharity()->GetAllCharityResult;
	//echo $_POST['description'];
	echo $result;
?>