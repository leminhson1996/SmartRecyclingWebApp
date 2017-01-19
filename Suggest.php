<?php 
	session_start();
	$webServiceUrl = "http://smartrecyclingservice.somee.com/DataService.asmx?WSDL";
	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	$userId = 11;
	if (isset($_SESSION['userId']))
		$userId = $_SESSION['userId'];

	

	$client = new SOAPClient($webServiceUrl);

	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('Y-m-d H:i:s');

	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

	$sendInfo = [
					'IdThanhVien' => $userId,
					'TenVatThe' => $_POST['name'],
					'ChatLieu' => $_POST['material'],
					'MoTa' => $_POST['description'],
					'NoiDung' => $_POST['content'],
					'MucDich' => $_POST['purpose'],
					'SoLuotThich' => 0,
					'HinhAnh' => $target_file,
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
