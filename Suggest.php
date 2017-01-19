<?php 
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";

	$client = new SOAPClient($webServiceUrl);

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('Y-m-d H:i:s');

	$sendInfo = [
					'IdThanhVien' => 0,
					'TenVatThe' => $_POST['name'],
					'ChatLieu' => $_POST['material'],
					'MoTa' => $_POST['description'],
					'NoiDung' => $_POST['content'],
					'MucDich' => $_POST['purpose'],
					'SoLuotThich' => 0,
					'HinhAnh' => '123.png',
					'Video' => $_POST['video'],
					'ThoiGianKhoiTao' => $date,
					'ThoiGianCapNhat' => $date
				];

	$sendInfo = json_encode($sendInfo);

	$result = $client->AddPost(['jsonString' => $sendInfo])->AddPostResult;

	//$result = $client->GetAllPost()->GetAllPostResult;
	//echo $_POST['description'];
	echo $result;
?>