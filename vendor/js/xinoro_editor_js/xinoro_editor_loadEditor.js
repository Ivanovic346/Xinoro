// Активация редактора
window.onload = function() {
    let styleLinks = [];

    // Включаем возможность редактора
    getEditorTools();

    // Расшифровываем пути для замены картинок
    for(let div of document.querySelectorAll("#xinoro_background")) {
        div.setAttribute("image-path",atob(div.getAttribute('image-path')));
   }

    // Заменяем картинки
    switchImagesUrl();

    // Находим все блоки для которых подключим стили
    $('.xinoro-box').each(function(i) {
        styleLinks.push($(this).attr('index')); // Получение id блока
    });
    

    // Подключение css
    $.each(Array.from(new Set(styleLinks)), function(index,value) {
        createCssLink(value+".css");
    });
};


function switchImagesUrl()
{
    // Меняем пути изображений для редактора(background)
    for(let div of document.querySelectorAll("#xinoro_background"))
    {
        div.style.backgroundImage = "url(vendor/assets/XinoroEditor/images/"+div.getAttribute('image-path')+")";
    }

    // Меняем пути для img
    for(let div of document.querySelectorAll("#xinoro_image"))
    {
        div.setAttribute("src","vendor/assets/XinoroEditor/images/"+div.getAttribute('image-path')+")");
    }
}


function getEditorTools()
{
    // Добавляем всем блокам инструменты для редактирования блока
    for(let div of document.querySelectorAll(".xinoro-box"))
    {
        $("<div class='box-editor-tools-r1'><div class='xinoro-box-edit-tool'>Редактировать</div><div onClick='boxDelete(this);' class='xinoro-box-delete-tool'><img src='vendor/image/trash.svg'></div></div>").prependTo(div);
    }

    // Включаем возможность редактирования текста
    for(let div of document.querySelectorAll("#xinoro_text_ed"))
    {
      div.contentEditable = true;
    }
}