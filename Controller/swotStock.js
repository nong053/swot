$(document).ready(function(){
//check device start
    

if("mobile"==sessionStorage.getItem('checkDevice')){
    $("#displayView").show();
	$("#formLoginArea").css({"width":"100%"});
    $(".btn-toolbar").css({"text-align":"center"}).show();
    $(".nbsp").remove();
    
    // $(".headeTitle").css({"top":"30px"}).show();
    // $(".headerFixed").css({"top":"-20px","height":"65px"});

   
}else{
    $("#displayView").show();
	$("#formLoginArea").css({"width":"350px"});
    $(".btn-toolbar").css({"float":"right"}).show();
    
    
    // $(".headeTitle").css({"top":"17px"}).show();
    // $(".headerFixed").css({"top":"0px","height":"75px"});

}
//check device end


$(".btnSWOT").click(function(){
    //loaddingFn();
    $("#swotModal").modal('show');
});
});