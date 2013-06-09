<?
echo '<h2>Cliente</h2>';

$nom=mysql_real_escape_string($_POST["nombre"]);
$lugar=mysql_real_escape_string($_POST["lugar"]);
$desc =mysql_real_escape_string($_POST["desc"]);
$apre =mysql_real_escape_string($_POST["apre"]);

if ($nom!="" && $lugar!="" && $desc!="" && $apre!=""){
	
	$lugarId = "lu".time();
	$descId  = "de".time();
	$apreId  = "ap".time();
	
	if (mysql_query("INSERT INTO `traducciones` (`fieldId`,`texto`,`idioma`) VALUES ('$lugarId','$lugar','español'),('$descId','$desc','español'),('$apreId','$apre','español');") && mysql_query("INSERT INTO `cliente` SET `nombre`='$nom',`lugar`='$lugarId', `desc`='$descId', `apre`='$apreId'")){
		$lastid = mysql_insert_id();
		if (!empty($_FILES["logo"])){
				
				subirImg("logo","../includes/imgs/uploads","cliente",$lastid);
			}
		if (!empty($_FILES["preview"])){
				
				subirImg("preview","../includes/imgs/uploads","cliente",$lastid);
			}
		echo '<p>¡Agregado al equipo correctamente!</p>';
	}else{
		echo '<p>Error, inténtelo de nuevo.</p>';
	}
}


?>