<? include ("../../includes/PHP/funciones.php"); include ("../funciones.php"); session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../../includes/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../../includes/js/jqFancyTransitions.1.8.min.js"></script>
<link href="../../includes/css.css" rel="stylesheet" type="text/css" />
<link href="../css.css" rel="stylesheet" type="text/css" />
<title>Traduccion</title>
</head>

<body id="atg_trad">
<?	
if(session_is_registered(myusername)){
// paginas
$urlRel ="../../";
$paginas=array(
	index => "index.php",
	nosotros => "quienes-somos.php",
	herramientas => "herramientas.php",
	equipo => "equipo.php",
	vision => "vision-mision-valores.php",
	servicios => "servicios.php",	
	simulacion => "simulacion-procesos.php",
	consultoria => "consultoria.php",
	software => "software.php",
	capacitacion => "capacitacion.php",
	clientes => "clientes.php",
	contacto => "contacto.php"
);
$eq=mysql_query("SELECT `id`, `nombre` FROM `equipo`");
$en=mysql_num_rows($eq);
for ($i=0; $i<$en ; $i++) {
	$ed=mysql_fetch_assoc($eq);
	$paginas[str_replace(" ","_",$ed["nombre"])]="integrantes.php?id=".$ed["id"];
}

$eq=mysql_query("SELECT `id`, `nombre` FROM `cliente`");
$en=mysql_num_rows($eq);
for ($i=0; $i<$en ; $i++) {
	$ed=mysql_fetch_assoc($eq);
	$paginas[str_replace(" ","_",$ed["nombre"])]="cliente.php?id=".$ed["id"];
}

?>

<div id="paginas">
<strong>Secciones</strong>
<?
$trad=htmlentities($_GET["trad"]);
$l=$_GET["l"];
if($l!=""){$lecho="&l=".$l;}
foreach ($paginas as $key => $val) {
	$echo="<a class='off' href='./?trad=$key$lecho'>".str_replace("_"," ",$key)."</a><br />";
	if ($_GET["trad"]==$key) {
		$echo=str_replace("class='off'","class='on'",$echo);
	}
	echo $echo;
}

if ($trad){
?>
<strong>Idiomas</strong>
<ol id="AG_idiomas">
<?
	$url=curPageURL();
	$iq=mysql_query("SELECT `id` FROM `idiomas`");
	$in=mysql_num_rows($iq);
	for ($i=0;$i<$in;$i++) {
		$id=mysql_fetch_assoc($iq);
		$patern="/(l=.+)/";
		$urli=preg_replace($patern,"l=".$id["id"],$url);
		if (!preg_match($patern,$url)){$urli=$urli."&l=".$id["id"];}
			$echo="<a class='off' href='".$urli."'>".$id["id"]."</a>";
		if ($_GET["l"]==$id["id"]) {
			$echo=str_replace("class='off'","class='on'",$echo);
		}
		echo "<li>$echo</li>";
	}
?>
</ol>
<a class="AG_volver" href="./">Volver</a>
<?
}
?>
</div>
<div id="frame">
<!--COMIENZO FRAME-->

	<?
	if ($_GET["trad"]!="") {	
		$file = $paginas[$_GET["trad"]];
		if (strpos($file,"?")){$lChar="&";}else{$lChar="?";}
		$call="http://www.asisedice.com/debug/dynamis/$file".$lChar."l=$l";
		$html = file_get_contents($call);
		preg_match("/<body[^>]*>(.*?)<\/body>/is", $html, $matches);
		echo str_replace(array("src=\"",'http://www.asisedice.com/debug/dynamis/'),array("src=\"../../",'http://www.asisedice.com/debug/dynamis/autogestion/traduccion/'),$matches[1]);
	}else{
	?>
    <div class="">
    </div>
    <?
	}
	?>
    
<!--FIN FRAME-->
</div>
<div id="autoPopOver">
	
</div>
<?	if (!$_GET["trad"]){ ?>
<div id="frameBox" class="itemColImg">
	<?
	echo '<p class="bienvenido">Bienvenido <strong>'.$_SESSION["myusername"].'</strong> | <a href="../Log-out.php">Salir</a></p>'; 
	addMenu("../");
	
?>
<h2>Idiomas registrados</h2>
<?
	$iq=mysql_query("SELECT `id`,`state` FROM `idiomas`");
	
	while($id=mysql_fetch_assoc($iq)) {
		$ide = $id["id"];
		$estado = $id["state"];
		if (!$estado) {
			$ltxt="activar";
		}else{
			$ltxt="desactivar";
		}
		echo "<div class='autoIdioList'><p class='autoOnOff$ltxt'>".$ide."</p><a class='autoLang$ltxt' href='stateChange.php?do=$ltxt&id=$ide'>$ltxt</a> <a class='autoLangeliminar' href='eliminarIdioma.php?id=$ide'>eliminar</a></div>";
	}
	?>
<div class="AW_introtxt">
<h3>Acerca del traductor:</h3>
<p>Para comenzar, elige una sección en el menú de la izquierda para empezar a generar su versión en distintos idiomas.</p>
<p>Para traducir un bloque de texto sólo tienes que hacer clic sobre él.</p>
<p>Una vez dentro de una sección del sitio, puedes previsualizarla con los textos traducidos eligiendo el idioma en el menú lateral. Cuando hay un bloque de texto que no tiene traducción al idioma seleccionado aparece "¡FALTA!" para hacer notar esto, este texto sólo aparece en la autogestión.</p>
<p>En esta página vas a poder activar y desactivar las versiones traducidas del sitio para que se muestren o no a los visitantes. Por defecto toda nuevo idioma de traducción se guarda como borrador, y debes activarlo aquí una vez terminada.</p>
</div>
</div>
<?	} ?>
<script type="text/javascript">
	
	$(document).ready(function(e) {
        $('.texto:empty').text("¡FALTA!").css({color:"red", fontWeight:"bold"})
    });
	
	$('#frame a').click(function(event){
		event.preventDefault();
	});
	$('.texto').attr("title","clic para traducir");
	$('.texto').click(function(){
		itm = $(this).attr("id");
		$("#autoPopOver").load("trad.php?pag=<?=$trad?>&itm="+itm).fadeIn();
	});
	$('#paginas').clearQueue().hover(
		function(){
			$(this).animate({left:0},200);
		},
		function(){
			$(this).animate({left:-140},200);
		}
	);
	$('.alt').click(function(){
		itm = $(this).children("img").attr("id");
		$("#autoPopOver").load("trad.php?pag=<?=$trad?>&itm="+itm).fadeIn();
	});
	
</script>
<? } else { ?>
<div id="frameBox" class="itemColImg">
	<p>No has iniciado una sesión. <a href="../">Iniciar sesión</a></p>
</div>
<? }?>
</body>
</html>