<?
$tabla="usuario";
$u_q=mysql_query("SELECT * FROM `$tabla` WHERE `id`='".$_GET["id"]."'");
$u_d=mysql_fetch_assoc($u_q);
$u_n=mysql_num_rows($u_q);
$secciones = array (
	"usuario" ,
	"agregar usuario" 
);
echo '<h2>Usuarios</h2><ol id="admin">';
foreach($secciones as $key){
	echo '<li class="agBoton"><a href="./?do='.$key.'">'.$key.'</a></li>';
}
echo '</ol>';
?>
<h3>Editar usuario:</h3><br />
<form action="./?do=actualizar usuario" method="post">
	<input type="hidden" name="ide" value="<?=$u_d["id"]?>" />
	<label><span>Nombre</span><input name="usr" value="<?=$u_d["nombre"]?>" /></label><br />
    <label><span>Contraseña</span><input name="psw" value="<?=$u_d["password"]?>" type="password" /></label><br />
    <input id="submit" type="submit" />
</form>