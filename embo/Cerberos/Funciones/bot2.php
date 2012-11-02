<?php
$parametros_post = 'TxtB_User='.urlencode($usr).'&TxtB_Pass='.urlencode($pwd).'&Btn_AcepLogin='.urlencode('Aceptar');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://www.escuelamilitar.cl:81/NotasEscMil/WForm_GetNotas.aspx');
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
preg_match_all("(<table>(.*)</table>)siU",$resultado,$matches1);
//listas de variables
$contenidos = $matches1[1];//Agregar [6] ya que es de donde inician las asignaturas
$count = count($contenidos);
echo $count;
?>