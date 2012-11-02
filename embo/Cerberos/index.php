<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Alumno</title>
</head>

<?php 
include("Funciones/bot.class.php"); 
$parse = new boot();
$syllabus = $parse->parser_syllabus('17341434-K','1734'); 
$lince = $parse->parser_lince('17341434-K','1734');
$count = count($syllabus);
?>
<script type="text/javascript" src="Script/jquery-1.8.2.js"></script>
<script type="text/javascript" src="Script/jquery-ui-1.9.1.custom.js"></script>
<script type="text/javascript" src="Script/script_index.js"></script>
<script type="text/javascript" src="http://www.zazar.net/developers/jquery/zrssfeed/jquery.zrssfeed.min.js"></script>

<link rel="stylesheet" type="text/css" href="Estilos/ui-darkness/jquery-ui-1.9.1.custom.css">
<link rel="stylesheet" type="text/css" href="Estilos/estiloBase.css">
<link rel="stylesheet" type="text/css" href="Estilos/estiloMenu.css">
<script>
</script>
<div class="container">
	<body>
		<div id="bienvenida" title="Bienvenid@">
    		<p>Bienvenido al Nuevo sistema de Alumnos de la Escuela Militar, este mensaje lo puedes borrar haciendo Click en la 'X'</p>
		</div>
        <div id="notas" title="Sistema Lince">
        <?php 
			for($i=6;$i<$count;$i++)
			{
			echo $lince[$i];
			}
		 ?>	
        </div>
        <div id="asignaturas" title="Sistema Syllabus"> 
		<?php 
			for($i=6;$i<$count;$i++)
			{
			echo $syllabus[$i]."<br>";
			}
		 ?>	
        </div>
        <div id="noticias" title="Ultimas Noticias">
        	<div id="test"></div></div>
        <div id="utilidades" title="Utilidades"></div>
        <div id="horarios" title="Horarios"></div>
        <div id="actividades" title="Actividades del Instituto">
       </div>
       <div id="twitter" title="Twitter"> <iframe src="Funciones/twitter_send.php"></iframe></div>
        <a class="twitter-timeline" href="https://twitter.com/m_blastereload" data-widget-id="263898620166803456">Tweets por @m_blastereload</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <div id="imgComp" class="imagen_comp">
        </div>
	</body>
</div>
<footer id="masterpanel">
    <ul id="mainpanel">
    <li id="a_notas"><a href="#" class="notas"><small>Notas</small></a></li>
    <li id="a_asignaturas"><a href="#" class="asignaturas"><small>Asignaturas</small></a></li>
    <li id="a_noticias"><a href="#" class="noticias"><small>Noticias</small></a></li>
    <li id="a_utilidades"><a href="#" class="utilidades"><small>Utilidades</small></a></li>
    <li id="a_horarios"><a href="#" class="horarios"><small>Horarios</small></a></li>
    <li id="a_actividades"><a href="#" class="actividades"><small>Actividades</small></a></li>
    <li id="a_sticky"><a href="#" class="sticky"><small>Notas Sticky</small></a></li>
    <li id="a_twitter"><a href="#" class="twitter"><small>Twitter</small></a></li>
    </ul>
</footer>
</html>
