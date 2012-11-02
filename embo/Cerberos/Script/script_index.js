$(document).ready(function(){
	var ua = $.browser; /* Create a variable for browser info */
	$('.container').hide(); /* Hide the content */
	
	/* If the Version or Firefox is < or = 5.0 the preloader not display, 
        the same function applies to old Version Safari and Chrome
        and finally Opera and IE they don't support CSS3 Animation */
	if (ua.mozilla && ua.version <='5.0' || ua.safari && (navigator.appVersion.indexOf('3.') != -1) || ua.opera || ua.msie){
		/* If the condition is true the content will be displayed immediately */
		$('.container').show();
	}
	else {  /* Otherwise appears the preloader */
		/* Insert the markup preloader usign jQuery */
		$('body').append('<div id="preloader"><span class="expand"></span></div>');
		/* The animation during 2sec, 
                change the delay parameter to extend or decrase the animation, 
                remember to change the duration of the animation also in CSS */
		$('#preloader').delay(2000).fadeOut('slow', function() {
		$('.container').fadeIn('fast');  
	});  	
	}
});
$(document).ready(function() {
        $( "#bienvenida" ).dialog();
    });
//Botonera
//noticias
$(function() {
        $( "#noticias" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "slide"
        });
 
        $( "#a_noticias" ).click(function() {
            $( "#noticias" ).dialog( "open" );
            return false;
        });
});
//lince
$(function() {
        $( "#notas" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "slide"
        });
 
        $( "#a_notas" ).click(function() {
            $( "#notas" ).dialog( "open" );
            return false;
        });
});
//sillabus
$(function() {
        $( "#asignaturas" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "slide"
        });
 
        $( "#a_asignaturas" ).click(function() {
            $( "#asignaturas" ).dialog( "open" );
            return false;
        });
});
//utilidades
$(function() {
        $( "#utilidades" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "slide"
        });
 
        $( "#a_utilidades" ).click(function() {
            $( "#utilidades" ).dialog( "open" );
            return false;
        });
});
//horarios
$(function() {
        $( "#horarios" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "slide"
        });
 
        $( "#a_horarios" ).click(function() {
            $( "#horarios" ).dialog( "open" );
            return false;
        });
});
//actividades
$(function() {
        $( "#actividades" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "slide"
        });
 
        $( "#a_actividades" ).click(function() {
            $( "#actividades" ).dialog( "open" );
            return false;
        });
});
//twitter
$(function() {
        $( "#twitter" ).dialog({
            autoOpen: false,
            show: "blind",
            hide: "slide"
        });
 
        $( "#a_twitter" ).click(function() {
            $( "#twitter" ).dialog( "open" );
            return false;
        });
});
//FIN BOTONERA
//RSS
$(document).ready(function () {
	$('#test').rssfeed('http://rss.emol.com/rss.asp?canal=1');
});

// FIN RSS

//pantalla Completa
$('#fullscreen-button').on('click', function() {
  var doc = document.documentElement;
  if (doc.requestFullscreen) {
    doc.requestFullscreen();
  }
});