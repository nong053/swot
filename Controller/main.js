
var webService="http://localhost/swot";
//var webService="http://dashboardweb.com/swot";

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

  var checkDeviceFn=function(){

    if($(window).width()<980){

      sessionStorage.setItem('checkDevice','mobile');

    }else{
      sessionStorage.setItem('checkDevice','desktop');
      
    }
 
  };
  


  $(document).ready(function(){

    checkDeviceFn();

    
});