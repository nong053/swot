
var webService="http://localhost/swot";
//var webService="http://dashboardweb.com/swot";

var navigator_info = "";
var screen_info ="";
var uid = "";


var loaddingFn = function(){
	//alert('loadding');
	$("body").mLoading();
	setTimeout(function(){
		$("body").mLoading('hide');
	},1000);
}

$('.number_only').keypress(function(e) {
  if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
  })
  .on("cut copy paste",function(e){
  e.preventDefault();
  });
 
  
$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return null;
    }
    return decodeURI(results[1]) || 0;
}


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



   
    //check device start
    
  $(".headerFixed").hide();
  $(".setting-toggle").hide();

  if("mobile"==sessionStorage.getItem('checkDevice')){

    
      $("#swotTitle").css({"top":"5px","font-size":"20px"});
      $(".headeTitle").css({"top":"30px"}).show();
      $(".headerFixed").css({"top":"-20px","height":"65px"}).show();
      $(".setting-toggle").css({"top":"58px","color":"white","background-color":"#191970","border-color":"#191970"}).show();
      
   
      if(sessionStorage.getItem('uuidByMobile')=="" || sessionStorage.getItem('uuidByMobile')==null){
        $("#loginArea").css({"padding-top":"30px"}).show();
      }else{
        $("#loginArea").css({"padding-top":"30px"}).hide();
      }
      
      $(".titleArea").css({"margin-top":"70px"}).show();
  
      
  
     

     
  }else{
   
   
      $("#swotTitle").css({"top":"10px","font-size":"24px"});
      $(".headeTitle").css({"top":"17px"}).show();
      $(".headerFixed").css({"top":"0px","height":"75px"}).show();
      $(".setting-toggle").css({"top":"75px"}).show();
      if(sessionStorage.getItem('uuidByMobile')=="" || sessionStorage.getItem('uuidByMobile')==null){
        $("#loginArea").css({"padding-top":"28px"}).show();
      }else{
        $("#loginArea").css({"padding-top":"28px"}).hide();
      }
      $(".titleArea").css({"margin-top":"100px"}).show();

  }
  //check device end

    
});