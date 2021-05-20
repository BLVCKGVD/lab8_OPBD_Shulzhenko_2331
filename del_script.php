<?php
session_start();
$org_code = $_GET['var1'];
$bp_code = $_GET['var2'];
$v_code = $_GET['var3'];
$doc_code = $_GET['var4'];
$full_name = $_SESSION['full_name'];
echo $org_code;
echo $bp_code;
echo $v_code;
echo $doc_code;
echo $full_name;

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
if(isset($org_code) & $org_code!="" &
   isset($bp_code) & $bp_code!="" &
   isset($v_code) & $v_code!=""){
   	$query = "DELETE FROM `ta_bp`.`blueprints` WHERE 
   	org_code = '{$org_code}'
    AND bp_code = '{$bp_code}'
    AND v_code = '{$v_code}'
    AND doc_code = '{$doc_code}';";
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