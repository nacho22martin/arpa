<? 
include ("../../includes/PHP/funciones.php"); 
session_start();
if(session_is_registered(myusername)){
	$do=$_GET["do"];
	$id=mysql_real_escape_string($_GET["id"]);
	if ($_GET["do"]=="activar") {
		$state=1;
	}elseif ($_GET["do"]=="desactivar"){
		$state=0;
	}
	mysql_query("UPDATE `idiomas` SET `state`='$state' WHERE `id`='$id'");
	header ("Location:./");
}else{
	header ("Location:../");
}
?>
