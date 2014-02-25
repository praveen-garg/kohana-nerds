$(document).ready(function() {
	//for login
	$('#do-login').click(function(e) {
		e.preventDefault();
	    $("#message").empty();
	    $.ajax({
	    	url: 'login',
	      	cache:false,
	      	type:'POST',
	      	data:$("#form-login").serialize(),
	      	success:function(result) {
	      		var resultJSON = jQuery.parseJSON(result);
				if(resultJSON.status == 0) {
					$("#message").addClass("text-danger").html(resultJSON.msg);
				}
				if(resultJSON.status == 1) {
					$("#message").addClass("text-info").html(resultJSON.msg);
					window.location.href = "index"; //show logged in user-info
				}
	      	},
	      	error:function(err){
	      		var errJSON = jQuery.parseJSON(err);
				$("#message").addClass("text-danger").html(errJSON.msg);
	      	}
	    });
 	});
});