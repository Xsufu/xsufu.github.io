<?php
	include('config.php');
	include('functions.php');

	$fileContent = DIR_INCLUDE_SECTIONS.'section_0.php';
	$title = "Taxa Travel ";

	if(isset($_GET[GET_ID_SECTION])) {
		$idContent = (int)$_GET[GET_ID_SECTION];
		$fileContentTemp = DIR_INCLUDE_SECTIONS.'section_'.$idContent.'.php';

		if (file_exists($fileContentTemp)) {
			$fileContent = $fileContentTemp;
			$title.= '|'.getTitle($GLOBALS['arrContent'], $idContent);
		}
		else {
			$fileContent = ERR_FILE_NO_EXISTS;
		}
	}

	include 'index.html';
?>