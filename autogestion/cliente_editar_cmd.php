<?
echo '<h2>Actualizar cliente</h2>';

$ide=mysql_real_escape_string($_POST["ide"]);
$nom=mysql_real_escape_string($_POST["nombre"]);
$lugar=mysql_real_escape_string($_POST["lugar"]);
$desc =mysql_real_escape_string($_POST["desc"]);
$apre =mysql_real_escape_string($_POST["apre"]);
$lugarH=mysql_real_escape_string($_POST["lugarH"]);
$descH =mysql_real_escape_string($_POST["descH"]);
$apreH =mysql_real_escape_string($_POST["apreH"]);


$doQuery="UPDATE `cliente` SET `nombre`='$nom' WHERE `id`='$ide' ";
$doQueryL="UPDATE `traducciones` SET `texto`='$lugar' WHERE `fieldId`='$lugarH' AND `idioma`='español'";
$doQueryD="UPDATE `traducciones` SET `texto`='$desc' WHERE `fieldId`='$descH' AND `idioma`='español'";
$doQueryA="UPDATE `traducciones` SET `texto`='$apre' WHERE `fieldId`='$apreH' AND `idioma`='español'";


if ($nom && $lugar && $desc && $apre){

		if (mysql_query($doQuery)&&mysql_query($doQueryL)&&mysql_query($doQueryD)&&mysql_query($doQueryA)){
			echo "<p>¡Actualización correcta!</p>";
			if (!empty($_FILES["logo"])){
				
				subirImg("logo","../includes/imgs/uploads","cliente",$ide);
			}
			if (!empty($_FILES["preview"])){
				
				subirImg("preview","../includes/imgs/uploads","cliente",$ide);
			}
		}else{
			echo "<p>Error, inténtelo de nuevo.</p>";
		}

}else{
	echo "<p>Todos los campos son obligatorios</p>";
}
?>