<?php

function uploadImg($Imgfile) {

	$file = $Imgfile;

	$dirUploads = 'uploads';

	if(!is_dir($dirUploads)) {
		mkdir($dirUploads);
	}

	$fileName = md5(uniqid()) . '-' . time() . '.jpeg';

	$newFileName = $dirUploads . DIRECTORY_SEPARATOR . $fileName;

	if(move_uploaded_file($file['tmp_name'], $newFileName)){

		return $fileName;

	} else {

		echo "Erro ao efetuar o upload";
		exit;

	}
}

?>