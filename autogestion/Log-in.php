
<form id="login" action="Log-in-check.php" method="get">
	<label><span>Nombre de usuario</span><input name="usr" id="usr" type="text" value=""></label><br />
    <label><span>Contrase&ntilde;a</span><input name="psw" id="psw" type="password" value=""></label><br />
    <input id="autoGuardar" class="submitBtn" name="" type="submit">
</form>
<script type="text/javascript">
$(document).ready(function(){
	ajaxizeForm("#login");
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
});

</script>