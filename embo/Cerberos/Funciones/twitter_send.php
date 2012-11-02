<?php

require('twitteroauth.php'); //incluir la librería
define('_CONSUMER_KEY','mB9xpQreg3fLhOndck0mYw'); //La obtenes en el paso 1
define('_CONSUMER_SECRET','M6wELZpTdABKd3FXuH4UDZ2ilx0Aub0xqjYNpKyY'); //La obtenes en el paso 1
define('_OAUTH_TOKEN','60154003-zIVCdQ3ELvWiH4o4sbddaD1AAO1iW2RM3Wm1gQl8'); //La obtenes en el paso 1
define('_OAUTH_TOKEN_SECRET','ZNakZTIgoYYuvMpxvseLtejNCdtLIYaLRDGjEfRAv8'); //La obtenes en el paso 1
 
	//	$bit=tinyurl($link); //reducimos el link con la api de bit.ly
		//$quedan=(140-strlen($bit))-4; // calculo los caracteres restantes que me quedan para publicar restando los puntos suspensivo
		//$mensaje=substr($mensaje,0,$quedan).' ...'.$bit; // corto el mensaje en caso de que sea muy largo
$mensaje="Hola, Probando BlasTDev";
//declaramos la función que realiza la conexión a tu aplicación de twitter
		function getConnectionWithAccessToken() {
                    $connection = new TwitterOAuth(_CONSUMER_KEY, _CONSUMER_SECRET,_OAUTH_TOKEN, _OAUTH_TOKEN_SECRET);
                   return $connection;
                }
//Realizamos la conexión
$connection = getConnectionWithAccessToken();
//Publicamos el mensaje en twitter
$twitter=$connection->post('statuses/update', array('status' =>utf8_encode($mensaje)));
 
//Función para acortar URL con bit.ly . Primero debemos registrarnos en http://bit.ly para obtener clave api y usuario
 function tinyurl($url_larga){
$tiny = "http://api.bit.ly/v3/shorten?login=TuUsuario&apiKey=tuClaveApi&format=txt&longUrl=".$url_larga;
$sesion = curl_init();
curl_setopt ( $sesion, CURLOPT_URL, $tiny );
curl_setopt ( $sesion, CURLOPT_RETURNTRANSFER, 1 );
$url_tiny = curl_exec ( $sesion );
curl_close( $sesion );
return($url_tiny);
}