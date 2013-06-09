<?
$tabla="usuario";
$secciones = array (
	"usuario" ,
	"agregar usuario" 
);
echo '<h2>Usuarios</h2><ol id="admin">';
foreach($secciones as $key){
	echo '<li class="agBoton"><a href="./?do='.$key.'">'.$key.'</a></li>';
}
echo '</ol>';

$usr=mysql_real_escape_string($_POST["usr"]);
$psw=mysql_real_escape_string($_POST["psw"]);
$ide=mysql_real_escape_string($_POST["ide"]);

$doQuery="UPDATE `$tabla` SET nombre='".$usr."',`password`='".$psw."' WHERE `id`='$ide' ";

if ($usr && $psw){

		if (mysql_query($doQuery)){
			echo "<p>¡Actualización de $tabla correcta!</p>";
		}else{
			echo "<p>Error, inténtelo de nuevo.</p><p>".htmlentities($doQuery)."</p>";
		}

}else{
	echo "<p>Todos los campos son obligatorios</p>";
}
?>