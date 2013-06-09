<?
$u_q=mysql_query("SELECT * FROM `equipo` WHERE `id`='".$_GET["id"]."'");
$u_d=mysql_fetch_assoc($u_q);
$u_n=mysql_num_rows($u_q);
$secciones = array (
	"equipo",
	"agregar al equipo"
);

echo '<h2>Equipo</h2>

<ol id="admin">';
foreach($secciones as $key){
	echo '<li class="agBoton"><a href="./?do='.$key.'">'.$key.'</a></li>';
}
echo '</ol>';

?>
<h3>Editar miembro del equipo:</h3><br />
<form action="./?do=actualizar equipo" method="post" enctype="multipart/form-data">
	<input type="hidden" name="ide" value="<?=$u_d["id"]?>" />
	<label><span>Nombre</span><input name="nom" value="<?=$u_d["nombre"]?>" /></label><br />
    <label><span>Título</span><input name="tit" value="<?=writeNobr($u_d["titulo"])?>" /></label><br />
    <input type="hidden" value="<?=$u_d["titulo"]?>" name="titHide" />
    <label><span>Experiencia</span><textarea name="cv" /><?=writeNobr($u_d["cv"])?></textarea></label><br />
    <input type="hidden" value="<?=$u_d["cv"]?>" name="cvHide" />
	<label><span>Foto</span><input type="file" name="foto"/></label><br />            
    <img src="../includes/imgs/uploads/foto/<?=$u_d["foto"]?>" />    
  	<input id="submit" type="submit" />
</form>