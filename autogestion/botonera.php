<?
function addMenu ($posicion) {
$secciones = array (
	"inicio" => $posicion."/",
	"usuario" => $posicion."/?do=usuario",
	"traduccion" => $posicion."/traduccion/",
	"equipo" => $posicion."/?do=equipo",
	"cliente" => $posicion."/?do=cliente"
);

echo '<ol id="admin">';
foreach($secciones as $key => $link){
	echo '<li><a href="'.$link.'">'.$key.'</a></li>';
}
echo '</ol>';
}
?>