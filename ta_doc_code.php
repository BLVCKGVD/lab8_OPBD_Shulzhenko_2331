<!DOCTYPE html>
<html lang="ru" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авитранс.Чертежи</title>
</head>
<body>
<style>
	body
	{
		zoom:117%;
		background-color: rgb(230, 230, 230);
		margin-top: 0px;
		margin-left: 0px;
		margin-right: 0px;
	}
	.formochka
	{
		margin-left: 36%;
		
	}
	.formochka
	{
		margin-top: 4em;
		margin-left: auto;
    	margin-right: auto;
    	margin-bottom: auto;
    	width: 20em;
    	height: 18em;
    	align-items: center;
    	text-align: center;
    	vertical-align: middle;
    	border-width: 2px;
    	border-style: solid;
    	border-color: rgb(204,191,158);
    	border-radius: 2%;
		
	}
	.vvod 
	{
		background-color: rgb(230, 230, 230);
		border-color: rgb(204,191,158);
		border-radius: 3%;
		border-style: solid;
		border-width: 1px;
		width: 5em;
	}
	.text
	{
		font-family: a_GroticLtNr;
		margin-left: auto;
		margin-right: auto;
		font-size: 14px;
		font-weight: bold;

	}
	.table
	{

			
			
	}
	.submit
	{
		font-family: a_GroticLtNr;
		margin-left: 0.2em;
		font-size: 16px;
		background-color: rgb(230, 230, 230);
		border-color: rgb(204,191,158);
		border-radius: 10%;
		border-style: solid;
		border-width: 1px;
		cursor: pointer;
	}
	.submit:hover 
	{
     background-color: rgb(204,191,158);    
    tansition: all .3s linear;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear; 
	}	
	.vivod
	{
		
		
		font-size: 14px;
			
	}
	.upper_div
	{
		background-color: rgb(204,191,158);
		margin-top: 0px;
	}
	.img
	{
		
		margin-top: 3px;
		/*border-right-width: 2px;
		border-right-style: solid;
		border-right-color: rgb(230, 230, 230);*/
		display: inline-block;
	}
	.selection
	{
		background-color: rgb(230, 230, 230);
		border-color: rgb(204,191,158);
		border-radius: 3%;
		border-style: solid;
		border-width: 1px;
		width: 5em;
	}
	.greet
	{
		font-family: a_GroticLtNr;
		font-size: 16px;
		margin-top: 5px;
		margin-bottom: 5px;
		margin-left: auto;
		margin-right: auto;
		width: auto;
		text-align: center;
	}
	.greet1
	{
		font-family: a_GroticLtNr;
		font-size: 16px;
		margin-top: auto;
		margin-left: auto;
		margin-right: auto;
		width: auto;
		text-align: center;
	}
	.filesel
	{
		
		
	}
	.inner_div
	{
		display: inline-block;
		text-align: center;
		border-left-width: 2px;
		border-left-style: solid;
		border-left-color: rgb(230, 230, 230);
		border-right-width: 2px;
		border-right-style: solid;
		border-right-color: rgb(230, 230, 230);
		vertical-align: top;
		height: 57.5px;
		position: relative;
		margin-right: -5px;	
		border-collapse: collapse;


	}
	.inner_div:hover 
	{
     background-color: rgb(230,230,230);    
    tansition: all .3s linear;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear; 
	}	
	.text1
	{
		margin-top: 12px;
		font-family: a_GroticLtNr;
		margin-left: auto;
		margin-right: auto;
		font-size: 14px;
		font-weight: bold;
		width: 87px;
		margin-bottom: 0px;
		text-decoration: none;
	}
	.links
	{
		padding-top: 11px;
		font-size: 14px;
		font-weight: bold;
		font-family: a_GroticLtNr;
		display: inline-block; /* Ссылка как блочный элемент */
     	text-align: center; /* Выравнивание по центру */
     	height: 100%;
		text-decoration: none;
		color: rgb(0,0,0);
		width: 95px;
		border-collapse: collapse;
		vertical-align: middle;
	}
	.div1{
		display: block;
		margin-top: 4em;
		margin-left: auto;
		margin-right: auto;
    	margin-bottom: auto;
    	width: 20em;
    	height: 17em;
    	align-items: center;
    	text-align: center;
    	vertical-align: middle;
    	border-width: 2px;
    	border-style: solid;
    	border-color: rgb(204,191,158);
    	border-radius: 2%;

	}
	.help
	{
		width: 100%;
		align-items: center;
	}
	
</style>

<?php
error_reporting(0);
session_start();
$login = $_SESSION['login'];
$password = $_SESSION['password'];
 	if(isset($login) & isset($password))
 	{
 	
 	} else
 	{
 		header("Location: login.php");
 	}
?>
<body>
<div class="upper_div">
		<img class="img" src="logo.png" width="95px" height="50px">
		
			<div class = "inner_div">
				<a href="ta_bp.php" class="links" >Создать<br>запись</a>
			</div>
		
		<div class = "inner_div">
				<a href="ta_bp_all.php" class="links">Просмотр<br>всех записей</a>
		</div>
		<div class = "inner_div">
				<a href="ta_bp_search.php" class="links">Поиск<br>записей</a>
		</div>
		<div class = "inner_div" >
				<a href="ta_bp_del.php" class="links">Удаление<br>записей</a>
		</div>
		<div class = "inner_div">
				<a href="ta_users.php" class="links">Редактирование<br>пользователей</a>
		</div>
		<div class = "inner_div">
				<a href="ta_projects.php" class="links" >Проекты</a>
		</div>
		<div class = "inner_div">
				<a href="ta_archive.php" class="links">Архив</a>
		</div>
		<div class = "inner_div">
				<a href="ta_doc_code.php" class="links" style="background-color: rgb(230,230,230);">Коды документов</a>
		</div>
		<div class = "inner_div" style="position:absolute;right:7px;" >
				<a href="exit.php" class="links" >Выйти<br>из сессии</a>
		</div>
</div>
		<?php
		error_reporting(E_ERROR | E_PARSE);
		$role = $_SESSION['role'];
		if($role == 'admin'){
			echo <<<EOT
<div class="help">
<div class="div1">
<p class="text">Создание кода документа:<br><hr style="border-color: rgb(204,191,158);"></p>
<form method="post">
	<p class="text">Введите код документа:<input type="text" style="width: 10em;" class="vvod" name="doc"autocomplete="off"></p>
 <p class="text"><input type="submit" value="Создать" class ="submit" /></p>
</form>
<hr style="border:1px dashed; border-color: rgb(204,191,158);" ">
<p class="text">Удаление кода документа:<br><hr style="border-color: rgb(204,191,158);"></p>
<form method="post">
	<p class="text">Введите код документа:<input type="text" style="width: 10em;" class="vvod" name="del_doc" autocomplete="off"></p>
	<p class="text"><input type="submit" value="Удалить" class ="submit" />
		</p>
</form>
</div>
EOT;
		}
		?>
		
		

<!--<p class="greet1">
	Добро пожаловать,<br>
<?php

$full_name = $_SESSION['full_name'];
//echo $full_name."!";
?>
</p>-->


<?php
error_reporting(0);
	
	//Подключение к базе данных
	
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="ta_bp";
	
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Проверяем соединение
if (!$conn) {
    die("Соединение потерятно: " . mysqli_connect_error());
}
//echo "Соединение установлено!<hr><br>\n";
if(isset($_POST['doc']) & $_POST['doc']!="")
{

	$query = "SELECT doc_code FROM `ta_bp`.`doc_codes` WHERE doc_code = '".$_POST['doc_codes']."';";
	$res = mysqli_query($conn,$query);
if($res){
$ch = true;
while($row = mysqli_fetch_array($res))
{
	if($row['doc_code'] = $_POST['doc'])
	{

		echo "Такой проект уже существует".": ".$row['doc_code'];
		$ch = false;

	} 	
	
}
if($ch)
{

$sql = "INSERT INTO `ta_bp`.`doc_codes` (doc_code)
	VALUES ('".$_POST['doc']."');";
	if ($conn->query($sql) === TRUE) {
    //echo "Новая запись успешно создана";
	} else 
	{
    	echo "Ошибка: " . $sql . "<br>" . $conn->error;
	}
}
} 
} //else{ echo "Вы ввели некорректные данные!";}


if(isset($_POST['del_doc']) & $_POST['del_doc']!="")
{

	$query = "DELETE FROM `ta_bp`.`doc_codes` WHERE doc_code = '".$_POST['del_doc']."';";
	$res = mysqli_query($conn,$query);

} //else{ echo "Такого пользователя не существует";}
 

if($role == 'admin'){
	$query1 = "SELECT * FROM `ta_bp`.`doc_codes`";
	$res1 = mysqli_query($conn,$query1);
if($res1){
echo <<<END
<table class="table" border="1" style="display: inline-block;
			border-collapse: collapse;
			text-align: center;
			 max-width:100%;
			 position:absolute;
			 left: 45%;;
			 margin-top:125px;">
<th>ID</th>
<th>Код документа</th>



END;
while($row1 = mysqli_fetch_array($res1))
{
echo <<<END
<tr "><td style="border-bottom-width: 2px;">{$row1['id']}</td>
<td style="border-bottom-width: 2px;">{$row1['doc_code']}</td>

</tr>
END;
/*echo "ID: ".$row['id']."<br>\n";
echo "Код организации: ".$row['org_code']."<br>\n";
echo "Код чертежа: ".$row['bp_code']."<br>\n";
echo "Версия: ".$row['v_code']."<br>\n";
echo "Код документа: ".$row['doc_code']."<br>\n";
echo "Наименование чертежа: ".$row['bp_name']."<br>\n";
echo "Дата загрузки: ".$row['date_upload']."<br>\n";
echo "Имя исполнителя: ".$row['worker_name']."<br>\n";
echo "Файл: <a href='download.php?var=".$row['file']."'>".$row['file']."</a><hr><br>\n";*/
} echo <<<END
</table>
</div>
END;
}
} else {
	echo "У вас нет прав!";
}


mysqli_close($conn);
	
?>



</body>

</html>