$(document).ready(function(){

alert("Hello");
	var validName=false;
	var validEmail = false;
	var validPhone = false;
	var validText = false;

	$("#name-error").hide();
	$("#email-error").hide()
	$("#phone-error").hide();
	$("#message-error").hide();

//Focus listeners
	$("#email").focusout(function()
	    {
	        check_email();
	    });

	$("#name").focusout(function()
	    {
	        check_name();
	    });
	$("#phone").focusout(function()
	    {
	        check_phone();
	    });
	$("#message").focusout(function()
	    {
	        check_message();
	    });



//Submition 

$("#contactMessage").submit(function()
    {
    	event.preventDefault();
    	check_name();
	   	check_email();
	   	check_message();
	   	check_phone();

		if(validEmail==true && validName==true && validPhone==true && validText=true)
			{
		    $("#contactMessage").unbind('submit');//разрешить передачу формы
        $.ajax({
            type: "POST",
            url: "controller/contactFormController.php",
            data: $(this).serialize()}).done(function(){
            alert("Письмо отправлено");
        });
        return false;
        }

    });





//Функции для проверки

	function check_name()
	{
		var name = $("#name").val();
		if(name=="")
		{
			$("#name-error").html("Заполните это поле");
			$("#name-error").show();	
			validName = false;
		}else{
			$("#name-error").hide();
			validName = true;
		}

	}

	function check_phone()
	{
		var phone = $("#phone").val();
		if(phone=="")
		{
			$("#phone-error").html("Заполните это поле");
			$("#phone-error").show();	
			validPhone = false;
		}else{
			$("#phone-error").hide();
			validPhone = true;
		}
	}

	function check_email(){
			var email = $("#email").val();

			if(email == "")
			{
				$("#email-error").html("Заполните это поле");
				$("#email-error").show();
				validEmail= false;
			}else{
				//$("#email-error").hide();
				//validEmail=true;

			var pattern= new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
			if (pattern.test($("#email").val()))
            {
				$("#email-error").hide();
				validEmail=true;
            }
        else
            {
				$("#email-error").html("Вы ввели неправильный адрес");
				$("#email-error").show();
				validEmail= false;
            }
			}
		}

	function check_message()
	{
		var message = $("#message").val();
		if(message=="")
		{
			$("#message-error").html("Заполните это поле");
			$("#message-error").show();	
			validText = false;
		}else{
			$("#message-error").hide();
			validText = true;
		}
	}	


	
});
