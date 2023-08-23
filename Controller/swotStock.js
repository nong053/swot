
var getSwotByCompany=function(b_id){

    $.ajax({
		url:webService+"/Model/action-swot-stock-public.php",
		type:"post",
		dataType:"json",
        async:false,
		data:{
			"b_id":b_id,
			"action":"swotByCompany",
		},
		success:function(data){

            var dataStrengthsArea="";
            var dataWeaknessesArea="";
            var dataOpportunitiesArea="";
            var dataThreatsArea="";

            
               
            

          

			if(data[0]!=="" || data[0]!==null){
				if(data[0]['status']=="200"){
                  
                    dataStrengthsArea+="<ul>";
                    dataWeaknessesArea+="<ul>";
                    dataOpportunitiesArea+="<ul>";
                    dataThreatsArea+="<ul>";
                        $.each(data[0]['data'],function(index,indexEntry){
                        if(indexEntry['s_name']!=""){

                            
                           
                            if(indexEntry['ap_code']=='1'){

                                dataStrengthsArea+="<li>"+indexEntry['s_name']+"</li>";
                            }

                            if(indexEntry['ap_code']=='2'){
                                dataWeaknessesArea+="<li>"+indexEntry['s_name']+"</li>";
                            }

                            if(indexEntry['ap_code']=='3'){
                                dataOpportunitiesArea+="<li>"+indexEntry['s_name']+"</li>";
                            }

                            if(indexEntry['ap_code']=='4'){
                                dataThreatsArea+="<li>"+indexEntry['s_name']+"</li>";
                            }
                        }

                        });
                        dataStrengthsArea+="</ul>";
                        dataWeaknessesArea+="</ul>";
                        dataOpportunitiesArea+="</ul>";
                        dataThreatsArea+="</ul>";

                       
                      $("#companyTitle").html($("#logo-"+b_id).html()+" <b>"+$("#title-"+b_id).html()+"<b>");
                      $("#companyDeatail").html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+$("#detail-"+b_id).html());
                      $("#dataStrengthsArea").html(dataStrengthsArea);
                      $("#dataWeaknessesArea").html(dataWeaknessesArea);
                      $("#dataOpportunitiesArea").html(dataOpportunitiesArea);
                      $("#dataThreatsArea").html(dataThreatsArea);
                         
				
				}
			}
		}
	});
	
}

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
        //http://localhost/swot/Model/action-swot-stock-public.php?action=swotByCompany&b_id=1
        var idArray = this.id;
        idArray = idArray.split("-");
        var id = idArray[1];


    

        getSwotByCompany(id);
        $("#swotModal").modal('show');
        
    });

    $("#btnSwotClose").click(function(){

        $("#swotModal").modal('hide');
        
    });

    $("#btnLogout").click(function(){
        
        loaddingFn();
        sessionStorage.setItem('token',"");
        sessionStorage.setItem('uuid',"");
        $("#btnLogout").hide();
        $("#btnOpenLogin").show();

    });

    $("#btnOpenLogin").click(function(){
    
        loaddingFn();
        window.location.href='./login-swot.php';
    });

    //check login status
    if(sessionStorage.getItem('token')=="" || sessionStorage.getItem('token')==null){
         $("#btnLogout").hide();
         $("#btnOpenLogin").show();
     }else{
         $("#btnLogout").show();
         $("#btnOpenLogin").hide();
     }
     //check login status

    $(".btnSWOTAdvance").click(function(){
    
        loaddingFn();

        var idArray = this.id;
        idArray = idArray.split("-");
        var b_id = idArray[1];
        

        if(sessionStorage.getItem('token')=="" || sessionStorage.getItem('token')==null){
            window.location.href='./login-swot.php';
        }else{
            window.location.href="./swot.php?from=swot-stock&b_id="+b_id+"";
        }
    });

 

     
        


});