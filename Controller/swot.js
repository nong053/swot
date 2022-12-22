
var autoLoginFn=function(uuid){
    $.ajax({
		url:"./Model/login.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"uuid":uuid,
		},
		success:function(data){
            // alert(1);
			 console.log(data);
             console.log(data[0]);
            alert(data[0]['loginStatus']);
            
		}
	});
}

$(document).ready(function(){
    var uuid = new DeviceUUID().get();
    autoLoginFn(uuid);
    //alert(uuid);
});