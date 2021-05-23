<?php
	//Определяем имя функции и параметры
	//$arrayItems - массив с названиями разделов сайта
	//$currentItem - номер текущего раздела

	function getTitle($arrayItems, $currentItem){
		$title = "";
		foreach ($arrayItems as $key => $value) {
			if ($key == $currentItem) {
				$title = $value;
				break;
			}
		}
		return $title;
	}
?>