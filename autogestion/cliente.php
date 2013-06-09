<?
$u_q=mysql_query("SELECT `id`, `nombre` FROM `cliente`");
$u_n=mysql_num_rows($u_q);

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
	
if ($u_n>0) {
	echo '<h3>Clientes</h3>
	<ol class="listaAdmin">';
	for ($i=0;$i<$u_n;$i++) {
		$u_d=mysql_fetch_assoc($u_q);
		echo '<li class="itemAdmin">
					'.$u_d["nombre"].'
					<a href="./?do=eliminar&que=cliente&id='.$u_d["id"].'" class="autoLangdesactivar" title="eliminar cliente">eliminar</a>
					<a href="./?do=editar cliente&id='.$u_d["id"].'" class="autoLangactivar" title="editar cliente">editar</a>
			</li>';
	}
	echo '</ol>';
}else echo 'No hay Clientes para mostrar';

?>