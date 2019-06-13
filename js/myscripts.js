$(document).ready(function(){


/*if($('registration').click()){
	$('.authorization').fadeIn(2000);
}
else*/
	//if (($('.hidden').val() == "<?=$user_name?>")){
			$('.for_form1').fadeIn(2000);
	//}
	$('.registration').click(function (){
		$('.for_form1').fadeOut(1000);
		setTimeout(function(){$('.authorization').fadeIn(2000)}, 2000);
	});

$('.button_authorization').click(function (){
	alert("Заявка на регистрацию отправлена.");
}

//заполнение формы

$('.email').focus(function(){
		$(this).removeClass('Novalid');
		$(this).attr("value", "");
		$('#valid').text("");
		});
$('.email').blur(function(){
	if 	($(this).val() != "") {
	var regv = /^[a-z\d-_\.]+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(regv.test($(this).val()));
		else {
			$(this).addClass('Novalid');
			$('#valid').text("e-mail введено не вірно");
			$_error;
			}
	}
	else {
	$(this).addClass('Novalid');
	$('#valid').text("Поле пусте. Введіть e-mail.");
	$_error;
	}
});
		
$('.password').focus(function(){
		$(this).removeClass('Novalid');
		$(this).attr("value", "");
		$('#validpass').text("");
		});
$('.password').blur(function(){
	if 	($(this).val() != "") {
	var regv = /^[\w\d]{7,}$/i;
		if(regv.test($(this).val()));
		else {
			$(this).addClass('Novalid');
			$('#validpass').text("Пароль повинен бути не коротше семи символів");
			$_error;
			}
	}
	else {
	$(this).addClass('Novalid');
	$('#validpass').text("Поле не заповнене, введіть будь-ласка пароль");
	$_error;
	}
});

$('.for_button[value=Увійти]').click(function(){
	alert("ку-ку");
	if ($_error || ($('.email').val() == "")) {
		alert("кo-кo");
		
	}
	else alert("ку-ку");
})



/*

$('.for_button[value=Зареєструватися]').click(function(){
	//alert("привет");
})*/


// конец заполнения формы
	
});//Конец redy






















