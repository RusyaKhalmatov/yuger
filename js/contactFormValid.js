$(document).ready(function(){

	var validName=false;
	var validEmail = false;
	var validPhone = false;
	var validText = false;

	$("#name-error").hide();
	$("#email-error").hide()
	$("#phone-error").hide();
	$("#message-error").hide();



	function check_name(){

			var name = $("#name_1").val();
			if(name=="")
			{
				$("#name_1").parent().removeClass("has-success").addClass("has-error");
				$(".for-span-name").append('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
				$("#name-error").html("Please fill this field");
				$("#name-error").show();
				$('.glyphicon-ok').remove();
				validName = false;
			}else{
				$("#name_1").parent().removeClass("has-error").addClass("has-success");
				
				$(".for-span-name").append('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
				$('.for-span-name .glyphicon-remove').remove();
				$("#name-error").hide();
				validName = true;
			}

		}

});
