<?
$tabla="usuario";
$u_q=mysql_query("SELECT * FROM `$tabla` WHERE 1");
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
	
if ($u_n>0) {
	echo '<h3>Usuarios registrados</h3><ol class="listaAdmin">';
	for ($i=0;$i<$u_n;$i++) {
		$u_d=mysql_fetch_assoc($u_q);
		echo '<li class="itemAdmin">
					'.$u_d["nombre"].'
					<a href="./?do=eliminar&que=usuario&id='.$u_d["id"].'" class="autoLangdesactivar" title="eliminar usuario">eliminar</a>
					<a href="./?do=editar usuario&id='.$u_d["id"].'" class="autoLangactivar" title="editar usuario">editar</a>
			</li>';
	}
	echo '</ol>';
}

?>