<?php
function encriptar($cadena,$clave)
{
	$cifrado = MCRYPT_RIJNDAEL_256;
	$modo = MCRYPT_MODE_ECB;
	return mcrypt_encrypt($cifrado,$clave,$cadena,$modo,mcrypt_create_iv(mcrypt_get_iv_size(		 	$cifrado,$modo),MCRYPT_RAND));
}
function desencriptar($cadena, $clave)
{
	 $cifrado = MCRYPT_RIJNDAEL_256;
     $modo = MCRYPT_MODE_ECB;
     return mcrypt_decrypt($cifrado, $clave, $cadena, $modo,
     mcrypt_create_iv(mcrypt_get_iv_size($cifrado, $modo), MCRYPT_RAND)
      );
}
?>
