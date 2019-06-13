<?php


	class EditNewUsers // перенос из таблицы новых пользователей в таблицу постоянных пользователей
	{
		private $link ;

		public function __construct($link)
		{
			$this->link = $link;
		}

		function  delUser($from, $get)//удаление пользователя
		{
			/*if ($from == 'Users') 
			{
				$del = "DELETE street, home, app 
						FROM  street, home, app ,users 
						WHERE  users.id_street = street.id 
						AND users.id_home = home.id  
						AND users.id_app = app.id 
						AND users.id = ".$get."";
				//$del = "DELETE FROM street WHERE street.id IN (SELECT users.id_street FROM users WHERE users.id = 7)";
				mysqli_query($this->link, $del) or die(mysqli_error($this->link));

				$del = "DELETE 
						FROM ".$from." 
						WHERE id = ".$get."";
				mysqli_query($this->link, $del) or die(mysqli_error($this->link));
			}
			else
			{*/
				$del = "DELETE 
						FROM ".$from." 
						WHERE id = ".$get."";
				mysqli_query($this->link, $del) or die(mysqli_error($this->link));
			/*}*/
		}
	

		function  editNewUser() //добавление нового пользователя
		{
			$editNewUser = $_GET['editNewUser'];
			$arr = ['`street`'=>'`name`', '`home`'=>'`namber`', '`app`'=>'`namber`'];

			foreach ($arr as $k => $v) 
			{
				$query = "SELECT ".$k.".`id`
						FROM ".$k.", `newUsers`
						WHERE newUsers.".$k." = ".$k.".".$v."
						AND newUsers.id = ".$_GET['editNewUser']."";
						
				$result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));
				$data = mysqli_fetch_assoc($result);//выборка если улица, дом, офис имеется в БД

				if (!$data[id])
				{
					$query = "INSERT INTO ".$k."(".$v.")
						 SELECT ".$k." 
						 FROM `newUsers` 
						 WHERE id = " .$_GET['editNewUser']. "";
					mysqli_query($this->link, $query) or die(mysqli_error($this->link));//добавляем улицу
					
					$insert_id[] = mysqli_insert_id($this->link);//записываем id добавленной улицы
				}

				else $insert_id[] = $data[id];
			}
				
			$query = "INSERT INTO `users` (`name`, `email`, `password`, `tell`, `id_street`, `id_home`, `id_app`) " .
					"SELECT `name`, `email`, `password`, `tell`, ". $insert_id[0]. "," .$insert_id[1]. "," .$insert_id[2]." 
					FROM `newUsers` 
					WHERE id = $editNewUser";
			mysqli_query($this->link, $query) or die(mysqli_error($this->link));//добавляем имя, email, пароль, телефон, id улицы, id дома, 
			
			$del = "DELETE
			FROM newUsers 
			WHERE id =" .$_GET['editNewUser']."";// удаляем пользователя из таблицы newUser после добавления в таблицу users
			mysqli_query($this->link, $del) or die(mysqli_error($this->link));
		}
	
		
	
		function  setBlackList($update, $set, $get) //добавляем пользователя в поле черный список
		{
			$query = "UPDATE ".$update." 
					SET ".$set." 
					WHERE id = ".$get."";
			mysqli_query($this->link, $query) or die(mysqli_error($this->link));
		}
	}