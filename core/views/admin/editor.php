<body id="xinoro-global-container">
  <nav>
    <ul class="nav p-2 nav-pills justify-content-center">
      <li class="nav-item">
        <a class="nav-link">О проекте</a>
      </li>
      <li class="nav-item" id="nav-btn" type="header">
        <a class="nav-link">Заголовок</a>
      </li>
      <li class="nav-item" id="nav-btn" type="text">
        <a class="nav-link">Текст</a>
      </li>
      <li class="nav-item" id="nav-btn" type="image">
        <a class="nav-link">Картинка</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link">Приемущества</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link">Колонки</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link">Разделитель</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link">Меню</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link">Подвал</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link">Видео</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link">Форма</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link" type="other">Другое</a>
      </li>
      <li class="nav-item saveBtn">
        <a class="nav-link" onclick="savePage();">Сохранить</a>
      </li>
    </ul>
    <div id="items-box" class="design-box pt-4 ps-4">
      <div onclick="createNewBox('1','header');" type="header" code="1" class="box">
						Заголовок с горами
			</div>
      <div onclick="createNewBox('1','text');" type="text" code="1" class="box">
						Красивый текст с кнопкой
			</div>
      <div onclick="createNewBox('2','header');" type="header" code="2" class="box">
            Заголовок с лого
			</div>
      <div onclick="createNewBox('1','menu');" type="menu" code="1" class="box">
						Меню
			</div>
      <div onclick="createNewBox('1','footer');" type="footer" code="1" class="box">
						footer от вани
			</div>
    </div>
  </nav>
  <?php echo $args["page_content"]; ?>
</body>
<script type="text/javascript" src="vendor/js/xinoro_admin_editor.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_getBlocks.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_savePage.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_loadEditor.js"></script>