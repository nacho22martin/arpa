<?
$dbh = mysql_connect ("localhost", "dynami", "webmaster") or die ('I cannot connect to the database because: ' . mysql_error()); mysql_select_db ("dynamis_pro_site");

$fId=mysql_real_escape_string($_POST["fieldId"]);
$e=0;
foreach($_POST as $key => $val) {
	
	$key=mysql_real_escape_string(str_replace(array('\\','"'),'',$key));
	$val=mysql_real_escape_string($val);
	
	if ($key!="fieldId" && $key!="ignore" && $key!="" && $val!=""){
		// lang check
		$lq = mysql_num_rows(mysql_query("SELECT `id` FROM `idiomas` WHERE `id`='$key'"));
		if ($lq==0){mysql_query("INSERT INTO `idiomas` SET `id`='$key', `state`='0'");}
		
		
		if(mysql_num_rows(mysql_query("SELECT `fieldId` FROM `traducciones` WHERE `fieldId`='".$fId."' AND `idioma`='$key'"))>0){
			$query="UPDATE `traducciones` SET `texto`='$val' WHERE `fieldId`='$fId' AND `idioma`='$key'";
		}else{
			$query="INSERT INTO `traducciones` SET `fieldId`='$fId',`idioma`='$key', `texto`='$val'";
		}
		if (!mysql_query($query)){
			$e++;
		}
	}
}

if ($e>0) {
	echo "<p>Hubo $e errores al ejecutar el comando</p>";
}else{
	echo "<p>Se guardaron los cambios correctamente</p>";
?>
	<script type="text/javascript">
		setTimeout(function(){$("#autoPopOver").fadeOut()},1500)
	</script>
<?
}

?>