<?
echo '<h2>Equipo</h2>';

$nom=mysql_real_escape_string($_POST["nombre"]);
$tit=mysql_real_escape_string($_POST["titulo"]);
$cv =mysql_real_escape_string($_POST["cv"]);

if ($nom!="" && $cv!=""){
	$idTit = "ti".time();
	$idCv  = "cv".time();
	
	if ( mysql_query("INSERT INTO `traducciones` (`fieldId`, `idioma`, `texto`) VALUES ('$idTit', 'español', '$tit'),('$idCv', 'español', '$cv');") && mysql_query("INSERT INTO `equipo` SET `nombre`='$nom',`titulo`='$idTit', `cv`='$idCv'")){
		$lastid = mysql_insert_id();
		if (!empty($_FILES["foto"])){
			subirImg("foto","../includes/imgs/uploads","equipo",$lastid);
		}
		echo '<p>¡Agregado al equipo correctamente!</p>';
	}else{
		echo '<p>Error, inténtelo de nuevo.</p>'."<p>INSERT INTO `traducciones` (`fieldId`, `idioma`, `texto`) VALUES ('$idTit', 'español', '$tit'),('$idCv', 'español', '$cv');</p>";
	}
}
?>