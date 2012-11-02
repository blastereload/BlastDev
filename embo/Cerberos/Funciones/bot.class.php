<?php
//Clase BOT
class boot{
	
function parser_syllabus($usr, $pwd)
{
	//Parsea desde el Syllabus
$parametros_post = 'txtRut='.urlencode($usr).'&txtClave='.urlencode($pwd).'&Submit='.urlencode('Entrar');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://syllabus.escuelamilitar.cl/intermedia.asp');
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Languages: es-cl,es-es,en'));

curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros_post);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,TRUE);
curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file);

//guardar Pagina
$resultado = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);
//parsear
preg_match_all("(<td class=\"contenidos\">(.*)</td>)siU",$resultado,$matches1);
//listas de variables
$contenidos = $matches1[1];//Agregar [6] ya que es de donde inician las asignaturas
return $matches1[1]; 
	}

//end clase
/* 
MODO DE USO 

echo "textos: " .$contenidos;
for($i=6;$i<$conteo;$i++)
{
	echo "<br>Asignatura: " .$matches1[1][$i];
	}
echo "<br>cantidad: " .$conteo;

*/
function parser_lince($usr, $pwd)
{
//Parsea desde el Syllabus
$parametros_post = 'TxtB_User='.urlencode($usr).'&TxtB_Pass='.urlencode($pwd).'&Btn_AcepLogin='.urlencode('Aceptar');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://www.escuelamilitar.cl:81/NotasEscMil/WForm_Login.aspx');
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Languages: es-cl,es-es,en'));
curl_setopt($ch, CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametros_post);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,TRUE);
curl_setopt($ch, CURLOPT_COOKIEFILE,$cookie_file);
curl_setopt($ch, CURLOPT_COOKIEJAR,$cookie_file);

//guardar Pagina
$resultado = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);
//parsear
preg_match_all("(<tbody>(.*)</tbody>)siU",$resultado,$matches1);
//listas de variables
$contenidos = $matches1[1];//Agregar [6] ya que es de donde inician las asignaturas
return $matches1[1]; 
	}
}

?>