<?php 
session_start();
include ('../includes/PHP/funciones.php');
include ('funciones.php');
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Autogesti&oacute;n</title>
<script src="../includes/js/jquery-1.9.1.min.js"></script>
<link href="css.css" rel="stylesheet" type="text/css" />
<link href="../includes/css.css" rel="stylesheet" type="text/css" />
</head>

<body id="ag">
	<div id="frameBox" class="itemColImg">
	<? 
    $getDo=str_replace("ñ","n",strip_tags($_GET["do"]));
    if(session_is_registered(myusername)){
    	echo '<p class="bienvenido">Bienvenido <strong>'.$_SESSION["myusername"].'</strong> | <a href="Log-out.php">Salir</a></p>';
		addMenu("./");
    }
	
    if(!session_is_registered(myusername)){
        include ('Log-in.php');
		
		
	// eliminar
    }elseif ($getDo=="eliminar" && $_GET["que"] && $_GET["id"]) {
        include ('eliminar_cmd.php');
		
	// actualizar form
    }elseif ($getDo=="actualizar" && $_GET["id"]!="" && $_GET["que"]!="") {
        
        include ($_GET["que"].'s_actualizar.php');
	// actualizar script
    }elseif ($getDo=="actualizar push" && $_GET["id"]!="" && $_GET["que"]!="") {
        
        include ($_GET["que"].'s_actualizar_cmd.php');
	
		
	// usuarios manage
    }elseif ($getDo=="usuario") {
        
        include ('usuarios.php');
	// usuario agregar form
    }elseif ($getDo=="agregar usuario") {
        
        include ('usuarios_agregar.php');
	// usuario agragar script
    }elseif ($getDo=="push usuario") {
        
        include ('usuarios_agregar_cmd.php');
	// editar usuario
	}elseif ($getDo=="editar usuario") {
        
        include ('usuarios_editar.php');	
	// actualizar usuario
	}elseif ($getDo=="actualizar usuario") {
        
        include ('usuarios_editar_cmd.php');	
		
	
	// equipo listar
    }elseif($getDo=="equipo"){
		 include ('equipo.php');	
	}elseif($getDo=="agregar al equipo"){
		 include ('equipo_agregar.php');	
	}elseif($getDo=="push equipo"){
		 include ('equipo_push.php');	
	}elseif($getDo=="editar equipo"){
		 include ('equipo_editar.php');	
	}elseif($getDo=="actualizar equipo"){
		 include ('equipo_editar_cmd.php');	
		
	// cliente listar
    }elseif($getDo=="cliente"){
		 include ('cliente.php');	
	}elseif($getDo=="agregar cliente"){
		 include ('cliente_agregar.php');	
	}elseif($getDo=="push cliente"){
		 include ('cliente_push.php');	
	}elseif($getDo=="editar cliente"){
		 include ('cliente_editar.php');	
	}elseif($getDo=="actualizar cliente"){
		 include ('cliente_editar_cmd.php');	
	}else{
	?>
    <div class="AW_introtxt">
        <h3>Acerca de la autogestión:</h3>
        <p>Desde esta sección vas a poder actualizar tu sitio. El menú de arriba muestras las acciones habilitadas en el sitema.</p>
        <p>Por cualquier consulta o duda podés cominicarte a <a href="mailto:machado.fran@gmail.com">machado.fran@gmail.com</a></p>
    </div>
    <?
	}
   
	?>
    </div>
</body>
</html>