<?
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
<h3>Agregar al equipo:</h3><br />
<form action="./?do=push equipo" method="post" enctype="multipart/form-data">
	<label><span>Nombre</span><input name="nombre" /></label><br />
    <label><span>Título</span><input name="titulo" /></label><br />
    <label><span>Experiencia</span><textarea name="cv"></textarea><br />
	<label><span>Foto equipo</span><input type="file" name="foto"/></label><br />         
  	<input class="btnSubmit" id="submit" type="submit" />
</form>