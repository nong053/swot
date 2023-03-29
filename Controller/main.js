
var webService="http://localhost/swot";
var navigator_info = "";
var screen_info ="";
var uid = "";
$('.number_only').keypress(function(e) {
  if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
  })
  .on("cut copy paste",function(e){
  e.preventDefault();
  });
  
function commaSeparateNumber(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  }


  $(document).ready(function(){

    navigator_info = window.navigator;
    screen_info = window.screen;
    uid = navigator_info.mimeTypes.length;
    uid += navigator_info.userAgent.replace(/\D+/g, '');
    uid += navigator_info.plugins.length;
    uid += screen_info.height || '';
    uid += screen_info.width || '';
    uid += screen_info.pixelDepth || '';
  
    alert(uid);
    sessionStorage.setItem('uuid', uid);



    
});