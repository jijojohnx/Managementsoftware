/*Coded by jijojohn @ singlelinelogics */
var core = $.noConflict();

core(document).ready(function() {
  core("#username").watermark("User Name");
    core("#password").watermark("Password");
    core.ajax({url:"./process/dataprocess.php",async:"false",cache:"true" ,beforeSend:function() {core("#logo").html("<img src=\"./images/preload.gif\" style=\"margin-left:100px;\"/>");} ,success : function(data) { var dx = core.parseJSON(data); core("#logo").html("<img src = " + dx.logo + "></img>"); }       });
	core("#img").click(function(e) {
		e.preventDefault();
		var username = core("#username").val();
		var password = core("#password").val();
		if (username == '' || password == '') {
			core("#infoarea").html("<h3 style=\"text-align:center;\">Please fill all fields<h3>");
			core("#infoarea").slideDown("slow");
		} else if (username !== '' || password !== '') {
			core("#infoarea").hide();
			core.ajax({
                url : "./process/loginprocess.php",
				dataType : "json",
				type : "POST",
				data : {"username" : username,"password" : password},
				beforeSend:function(){core("#login").slideUp().slideDown();return true;},
				success : function(r){
					if (r.info == "Error") {
						core("#infoarea").slideDown("2000").html("<h3 style=\"text-align:center;\">Username or Password Incorrect</h3>");
					}else{
						
						window.location = document.URL + "Dashboard.php";
						
						
					}
				}
			});

		}
	});
core("#logout").click(function(e) {

     e.preventDefault();
      core("#dialogui").fadeIn("slow").html("<p>You are logouting...</p>").load("logout.php").height("50px").css("margin-top","-130px");
        setTimeout(function(){location.reload()},3000);

});
core("#setting").click(function(e){ /* 27 july 2013 work*/
     e.preventDefault();
     core.ajax({url:"./process/dataprocess.php",async:"false",cache:"true" ,success : function(data) { var dx = core.parseJSON(data); core("#img_preview").html("<img src = " + dx.logo + "></img>"); }       });
      core("#dialogui").fadeIn("slow").height("500px").css("margin-top","-320px").html("<div id=\"close\"><h3 id=\"closex\">X</h3></div><div id=\"forms\"><h3 id=\"set_head\">Settings</h3><span><h3 id=\"logox\">Change Logo&nbsp;(280*80)</h3></span><div id=\"file\"><form method=\"post\" enctype=\"multipart/form-data\" action=\"./process/fileprocess.php\" id=\"myForm\"><input type=\"file\" id=\"upload\" name=\"logo\" accept=\"image/*\"/><div id=\"submitx\"><input type=\"submit\" id=\"submit\" value=\"upload\"/></div></form></div></div><div id=\"img_preview\"></div>").on("click","#closex",function(){core("#dialogui").slideUp("slow")}).on("click","#submit",function(){
     if(core("#upload").val() == ''){alert("Please select a file");return false};
     var options = { beforeSend: function() {/*beforesend */},uploadProgress: function(event, position, total, percentComplete){/*Upload progress*/},success: function(){/*success*/},complete: function(response) {
		var json = core.parseJSON(response.responseText);
		var strings = json.Image;
		if(json.info == "Error") {alert("An error occured")}
		var final = strings.substr(3);
		core("#img_preview").html("<img src=" + final + ">" + "</img"); },
	error: function(){ core("#logox").html("<font color='red'> ERROR: unable to upload files</font>");}   }; 
    core("#myForm").Upload(options);	
     
     });


});



});


