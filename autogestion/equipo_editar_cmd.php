<?
echo '<h2>Actualizar miembro del equipo</h2>';

$ide=mysql_real_escape_string($_POST["ide"]);
$nom=mysql_real_escape_string($_POST["nom"]);
$tit=mysql_real_escape_string($_POST["tit"]);
$cv =mysql_real_escape_string($_POST["cv"]);
$titH=mysql_real_escape_string($_POST["titHide"]);
$cvH =mysql_real_escape_string($_POST["cvHide"]);

$doQuery="UPDATE `equipo` SET `nombre`='$nom' WHERE `id`='$ide' ";
$doQueryC="UPDATE `traducciones` SET `texto`='$cv' WHERE `fieldId`='$cvH' AND `idioma`='español'";
$doQueryT="UPDATE `traducciones` SET `texto`='$tit' WHERE `fieldId`='$titH' AND `idioma`='español'";

if ($nom && $cv){

		if (mysql_query($doQuery) && mysql_query($doQueryT) && mysql_query($doQueryC)){
			echo "<p>¡Actualización correcta!</p>";
			if (!empty($_FILES["foto"])){
				
				subirImg("foto","../includes/imgs/uploads","equipo",$ide);
			}			
		}else{
			echo "<p>Error, inténtelo de nuevo.</p>$doQueryT";
		}

}else{
	echo "<p>Todos los campos son obligatorios</p>";
}
?>