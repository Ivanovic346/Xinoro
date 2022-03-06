<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="vendor/css/xinoro_admin_panel.css">
	<title>Панель администратора</title>
</head>
<body>
	<div class="wrapper">
        <div class="menu">
            <img class="logo-icon unselectable" src="vendor/image/logo-xinoro.png" alt="">
            <div class="menu-element menu-element-select mt-6">
                <img class="unselectable" src="vendor/image/dashboard-ico-Active.svg" alt="">
                <span>Главная</span>
            </div>
            <div class="menu-element">
                <img class="unselectable" src="vendor/image/content-ico-noActive.svg" alt="">
                <span>Контент</span>
            </div>
            <div class="menu-element">
                <img class="unselectable" src="vendor/image/database-ico-noActive.svg" alt="">
                <span>База данных</span>
            </div>
            <div class="menu-element mb-5">
                <img class="unselectable" src="vendor/image/setting-ico-noActive.svg" alt="">
                <span>Настройка</span>
            </div>
            <hr class="mb-5"/>
            <div class="menu-element">
                <img class="unselectable" src="vendor/image/content-ico-noActive.svg" alt="">
                <span>Редактор</span>
            </div>
            <div class="menu-element">
                <img class="unselectable" src="vendor/image/content-ico-noActive.svg" alt="">
                <span>Почта</span>
            </div>
            <div class="menu-element">
                <img class="unselectable" src="vendor/image/content-ico-noActive.svg" alt="">
                <span>Тестирование</span>
            </div>
            <div class="menu-element">
                <img class="unselectable" src="vendor/image/content-ico-noActive.svg" alt="">
                <span>Api</span>
            </div>
        </div>
        <div class="content">
            <div class="search">
                <input type="text" placeholder="Поиск страниц" name="" id="">
            </div>
            <div class="create-box">
                <div class="text-box">
                    <span>Создавай свои <br> проекты - просто</span>
					<button class="create-box-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Создать</button>
                </div>
                <img class="create-box-bg" src="vendor/image/panel-bg-img.png" alt="">
            </div>
            <div class="items-box">
				<?php
					#===========================================================================
					# openInEditor() - javascript(local func) - Открытие страницы в редакторе
					# showInfo() - javascript(local func) - Открытие информации о странице
					#===========================================================================
					# Вывод путей на страницы
					foreach($args["items"] as $value)
					{
						echo '<div class="item" data-bs-toggle="modal" data-bs-target="#exampleModal2" onclick="showInfo('."'".$value["title"]."'".', '."'".$value["url"]."'".', '."'".$value["controller"]."'".', '."'".$value["action"]."'".', '."'".$value["visible"]."'".', '."'".$value["library"]."'".')">
							<img src="https://wikiway.com/upload/hl-photo/a47/a82/empayr-steyt-bilding_60.jpg" alt="">
							<p class="first-text">'.$value["title"].'</p>
							<p class="second-text">'.$value["controller"].'|'.$value["action"].'</p>
						</div>
						';
					}
				?>
            </div>
        </div>
    </div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Создание страницы</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid">
			    <div class="row">
			    	<div class="col-12">
			    		<form action="admin/panel" method="POST">
				    		<p>Ссылка</p>
				    		<input class="inputed" type="text" name="url" placeholder="example/panel" required>
				    		<p>Контроллер</p>
				    		<input class="inputed" type="text" name="controller" placeholder="example" required>
				    		<p>Действие</p>
				    		<input class="inputed" type="text" name="action" placeholder="example" required>
				    		<p>Заголовок</p>
				    		<input class="inputed" type="text" name="title" placeholder="Example Test" required>
					        <input class="btn btn-primary" type="submit" name="createpage" value="Создать">
			    		</form>
			    	</div>
			    </div>
			</div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal-2 -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Редактирование страницы</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="container-fluid">
			    <div class="row">
			    	<div class="col-12">
						<div class="checkbox-l">
							<div class="checkbox">
								<input class="custom-checkbox" type="checkbox" id="bootstrap" name="bootstrap" value="indigo">
								<label for="bootstrap">Bootstrap 5</label>
							</div>

							<div class="checkbox">
								<input class="custom-checkbox" type="checkbox" id="jquery" name="jquery" value="yes">
								<label for="jquery">Jquery</label>
							</div>

							<div class="checkbox">
								<input class="custom-checkbox" type="checkbox" id="xohebb" name="xohebb" value="brown">
								<label for="xohebb">XoheBB</label>
							</div>
							<input class="btn btn-primary" id="openInEditor" style="margin-bottom: 0px; border-bottom-width: 0px;" type="submit" name="createpage" value="Открыть в редакторе">
							<input class="btn btn-primary" style="margin-top: 5px;" id="savelibbtn" type="submit" name="createpage" value="Сохранить">
						</div>
			    	</div>
			    </div>
			</div>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>
<script type="text/javascript" src="vendor/js/xinoro_admin_panel.js"></script>