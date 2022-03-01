$(document).ready(function(){
    $(".language_picker").click(function()
    {
        window.location.href = $('option:selected', this).data('url');
    });
});
