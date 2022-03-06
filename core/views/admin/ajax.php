<body>
<?php 
	if(isset($_POST['type']))
	{
		// Получение блоков для редактора
		if($_POST["type"] == "getBlock")
			echo file_get_contents("vendor/assets/XinoroEditor/html/".$_POST["blockcategory"]."/".$_POST["blockcategory"]."-".$_POST["blockid"].".html");
		
		// Сохранение блоков в страницу
		if($_POST["type"] == "savePages")
		{
			$Csscontent = "";

			// Создание css файла
			foreach($_POST["saveCssContent"] as $key => $value)
			{
				$Csscontent = $Csscontent.file_get_contents("vendor/assets/XinoroEditor/css/".$value.".css");
			}

			// Сохранение в файлы
			file_put_contents("core/views/".$_POST["saveController"]."/".$_POST["saveAction"].".php", $_POST["saveHtmlContent"]);
			file_put_contents("vendor/css/".$_POST["saveController"]."-".$_POST["saveAction"].".css", $Csscontent);
		}

		// Получение блоков из категорий
		if($_POST["type"] == "getBlocksCategory")
		{
			$mysqlconnect = new BaseDate();
			foreach($mysqlconnect->getAllDate("SELECT * FROM editor_block WHERE category LIKE '".$_POST['category']."'") as $value => $items)
			{
				echo '<div style="background:url('."'vendor/assets/XinoroEditor/images/".$items["category"]."-".$items["code"]."/header.png"."'".');" onclick="createNewBox('."'".$items["code"]."'".','."'".$items["category"]."'".');" type="'.$items["category"].'" code="'.$items["code"].'" class="box"></div>';
			}
		}

		// Поиск страниц на админ панели
		if($_POST["type"] == "search-input")
		{
			$mysqlconnect = new BaseDate();
			foreach($mysqlconnect->getAllDate("SELECT * FROM routes WHERE title LIKE '%".$_POST['query']."%'") as $value => $items)
			{
				echo '<div class="item" data-bs-toggle="modal" data-bs-target="#exampleModal2" onclick="showInfo('."'".$items["title"]."'".', '."'".$items["url"]."'".', '."'".$items["controller"]."'".', '."'".$items["action"]."'".', '."'".$items["visible"]."'".', '."'".$items["library"]."'".')">
				<img src="https://wikiway.com/upload/hl-photo/a47/a82/empayr-steyt-bilding_60.jpg" alt="">
					<p class="first-text">'.$items["title"].'</p>
					<p class="second-text">'.$items["controller"].'|'.$items["action"].'</p>
				</div>';
			}
		}

		// echo "</br>";
		// var_dump($_POST);
	}
?>
</body>