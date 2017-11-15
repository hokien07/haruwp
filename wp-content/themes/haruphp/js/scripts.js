$(document).ready(function(){
  $('.with-bg').each(function(){
    $(this).css("background-image", 'url(' + $(this).data("background") + ')');
  });
  
  url = window.location.href.toString().split(window.location.host)['1'];
  url = url.split('/')['1'];
  $('#toggle').val(url);
});

$('#toggle').change(function(){
 url = window.location.href.toString().split(window.location.host)['1'];

 url = url.replace("/zh/", "/"+$(this).val()+"/");
 url = url.replace("/en/", "/"+$(this).val()+"/");

 window.location.replace(url);
 
});

if (screen.width < 639) {
    
    //var input = $("#toggle").val();
    
    /*if (input == "English"){
        $('#toggle').innerhtml = "EN"
    } else if(input == "中文") {
        $('#toggle').innerhtml = "ZH"
    } else {
        
    }*/
    
    document.getElementById("toggle-en").innerHTML = "EN";
    document.getElementById("toggle-zh").innerHTML = "中文";
    
}
else {

    
}