<?

function subirImg ($name_media_field,$destination_dir,$tabla,$relid) {
	$tmp_name = $_FILES[$name_media_field]['tmp_name'];
	
	if ( is_dir($destination_dir) && is_uploaded_file($tmp_name))
	{
		$img_type  = $_FILES[$name_media_field]['type'];
		$img_file  = $name_media_field.time().'.'.str_replace("image/","",$img_type);
		if ( strpos($img_type, "jpeg") || strpos($img_type,"jpg") || strpos($img_type,"gif") || strpos($img_type,"png") ){
			if(move_uploaded_file($tmp_name, $destination_dir.'/'.$img_file)){
				
				$imageDim=getimagesize($destination_dir.'/'.$img_file);
				$imageRel=$imageDim[0]/$imageDim[1];
				$maxSizes=array(
					logo => array ( 
						w => 158,
						h => 100
						),
  					preview => array ( 
						w => 370,
						h => 225
						),
					foto => array ( 
						w => 74,
						h => 72
						)
				);
				if (mysql_query("UPDATE `$tabla` SET `$name_media_field` ='$img_file' WHERE `id`='$relid'")){
					foreach ($maxSizes as $key => $val) {

						
						$newImgRel=$val["w"]/$val["h"];
						$image_p = imagecreatetruecolor($val["w"], $val["h"]);
						if ( strpos($img_type, "jpeg") || strpos($img_type,"jpg")){
							$image = imagecreatefromjpeg($destination_dir.'/'.$img_file);
						}elseif ( strpos($img_type, "gif")){
							$image = imagecreatefromgif($destination_dir.'/'.$img_file);
						}elseif ( strpos($img_type, "png")){
							$image = imagecreatefrompng($destination_dir.'/'.$img_file);
						}
						
						
						if ($imageRel>$newImgRel){
							// dimensiones
							$H  = $val["h"];
							$W  = $imageDim[0]*$val["h"]/$imageDim[1];
							// offsets
							$oX =-($W-$val["w"])/2;
							$oY =0;
						}else{
							// dimensiones
							$W  = $val["w"];
							$H  = $imageDim[1]*$val["w"]/$imageDim[0];
							//ofesets
							$oY=0; // $oY=-($H-$val["h"]); center
							$oX=0;
						}
						
						//imagecopyresampled($image_p, $image, $oX, $oY, 0, 0, $W, $H, $imageDim[0], $imageDim[1]);
						imagecopyresampled($image_p, $image, 0, 0, 0, 0, $W, $H, $imageDim[0], $imageDim[1]);
						if ( strpos($img_type, "jpeg") || strpos($img_type,"jpg")){
							imagejpeg( $image_p, $destination_dir.'/'.$key.'/'.$img_file,90);
						}elseif ( strpos($img_type, "gif")){
							imagegif( $image_p, $destination_dir.'/'.$key.'/'.$img_file);
						}elseif ( strpos($img_type, "png")){
							imagepng( $image_p, $destination_dir.'/'.$key.'/'.$img_file);
						}
						
					}
					echo '<p><img src="../includes/imgs/uploads/logo/'.$img_file.'" /></p>';
				}else{echo '<p>no se pudo cargar la imagen</p>';}
			}else{echo '<p>no se pudo copiar la imagen (moveUpload)</p>';}
		}else{echo '<p>No es un formato de imagen compatible (jpeg, jpg, gif, png)</p>';}
	}else{echo '<p>El directorio no existe o no se subio un archivo</p>';}
}


function addMenu ($posicion) {
$secciones = array (
	"inicio" => $posicion."./",
	"usuario" => $posicion."?do=usuario",
	"traduccion" => $posicion."traduccion/",
	"equipo" => $posicion."?do=equipo",
	"cliente" => $posicion."?do=cliente"
);

echo '<ol id="admin">';
foreach($secciones as $key => $link){
	echo '<li><a href="'.$link.'">'.$key.'</a></li>';
}
echo '</ol>';
}
?>