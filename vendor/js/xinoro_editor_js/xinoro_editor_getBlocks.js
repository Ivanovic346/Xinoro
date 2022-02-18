// Вытягивание блока в редактор
function createNewBox(idblock,category)
{
  $.ajax({
    url: "admin/ajax",
    type: "POST",
    data: {
      type: "getBlock",
      blockid: idblock,
      blockcategory: category
    },
    success: function(result) {
      document.getElementById("xinoro-global-container").innerHTML += result.substr(result.indexOf("<body>", "</body>"));
  
      createCssLink(category+"-"+idblock+".css");
      switchImagesUrl();

      // Включаем возможность редактирования текста
      for(let div of document.querySelectorAll("#xinoro_text_ed"))
      {
        div.contentEditable = true;
      }

      loadToolMenu();
      
    }
  });

}

// Создает временное css подключение(Для отображения)
function createCssLink(nameCss)
{
    var a = document.createElement("link");
    a.rel="stylesheet";
    a.href="vendor/assets/XinoroEditor/css/"+nameCss;
    document.getElementsByTagName("head")[0].appendChild(a)
}