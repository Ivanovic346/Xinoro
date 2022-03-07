<body id="xinoro-global-container">
  <div class="text-editor-tools-r1">
    <div class="editor-tools-r2">
      <img src="vendor/assets/XoheBB/image/B.svg" alt="">
    </div>
    <div class="editor-tools-r2">
      <img src="vendor/assets/XoheBB/image/I.svg" alt="">
    </div>
    <div class="editor-tools-r2">
      <img src="vendor/assets/XoheBB/image/U.svg" alt="">
    </div>
    <div class="editor-tools-r2">
      <img src="vendor/assets/XoheBB/image/S.svg" alt="">
    </div>
  </div>
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
      <li class="nav-item" id="nav-btn" type="column">
        <a class="nav-link">Колонки</a>
      </li>
      <li class="nav-item" id="nav-btn" type="separator">
        <a class="nav-link">Разделитель</a>
      </li>
      <li class="nav-item" id="nav-btn" type="menu">
        <a class="nav-link">Меню</a>
      </li>
      <li class="nav-item" id="nav-btn" type="footer">
        <a class="nav-link">Подвал</a>
      </li>
      <li class="nav-item" id="nav-btn" type="video">
        <a class="nav-link">Видео</a>
      </li>
      <li class="nav-item" id="nav-btn" type="form">
        <a class="nav-link">Форма</a>
      </li>
      <li class="nav-item" id="nav-btn" type="">
        <a class="nav-link" type="other">Другое</a>
      </li>
      <li class="nav-item saveBtn">
        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#saveModal" onclick="savePage();">Сохранить</a>
      </li>
    </ul>
    <div id="items-box" class="design-box"></div>
  </nav>
  <?php echo $args["page_content"]; ?>
  <!-- Modal -->
  <div class="modal fade" id="saveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="exampleModalLabel">Сохранение страницы</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="location.reload();" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Ваша страница была успешно сохранена, спасибо что используете Xinoro CMS
        </div>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="vendor/js/xinoro_admin_editor.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_getBlocks.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_savePage.js"></script>
<script type="text/javascript" src="vendor/js/xinoro_editor_js/xinoro_editor_loadEditor.js"></script>