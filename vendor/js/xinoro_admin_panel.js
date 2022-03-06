// 
//  Initializations of variables
// 

let infobox_url, infobox_controller, infobox_action;
let selectedPage;

//
// Modal window`s
//

var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')
  modalBodyInput.value = recipient
})

var exampleModal = document.getElementById('exampleModal2')
exampleModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var recipient = button.getAttribute('data-bs-whatever')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')
  modalBodyInput.value = recipient
})

//
// Button`s Function
//

// Open page in page editor
document.getElementById("openInEditor").addEventListener("click", function (event) {
  window.location.href = "admin/editor?url_edit="+infobox_url+"&controller_edit="+infobox_controller+"&action_edit="+infobox_action;
});

// Save list library used
document.getElementById("savelibbtn").addEventListener("click", function (event) {
  let libs = "";
  for(let elem of ["bootstrap","jquery","xohebb"])
  {
    if(document.getElementById(elem).checked)
      libs += elem+";";
  }
  window.location.href = "admin/panel?lib&lib_url="+selectedPage+"&libs_select="+libs;
});

// Show info box and input info
function showInfo(title, url, controller, action, visible, libs){

  // Init variables
  infobox_url = url;
  infobox_controller = controller;
  infobox_action = action;
  let library = libs.split(";");
  selectedPage = url;

  // unchecked checkbox
  for (let elem of  document.querySelectorAll('.custom-checkbox')) {
    elem.checked = false;
  }

  // find match in list library
  library.forEach(element => {
    try
    {
      document.getElementById(element).checked = true;
    }
    catch{}
  });
}

// search pages
$('#search-input').keyup(function(){
  $.ajax({
    url: "admin/ajax",
    type: "POST",
    data: {
      type: "search-input",
      query: $('#search-input').val(),
    },
    success: function(result) {
      $("#items-box-searcher").empty();
      document.getElementById("items-box-searcher").innerHTML += result.substr(result.indexOf("<body>", "</body>"));
    }
  });
});