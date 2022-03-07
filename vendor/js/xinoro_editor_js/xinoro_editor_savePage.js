function savePage()
{   
    // Переменные
    let Htmlcontent = "";
    let Csscontent = [];
    let params = (new URL(document.location)).searchParams; // Получение get запросов

    // Удаляем атрибуты
    for(let div of document.querySelectorAll("#xinoro_text_ed")) 
    { 
        div.removeAttribute("contenteditable"); 
    }
    for(let div of document.querySelectorAll("#xinoro_background")) 
    {
         div.setAttribute("image-path",btoa(div.getAttribute('image-path')));
         div.removeAttribute("style");
    }

    // Удаляем у всеъ блоков инструменты для редактирования блока

    // Получение блоков на сохранение
    $('.xinoro-box').each(function(i) {
        Htmlcontent += '<div index="'+$(this).attr('index')+'" class="xinoro-box">' + $( this ).html() + '</div>';
        Csscontent.push($(this).attr('index')); // Получение id блока
    });

    // Отправка запроса на сохранение
    $.ajax({
        url: "admin/ajax",
        type: "POST",
        data: {
          type: "savePages",
          saveController: params.get("controller_edit"),
          saveAction: params.get("action_edit"),
          saveHtmlContent: Htmlcontent,
          saveCssContent: Array.from(new Set(Csscontent))
        },
        success: function(result) {
            document.getElementById("xinoro-global-container").innerHTML += result.substr(result.indexOf("<body>", "</body>"));
        }
    });

    // Включаем возможность редактирования текста назад
    for(let div of document.querySelectorAll("#xinoro_text_ed")){ div.contentEditable = true; }
}