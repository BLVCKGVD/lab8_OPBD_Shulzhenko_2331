<?php
error_reporting(E_ERROR | E_PARSE);	
session_start();
$org_code = $_GET['var1'];
$bp_code = $_GET['var2'];
$v_code = $_GET['var3'];
$doc_code = $_GET['var4'];
$full_name = $_SESSION['full_name'];
$inv_num = $_GET['var5'];
$bp_name = $_GET['var6'];
echo $org_code.".";
echo $bp_code.".";
echo $v_code.".";
echo $doc_code;
echo $full_name;

?>

<form method="post">
	<table border="1" style="text-align: center;">
		<th>Код организации</th>
		<th>Децим. №</th>
		<th>П/н</th>
		<th>Код док.</th>
		<th>Имя чертежа</th>

	<tr><td><select style="display: inline-block;" name="org_code">
		<option>АЛЦН</option>
	</select></td>
	<td><p style="display: inline-block;"> <input  value='<?php echo $bp_code;?>' type="text" style="width:4em;" name="bp_code" maxlength="6" value=<?php echo $bp_code?>></p></td>
	<td><p style="display: inline-block; "> <input style="width: 3em;" type="text" name="v_code" maxlength="3" value=<?php echo $v_code?>></p></td>
	<td><p style="display: inline-block; "> <input style="width: 3em;" type="text" name="doc_code" maxlength="3" value=<?php echo $doc_code?>></p></td>
	<td><p style="display: inline-block; "> <input style="width: 5em;" type="text" name="bp_name" value=<?php echo $bp_name?>></p></td>
	</tr>
	</table>
	<input type="submit" name="sub">
</form>

<?php
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
if(isset($_POST['org_code']) & $_POST['org_code']!="" &
   isset($_POST['bp_code']) & $_POST['bp_code']!="" &
   isset($_POST['v_code']) & $_POST['v_code']!=""){
   	$query = "UPDATE `ta_bp`.`blueprints` 
   	SET org_code = '".$_POST['org_code']."',
   	bp_code = '".$_POST['bp_code']."',
   	v_code = '".$_POST['v_code']."',
   	doc_code = '".$_POST['doc_code']."',
   	bp_name = '".$_POST['bp_name']."'
   	WHERE inv_num={$inv_num};";
	$res = mysqli_query($conn,$query);}
	if($res)
	{
		check($conn);
	}
	function check($conn){
	if(mysqli_affected_rows($conn) > 0) {
		echo "Запись удалена";
		header("Location: ta_bp_all.php");
	} else {
		echo "Произошла ошибка";
		echo <<<END
		<a href="ta_bp_all.php"><br>Назад</a>
		END;
	}
	
	}


	

mysqli_close($conn);
?>