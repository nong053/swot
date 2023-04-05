
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
 
      //$("#formLoginArea").css({"width":"100%"});
      sessionStorage.setItem('checkDevice','mobile');

    }else{
      sessionStorage.setItem('checkDevice','desktop');
      //$("#formLoginArea").css({"width":"350px"});
   
    }
    
    $(".headeTitle").show();
    
 
  };
 
  function findBootstrapEnvironment() {
    let envs = ['xs', 'sm', 'md', 'lg', 'xl'];

    let el = document.createElement('div');
    document.body.appendChild(el);

    let curEnv = envs.shift();

    for (let env of envs.reverse()) {
        el.classList.add(`d-${env}-none`);

        if (window.getComputedStyle(el).display === 'none') {
            curEnv = env;
            break;
        }
    }

    document.body.removeChild(el);
    return curEnv;
}


  $(document).ready(function(){

    //console.log(findBootstrapEnvironment());

    if ($('#desktopTest').is(':hidden')) {
      //alert("device is == eXtra Small");
    } else {
      //alert("device is >= SMaller");
    }

    checkDeviceFn();



    

    
});