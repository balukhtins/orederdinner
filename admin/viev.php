<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#" lang="ru-ru" dir="ltr">

<head>

<meta charset="utf-8" />

<title>Заказ обедов</title>

<link href="css/style3.css" type="text/css" rel="stylesheet">

</head>
<body>

<ul id="navbar">
  <li><a href="http://kitchen/admin/">Пользователи</a></li>
  <li><a href="?getOrder= ">Заказы</a></li>
  <li><a href="?getDelivery= ">Доставка</a></li>
  <li><a href="?getKitchen= ">Кухня</a></li>
</ul>








<?php

	require_once 'model.php';

	$day = date('w');

								
	if ($day == 5 ) 
			$date = date('Y-m-d', strtotime("+ 3 day"));	// дата заказа в пятницу


	elseif ($day == 6) 
			$date = date('Y-m-d', strtotime("+ 2 day"));	// дата заказа в субботу


											
	elseif ($d == 0) 
			$date = date('Y-m-d', strtotime("+ 1 day"));	// дата заказа если воскресенье

	else $date = date('Y-m-d', strtotime("+ 1 day"));
		
	
if (isset($_GET['getOrder'])) 
{
	
		
	$query = "SELECT  `order`.`date`, `users`.`name`, `users`.`tell` 
			FROM `users` INNER JOIN `order` ON `users`.`id` = `order`.`id_users` WHERE `order`.`date` = '".$date."'";//выборка постоянных пользователей
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	?>

	<p>Заказы на <?=$date?></p>
	<table border = "1">
		<tr>
			<th>Дата</th>
			<th>Ім'я</th>
			<th>телефон</th>
		</tr>
		
	<?php

	foreach ($data as $v) 
				{
					echo '<tr>';
					foreach ($v as $k=>$w)
					{ 
						echo "<td>$w</td>";
					}

					
				}		
			?>

		
	</table>
	<?php
}




elseif (isset($_GET['getDelivery'])) 
{
	$query = "SELECT  `order`.`date`, `street`.`name` as `street`, `home`.`namber` as `home`,`app`.`namber` as `app`
			FROM `users` 
			
			INNER JOIN `street`
			ON `users`.`id_street` = `street`.`id`
			
			INNER JOIN `home`
			ON `users`.`id_home` = `home`.`id`
			
			INNER JOIN `app`
			ON `users`.`id_app` = `app`.`id`
			
			INNER JOIN `order` 
			ON `users`.`id` = `order`.`id_users` 
			
			WHERE `order`.`date` = '".$date."'";//выборка адресов
			
			
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	
	?>

	<p>Заказы на <?=$date?></p>
	<table border = "1">
		<tr>
			<th>Дата</th>
			<th>Улица</th>
			<th>Дом</th>
			<th>Офис</th>
		</tr>
		
	<?php

	foreach ($data as $v) 
				{
					echo '<tr>';
					foreach ($v as $k=>$w)
					{ 
						echo "<td>$w</td>";
					}

					
				}		
			?>

		
	</table>
	<?php
}

elseif (isset($_GET['getKitchen'])) 
{
	$query = "SELECT  COUNT(`order`.`date`)
			FROM `order` 
			
			WHERE `order`.`date` = '".$date."'";//выборка количества обедов

	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	
	?>

	<p>Количество обедов на <?=$date?></p>
	<table border = "1">
		<tr>
			<th>Дата</th>
			<th>Количество</th>
		</tr>
		
	<?php

	foreach ($data as $v) 
				{
					echo '<tr>';
					echo 	'<td>'.$date.'</td>';
					foreach ($v as $k=>$w)
					{ 
						echo "<td>$w</td>";
					}

					
				}		
			?>

		
	</table>
<?php
}

else
{
	$query = "SELECT * FROM newUsers"; // выборка новых пользователей
	$result = mysqli_query($link, $query) or die(mysqli_error($link));

	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

?>

<p style="color:red;">Запит на додавання користувачів.</p>
<table border = "1">
	<tr>
		<th>Ім'я</th>
		<th>email</th>
		<th>пароль</th>
		<th>телефон</th>
		<th>вулиця</th>
		<th>будинок</th>
		<th>офис</th>
		<th>підтвердження</th>
		<th>видалити</th>
	</tr>
	
		<?php
			foreach ($data as $v) 
			{
				echo '<tr>';

				foreach ($v as $k=>$w){ 
					if ($k != 'id') 
						echo "<td>$w</td>";
				}

				echo 	'<td><a href="?editNewUser='.$v['id'].'">Додати</a></td>
						<td><a href="?delNewUser='.$v['id'].'">Видалити</a></td>
						</tr>';
			}		
		?>

	
</table>

<?php
	$query = "SELECT * FROM users";//выборка постоянных пользователей
	$result = mysqli_query($link, $query) or die(mysqli_error($link));

	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>
<p>Список користувачів.</p>
<table border = "1">
	<tr>
		<th>Ім'я</th>
		<th>email</th>
		<th>пароль</th>
		<th>телефон</th>
		<th>чорний список</th>
		<th>додавання до чорного списоку</th>
		<th>видалення з чорного списку</th>
		<th>видалення</th>
	</tr>
	
		<?php
			foreach ($data as $v) 
			{
				echo '<tr>';
				foreach ($v as $k=>$w)
				{ 
					if ($k != 'id' && $k != 'id_street' && $k != 'id_home' && $k != 'id_app') 
						echo "<td>$w</td>";
				}

				echo 	'<td><a href="?editBlackList='.$v['id'].'">Додавання до чорного списоку</a></td>
						<td><a href="?delBlackList='.$v['id'].'">Видалення з чорного списку</a></td>
						<td><a href="?delUser='.$v['id'].'">Видалити</a></td>
						</tr>';
			}		
		?>

	
</table>

<?php

}

?>






</body>
</html>

