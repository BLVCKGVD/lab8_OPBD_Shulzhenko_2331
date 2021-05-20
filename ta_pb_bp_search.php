<!DOCTYPE html>
<html lang="ru" >
<head>
	<meta charset="utf8mb4_general_ci">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Поиск</title>
</head>

<style>
	.formochka
	{
		margin-left: 36%;
		
	}
	.formochka
	{
		margin-left: 36%;
		
	}
	.vvod 
	{
		margin-left: auto;
		margin-right: auto;
		background-color: #DCDCDC;	
		margin-bottom: 16px;
		height:28px;
		border-radius: 8px;
		font-size: 14px;
		font-weight: bold;
	}
	.text
	{
		margin-left: auto;
		margin-right: auto;
		font-size: 14px;
		font-weight: bold;
	}
	.submit
	{
		margin-left: 25%;
		
		background-color: #A9A9A9;	
		margin-bottom: 16px;
		height:35px;
		border-radius: 8px;
		font-size: 16px;
		font-weight: bold;
		cursor: pointer;
	}
	.submit:hover 
	{
    background-color: lightgreen;    
    tansition: all .3s linear;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear; 
	}	
	.vivod
	{
		
		
		font-size: 14px;
			
	}
</style>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$role = $_SESSION['role'];
 	if(isset($login) & isset($password))
 	{
 		echo "Добро пожаловать";
 	} else
 	{
 		header("Location: login.php");
 	}
?>
<p class="text"><a href="ta_bp_search.php"><button/>Назад</button></a></p>
<?php
error_reporting(E_ERROR | E_PARSE);
$get = $_GET['var'];



echo $get;
echo $text2;
echo $text1;
echo $text;
	
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
echo "Соединение установлено!<hr><br>\n";


if($get==2)
{
	$text = $_POST['bp_name'];
	$query1 = "SELECT DISTINCT * FROM `ta_bp`.`blueprints` WHERE bp_name = '{$text}' ORDER BY date_upload desc;";
	$res1 = mysqli_query($conn,$query1);
	if($res1){
		echo <<<END
<table class="table" border="1">
<th>Код организации</th>
<th>Децим. №</th>
<th>П/н</th>
<th>Код док.</th>
<th>Имя</th>
<th>Проект</th>
<th>Инв №</th>
<th>Принадл.код.орг</th>
<th>Принадл.децим.№</th>
<th>Принадл.п/н</th>
<th>Принадл.док.код</th>
<th>Принадл.имя</th>
<th>Дата загр.</th>
<th>Исполнитель</th>
<th>Статус</th>
<th>Пункт</th>
<th>Арх.дата</th>
<th>Файл</th>

END;
	while($row1 = mysqli_fetch_array($res1))
	{
	echo <<<END
<tr><td style="border-bottom-width: 2px;">{$row1['org_code']}</td>
<td style="border-bottom-width: 2px;">{$row1['bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row1['v_code']}</td>
<td style="border-bottom-width: 2px;">{$row1['doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row1['bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row1['project_name']}</td>
<td style="border-bottom-width: 2px;">{$row1['inv_num']}</td>
<td style="border-bottom-width: 2px;">{$row1['have_org_code']}</td>
<td style="border-bottom-width: 2px;">{$row1['have_bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row1['have_v_code']}</td>
<td style="border-bottom-width: 2px;">{$row1['have_doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row1['have_bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row1['date_upload']}</td>
<td style="border-bottom-width: 2px;">{$row1['worker_name']}</td>
<td style="border-bottom-width: 2px;">{$row1['doc_status']}</td>
<td style="border-bottom-width: 2px;">{$row1['destination']}</td>
<td style="border-bottom-width: 2px;">{$row1['archive_date']}</td>
<td style="border-bottom-width: 2px;"> <a href='download.php?var={$row1['file']}'>{$row1['file']}</a></td></tr>
END;
if($role =='admin')
	{
		echo <<<END
		<td style="border-bottom-width: 2px;"> <a onclick="return confirm('Вы действительно хотите удалить запись?')" href='del_script.php?var1={$row1['org_code']}&var2={$row1['bp_code']}&var3={$row1['v_code']}&var4={$row1['doc_code']}'><img width="13px;" src="trash.png"></img></a>
		<a href='edit_script.php?var1={$row1['org_code']}&var2={$row1['bp_code']}&var3={$row1['v_code']}&var4={$row1['doc_code']}&
		var5={$row1['inv_num']}&var6={$row1['bp_name']}'><img width="13px;" src="edit.png"></img></a></td></tr>
	END;
	}
}
}
}
if($get==1)
{
	$text1 = $_POST['worker_name'];
	$query2 = "SELECT DISTINCT * FROM `ta_bp`.`blueprints` WHERE worker_name = '{$text1}' ORDER BY date_upload desc;";
	$res2 = mysqli_query($conn,$query2);
	if($res2){
		echo <<<END
<table class="table" border="1">
<th>Код организации</th>
<th>Децим. №</th>
<th>П/н</th>
<th>Код док.</th>
<th>Имя</th>
<th>Проект</th>
<th>Инв №</th>
<th>Принадл.код.орг</th>
<th>Принадл.децим.№</th>
<th>Принадл.п/н</th>
<th>Принадл.док.код</th>
<th>Принадл.имя</th>
<th>Дата загр.</th>
<th>Исполнитель</th>
<th>Статус</th>
<th>Пункт</th>
<th>Арх.дата</th>
<th>Файл</th>
<th></th>

END;
	while($row2 = mysqli_fetch_array($res2))
	{
	echo <<<END
<tr><td style="border-bottom-width: 2px;">{$row2['org_code']}</td>
<td style="border-bottom-width: 2px;">{$row2['bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row2['v_code']}</td>
<td style="border-bottom-width: 2px;">{$row2['doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row2['bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row2['project_name']}</td>
<td style="border-bottom-width: 2px;">{$row2['inv_num']}</td>
<td style="border-bottom-width: 2px;">{$row2['have_org_code']}</td>
<td style="border-bottom-width: 2px;">{$row2['have_bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row2['have_v_code']}</td>
<td style="border-bottom-width: 2px;">{$row2['have_doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row2['have_bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row2['date_upload']}</td>
<td style="border-bottom-width: 2px;">{$row2['worker_name']}</td>
<td style="border-bottom-width: 2px;">{$row2['doc_status']}</td>
<td style="border-bottom-width: 2px;">{$row2['destination']}</td>
<td style="border-bottom-width: 2px;">{$row2['archive_date']}</td>
<td style="border-bottom-width: 2px;"> <a href='download.php?var={$row2['file']}'>{$row2['file']}</a></td>
END;
if($role =='admin')
	{
		echo <<<END
		<td style="border-bottom-width: 2px;"> <a onclick="return confirm('Вы действительно хотите удалить запись?')" href='del_script.php?var1={$row2['org_code']}&var2={$row2['bp_code']}&var3={$row2['v_code']}&var4={$row2['doc_code']}'><img width="13px;" src="trash.png"></img></a>
		<a href='edit_script.php?var1={$row2['org_code']}&var2={$row2['bp_code']}&var3={$row2['v_code']}&var4={$row2['doc_code']}&
		var5={$row2['inv_num']}&var6={$row2['bp_name']}'><img width="13px;" src="edit.png"></img></a></td></tr>
	END;
	}
}
}
}
if ($get == 3){
	$text2 = $_POST['bp_code'];
	$query3 = "SELECT DISTINCT * FROM `ta_bp`.`blueprints` WHERE bp_code = '{$text2}' ORDER BY date_upload;";
	$res3 = mysqli_query($conn,$query3);
if($res3){
	echo <<<END
<table class="table" border="1">
<th>Код организации</th>
<th>Децим. №</th>
<th>П/н</th>
<th>Код док.</th>
<th>Имя</th>
<th>Проект</th>
<th>Инв №</th>
<th>Принадл.код.орг</th>
<th>Принадл.децим.№</th>
<th>Принадл.п/н</th>
<th>Принадл.док.код</th>
<th>Принадл.имя</th>
<th>Дата загр.</th>
<th>Исполнитель</th>
<th>Статус</th>
<th>Пункт</th>
<th>Арх.дата</th>
<th>Файл</th>

END;
while($row3 = mysqli_fetch_array($res3))
{
echo <<<END
<tr><td style="border-bottom-width: 2px;">{$row3['org_code']}</td>
<td style="border-bottom-width: 2px;">{$row3['bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row3['v_code']}</td>
<td style="border-bottom-width: 2px;">{$row3['doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row3['bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row3['project_name']}</td>
<td style="border-bottom-width: 2px;">{$row3['inv_num']}</td>
<td style="border-bottom-width: 2px;">{$row3['have_org_code']}</td>
<td style="border-bottom-width: 2px;">{$row3['have_bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row3['have_v_code']}</td>
<td style="border-bottom-width: 2px;">{$row3['have_doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row3['have_bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row3['date_upload']}</td>
<td style="border-bottom-width: 2px;">{$row3['worker_name']}</td>
<td style="border-bottom-width: 2px;">{$row3['doc_status']}</td>
<td style="border-bottom-width: 2px;">{$row3['destination']}</td>
<td style="border-bottom-width: 2px;">{$row3['archive_date']}</td>
<td style="border-bottom-width: 2px;"> <a href='download.php?var={$row3['file']}'>{$row3['file']}</a></td>
END;
if($role =='admin')
	{
		echo <<<END
		<td style="border-bottom-width: 2px;"> <a onclick="return confirm('Вы действительно хотите удалить запись?')" href='del_script.php?var1={$row3['org_code']}&var2={$row3['bp_code']}&var3={$row3['v_code']}&var4={$row3['doc_code']}'><img width="13px;" src="trash.png"></img></a>
		<a href='edit_script.php?var1={$row3['org_code']}&var2={$row3['bp_code']}&var3={$row3['v_code']}&var4={$row3['doc_code']}&
		var5={$row3['inv_num']}&var6={$row3['bp_name']}'><img width="13px;" src="edit.png"></img></a></td></tr>
	END;
	}
}
}
}
if ($get == 4){
	$text4 = $_POST['project'];
	$query4 = "SELECT DISTINCT * FROM `ta_bp`.`blueprints` WHERE project_name = '{$text4}' ORDER BY date_upload;";
	$res4 = mysqli_query($conn,$query4);
if($res4){
	echo <<<END
<table class="table" border="1">
<th>Код организации</th>
<th>Децим. №</th>
<th>П/н</th>
<th>Код док.</th>
<th>Имя</th>
<th>Проект</th>
<th>Инв №</th>
<th>Принадл.код.орг</th>
<th>Принадл.децим.№</th>
<th>Принадл.п/н</th>
<th>Принадл.док.код</th>
<th>Принадл.имя</th>
<th>Дата загр.</th>
<th>Исполнитель</th>
<th>Статус</th>
<th>Пункт</th>
<th>Арх.дата</th>
<th>Файл</th>

END;
while($row4 = mysqli_fetch_array($res4))
{
echo <<<END
<tr><td style="border-bottom-width: 2px;">{$row4['org_code']}</td>
<td style="border-bottom-width: 2px;">{$row4['bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row4['v_code']}</td>
<td style="border-bottom-width: 2px;">{$row4['doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row4['bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row4['project_name']}</td>
<td style="border-bottom-width: 2px;">{$row4['inv_num']}</td>
<td style="border-bottom-width: 2px;">{$row4['have_org_code']}</td>
<td style="border-bottom-width: 2px;">{$row4['have_bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row4['have_v_code']}</td>
<td style="border-bottom-width: 2px;">{$row4['have_doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row4['have_bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row4['date_upload']}</td>
<td style="border-bottom-width: 2px;">{$row4['worker_name']}</td>
<td style="border-bottom-width: 2px;">{$row4['doc_status']}</td>
<td style="border-bottom-width: 2px;">{$row4['destination']}</td>
<td style="border-bottom-width: 2px;">{$row4['archive_date']}</td>
<td style="border-bottom-width: 2px;"> <a href='download.php?var={$row4['file']}'>{$row4['file']}</a></td>
END;
if($role =='admin')
	{
		echo <<<END
		<td style="border-bottom-width: 2px;"> <a onclick="return confirm('Вы действительно хотите удалить запись?')" href='del_script.php?var1={$row4['org_code']}&var2={$row4['bp_code']}&var3={$row4['v_code']}&var4={$row4['doc_code']}'><img width="13px;" src="trash.png"></img></a>
		<a href='edit_script.php?var1={$row4['org_code']}&var2={$row4['bp_code']}&var3={$row4['v_code']}&var4={$row4['doc_code']}&
		var5={$row4['inv_num']}&var6={$row4['bp_name']}'><img width="13px;" src="edit.png"></img></a></td></tr>
	END;
	}
}
}
}
if ($get == 5){
	$date_begin = $_POST['date_begin'];
	$date_end = $_POST['date_end'];
	$query5 = "SELECT DISTINCT * FROM `ta_bp`.`blueprints` WHERE date_upload BETWEEN '{$date_begin}' AND '{$date_end}' ORDER BY inv_num;";
	$res5 = mysqli_query($conn,$query5);
if($res5){
	echo <<<END
<table class="table" border="1">
<th>Код организации</th>
<th>Децим. №</th>
<th>П/н</th>
<th>Код док.</th>
<th>Имя</th>
<th>Проект</th>
<th>Инв №</th>
<th>Принадл.код.орг</th>
<th>Принадл.децим.№</th>
<th>Принадл.п/н</th>
<th>Принадл.док.код</th>
<th>Принадл.имя</th>
<th>Дата загр.</th>
<th>Исполнитель</th>
<th>Статус</th>
<th>Пункт</th>
<th>Арх.дата</th>
<th>Файл</th>

END;
while($row5 = mysqli_fetch_array($res5))
{
echo <<<END
<tr><td style="border-bottom-width: 2px;">{$row5['org_code']}</td>
<td style="border-bottom-width: 2px;">{$row5['bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row5['v_code']}</td>
<td style="border-bottom-width: 2px;">{$row5['doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row5['bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row5['project_name']}</td>
<td style="border-bottom-width: 2px;">{$row5['inv_num']}</td>
<td style="border-bottom-width: 2px;">{$row5['have_org_code']}</td>
<td style="border-bottom-width: 2px;">{$row5['have_bp_code']}</td>
<td style="border-bottom-width: 2px;">{$row5['have_v_code']}</td>
<td style="border-bottom-width: 2px;">{$row5['have_doc_code']}</td>
<td style="border-bottom-width: 2px;">{$row5['have_bp_name']}</td>
<td style="border-bottom-width: 2px;">{$row5['date_upload']}</td>
<td style="border-bottom-width: 2px;">{$row5['worker_name']}</td>
<td style="border-bottom-width: 2px;">{$row5['doc_status']}</td>
<td style="border-bottom-width: 2px;">{$row5['destination']}</td>
<td style="border-bottom-width: 2px;">{$row5['archive_date']}</td>
<td style="border-bottom-width: 2px;"> <a hef='download.php?var={$row5['file']}'>{$row5['file']}</a></td>
END;
if($role =='admin')
	{
		echo <<<END
		<td style="border-bottom-width: 2px;"> <a onclick="return confirm('Вы действительно хотите удалить запись?')" href='del_script.php?var1={$row5['org_code']}&var2={$row5['bp_code']}&var3={$row5['v_code']}&var4={$row5['doc_code']}'><img width="13px;" src="trash.png"></img></a>
		<a href='edit_script.php?var1={$row4['org_code']}&var2={$row5['bp_code']}&var3={$row5['v_code']}&var4={$row5['doc_code']}&
		var5={$row5['inv_num']}&var6={$row5['bp_name']}'><img width="13px;" src="edit.png"></img></a></td></tr>
	END;
	}
}
}
}



mysqli_close($conn);	
?>

</p>
</body>

</html>