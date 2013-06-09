<?
$id = mysql_real_escape_string($_GET["id"]);
$u_q=mysql_query("SELECT * FROM `cliente` WHERE `id`='".$id."'");
$u_d=mysql_fetch_assoc($u_q);
$secciones = array (
	"cliente",
	"agregar cliente"
);

echo '<h2>Cliente</h2>

<ol id="admin">';
foreach($secciones as $key){
	echo '<li class="agBoton"><a href="./?do='.$key.'">'.$key.'</a></li>';
}
echo '</ol>';
?>
<h3>Editar cliente:</h3><br />
<form action="./?do=actualizar cliente" method="post" enctype="multipart/form-data">
	<input type="hidden" name="ide" value="<?=$u_d["id"]?>" />
	<label><span>Nombre</span><input name="nombre" value="<?=$u_d["nombre"]?>" /></label><br />
    <label><span>Lugar</span><input name="lugar" value="<?=write($u_d["lugar"])?>"/></label><br />
     <input type="hidden" value="<?=$u_d["lugar"]?>" name="lugarH" />
    <label><span>Descripción</span><textarea name="desc" ><?=write($u_d["desc"])?></textarea></label><br />
     <input type="hidden" value="<?=$u_d["desc"]?>" name="descH" />
    <label><span>Apreciación</span><textarea name="apre" ><?=write($u_d["apre"])?></textarea></label><br />        
     <input type="hidden" value="<?=$u_d["apre"]?>" name="apreH" />
	<label><span>Imagen logo</span><input type="file" name="logo"/></label><br />            
    <img src="../includes/imgs/uploads/logo/<?=$u_d["logo"]?>" />
	<label><span>Imagen previa</span><input type="file" name="preview"/></label><br />            
    <img src="../includes/imgs/uploads/preview/<?=$u_d["preview"]?>" />    
  	<input id="submit" type="submit" />
</form>