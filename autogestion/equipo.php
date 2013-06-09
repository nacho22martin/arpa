<?
$u_q=mysql_query("SELECT `id`, `nombre` FROM `equipo`");
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
	
if ($u_n>0) {
	echo '<h3>Miembros del equipo</h3>
	<ol class="listaAdmin">';
	for ($i=0;$i<$u_n;$i++) {
		$u_d=mysql_fetch_assoc($u_q);
		echo '<li class="itemAdmin">
					'.$u_d["nombre"].'
					<a href="./?do=eliminar&que=equipo&id='.$u_d["id"].'" class="autoLangdesactivar" title="eliminar equipo">eliminar</a>
					<a href="./?do=editar equipo&id='.$u_d["id"].'" class="autoLangactivar" title="editar equipo">editar</a>
			</li>';
	}
	echo '</ol>';
}

?>