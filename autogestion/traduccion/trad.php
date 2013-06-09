<?
$dbh = mysql_connect ("localhost", "dynami", "webmaster") or die ('I cannot connect to the database because: ' . mysql_error()); mysql_select_db ("dynamis_pro_site");

$itm=mysql_real_escape_string($_GET["itm"]);

/* que diomas estoy usando */
$iq=mysql_query("SELECT `id` FROM `idiomas` WHERE 1 ORDER BY `id` ASC");
$in=mysql_num_rows($iq);

for ( $i=0 ; $i<$in ; $i++) {
	$id[$i]=mysql_fetch_assoc($iq);
}

?>
<h1>Traductor</h1>
<form id="tradForm" action="pushTrad.php" method="post">
    <input type="hidden" name="fieldId" value="<?=$itm?>" />
    <?
	for ($i=0;$i<$in;$i++){
		$tq[$i]=mysql_fetch_assoc(mysql_query("SELECT `texto` FROM `traducciones` WHERE `fieldId`='$itm' AND `idioma`='".$id[$i]["id"]."'"));
		if ($id[$i]["id"]=="español"){
			$texto=$tq[$i]["texto"];
		}
	}
	for ($i=0;$i<$in;$i++){
		echo '<label><span>'.$id[$i]["id"].'</span><textarea id="'.$id[$i]["id"].'\" name=\"'.$id[$i]["id"].'\" rows=\"1\">'.$tq[$i]["texto"].'</textarea></label>';
		if ($id[$i]["id"]!="español"){
			echo '<a class="googleTranslate" href="https://translate.google.com.ar/?hl=es&tab=wT#es/'.substr($id[$i]["id"],0,2).'/'.$texto.'" target="_blank">Traducir con google</a>';
		}
	}
	?>
    <a id="activarNewLang" class="autoLangactivar" href="#">Agregar traducción</a>
    <div id="newLang" style="clear:both;">
    <input class="newLang" name="ignore" val=""><textarea name="" rows="2"></textarea>
    </div>
</form>
<div id="autoBotones">
    <a id="autoCancelar" href="#">Cancelar</a>
    <a id="autoGuardar" href="#">Guardar</a>
</div>
<script>
	$('#autoCancelar').click(function(event){
		event.preventDefault();
		$("#autoPopOver").fadeOut();
	});
	
	$('#autoGuardar').click(function(event){
		event.preventDefault();
		$("#tradForm").submit();
	});
	
	$("#activarNewLang").click(function(){
		event.preventDefault();
		$(this).css({display:"none"});
		$("div#newLang").fadeIn();
	});
	
	var addLanguageHtml = '<div><input class="newLang" name="ignore" val=""><textarea name=\"\" rows=\"1\"></textarea></div>';
	
	// $("a.newLang").click(function(event){event.preventDefault();$("#tradForm a.newLang").before(addLanguageHtml);});
	
	$("input").keyup(function(){
			$(this).next().attr("name",$(this).val());
		}
	);
	
	ajaxizeForm("#tradForm");
	function ajaxizeForm (form) {
		$(form).after('<div id="enviando">Enviando ...</div><div id="mensaje"></div>');
		
		$(form).submit(function(event) {
		  event.preventDefault();
		  $(form).fadeOut(function(){
			  $("#enviando").fadeIn();
			  
			  var url = $(this).attr('action');
			  var datos = $(this).serialize();
			  
			  $.post(url, datos, function(resultado) {
				  
				$('#mensaje').html(resultado);
				
				$("#enviando").fadeOut(function (){
					$("#mensaje").fadeIn();
				});
			  });  
		  });
		});
	}
</script>