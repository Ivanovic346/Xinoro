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
				echo '<div style="background:url('."'vendor/assets/XinoroEditor/images/".$items["category"]."-".$items["code"]."/header.png"."'".');" onclick="createNewBox('."'".$items["code"]."'".','."'".$items["category"]."'".');" type="'.$items["category"].'" code="'.$items["code"].'" class="box">
						
			  		</div>';
					//   '.$items["title"].'
			}
		}
		// debug
		// echo "</br>";
		// var_dump($_POST);
	}
?>
</body>