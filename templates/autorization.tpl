
<div class="content">

	<div class="for_form">

		<form name="form1" method="get" action="" class="for_form1">
			<h1>Для заказа Вам необходимо авторизироваться</h1>

		<?php
			if ( $loginError )
					echo '<p style="color:red;">Не правильно введен login или пароль!</p>'.PHP_EOL;
		?>
			
			<h1 >Bведите Ваш email:</h1>
			<p id="valid"> </p>
			<input type="text" name="email" size="80" class="email" id = "email" value = "<?= $login ?>">
			
			
			<h1 class="pass">Введите пароль: </h1>
			<p id="validpass"> </p>
			<input type="password" name="password" class="password" value = "">

			<p><input type="submit" name="act" value="Войти" class = "for_button"></p>

			<p>или <span class = "registration">Зарегистрируйтесь</span></p>
			
		</form>


		<form name="authorization" method="get" action="" class = "authorization">
						
			<label >Bведіть Ваше Призвище Ім'я По-батькові:</label>
			<input type="text" name="name" size="50" class="name" id = "name" id="valid" value = "<?=$name?>">
			
			<label >Bведіть Ваш email:</label>
			<input type="text" name="email" size="50" class="email" id = "email" id="valid" value = "<?=$email?>">
						
			<label class="pass">Введіть пароль: </label>
			<input type="password" name="password" class="password" id="validpass" value = "">
			
			<label >Bведіть назву вулиці:</label>
			<input type="text" name="street" size="50" class="address" id = "address" id="valid" value = "<?=$address?>">

			<label >Bведіть номер дому:</label>
			<input type="text" name="home" size="50" class="address" id = "address" id="valid" value = "<?=$address?>">

			<label >Bведіть номер офису:</label>
			<input type="text" name="app" size="50" class="address" id = "address" id="valid" value = "<?=$address?>">
			
			<label >Bведіть Ваш контактний телефон:</label>
			<input type="text" name="tell" size="50" class="tell" id = "tell" id="valid" value = "<?=$tell?>">

			<p><input type="submit" name="sabmit" value="Зареєструватися" class = "for_button" class = "button_authorization"></p>
		</form>

		
	</div>
	
</div>