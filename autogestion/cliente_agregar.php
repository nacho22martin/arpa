<?
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
<h3>Agregar cliente:</h3><br />
<form action="./?do=push cliente" method="post" enctype="multipart/form-data">
	<label><span>Nombre</span><input name="nombre" /></label><br />
    <label><span>Lugar</span><input name="lugar" /></label><br />
    <label><span>Descripción</span><textarea name="desc"></textarea></label><br />
    <label><span>Apreciación</span><textarea name="apre"></textarea></label><br />        
	<label><span>Imagen logo</span><input type="file" name="logo"/></label><br />            
	<label><span>Imagen previa</span><input type="file" name="preview"/></label><br />            
  	<input id="submit" type="submit" />
</form>