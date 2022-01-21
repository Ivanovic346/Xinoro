<html>
	<head>
		<link rel="stylesheet" type="text/css" href="vendor/css/panel.css">
	</head>
	<body>
		<header>
			<a href="admin/panel" class="logo"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/logob.png?raw=true" alt=""></a>
			<div class="nav">
				<ul>
					<li><a href="admin/panel"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/content"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Page-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/database"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-User-Icon.png?raw=true" alt=""></a></li>
					<li><a href="admin/setting"><img src="https://github.com/xoheveras/Xinoro/blob/main/default_config/default_img/Main-Setting-Icon.png?raw=true" alt=""></a></li>
				</ul>
			</div>
		</header>
		<content>
			<div class="info-box">
				<div class="buttons">
					<div class="label">Pages</div>
					<div onclick="openPageControll();" class="addpages">добавить</div>
				</div>
				<div class="pages">
					<?php 
						$pages = json_decode(file_get_contents("config/routes.json"),true);
						foreach($pages['routes'] as $value)
						{
							$editKey = "'".$value[1]."','".$value[2]."'";
							echo '
								<div onclick="openInEditor('.$editKey.');" class="page">
									<div class="url">'.$value[0].'</div>
									<div class="controller">'.$value[1].'</div>
									<div class="action">'.$value[2].'</div>
								</div>
							';
						}
					?>
				</div>
			</div>
			<div id="create-page-controll" class="box-add">
				<div class="label-func">Создание страницы</div>
				<input type="text" id="url" placeholder="Url">
				<input type="text" id="controller" placeholder="Controller">
				<input type="text" id="action" placeholder="Action">
				<div onclick="createPage();" class="create-page-btn">Создать</div>
			</div>
		</content>
	</body>
</html>
<script type="text/javascript">
	let pageControll = document.getElementById("create-page-controll");
	let inputUrl = document.getElementById("url");
	let inputController = document.getElementById("controller");
	let inputAction = document.getElementById("action");
	pageControll.hidden = true;

	function openPageControll()
	{
		pageControll.hidden = false;
	}

	function createPage()
	{
		window.location.href = 'admin/panel?createpage&u='+inputUrl.value+'&c='+inputController.value+'&a='+inputAction.value;
	}

	function openInEditor(contoller, action)
	{
		window.location.href = 'admin/editor?pageedit&c='+contoller+'&a='+action;
	}
</script>
<!-- <script type="text/javascript" src="vendor/js/panel.js"></script> -->