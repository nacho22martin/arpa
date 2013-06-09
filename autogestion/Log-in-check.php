<?php 
session_start();

$dbh = mysql_connect ("localhost", "dynami", "webmaster") or die ('I cannot connect to the database because: ' . mysql_error()); mysql_select_db ("dynamis_pro_site");

$myusername = addslashes($_POST["usr"]); 
$mypassword = addslashes($_POST["psw"]);
$q="SELECT * FROM `usuario` WHERE `nombre`='$myusername' AND `password`='$mypassword'";
$count=mysql_num_rows(mysql_query($q));
if($count==1){
	session_register("myusername");
	echo '<script type="text/JavaScript">setTimeout("location.href = \'./\';",1500);</script>';
} else {
	echo '<p>No se pudo ingresar al sistema con esas credenciales, por favor verifique que el numbre de usuario y contraseña sean correctos. <a href="./">Intentar nuevamente</a></p>';
}
?>