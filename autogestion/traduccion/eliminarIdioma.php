<? 
include ("../../includes/PHP/funciones.php"); 
session_start();
if(session_is_registered(myusername)){
	$id=mysql_real_escape_string($_GET["id"]);
	mysql_query("DELETE FROM `idiomas` WHERE `id`='$id'");
	header ("Location:./");
}else{
	header ("Location:../");
}
?>
