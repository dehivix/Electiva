<?php
//rescatar las variables
//error_reporting(0);
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$coment=$_POST["coment"];
$enviar=$_POST["enviar"];

//logicas de los botones
switch($enviar){
	 case 'Enviar':
                      
                        //1. Conectar con mysql
                        $conectar=mysql_connect('localhost','root', '');
                        //2.Asignar base de datos
                        $bd='electiva';
                        //3.Asignar consulta (QUERY) SQL
                      
                        $sql="INSERT INTO comentarios VALUES(
                            '$nombre',
                            '$email',
                            '$coment')";

                        //4.Ejecutar Consulta
                        $resultado=mysql_db_query($bd,$sql);
                         //5.Mostrar Posibles Error
                          echo " ".mysql_error();
						  echo '<script languaje="Javascript">location.href="index.html"</script>';


                  break;
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teleinformatica</title>
<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">
@import url(css.css);
</style>
<script type="text/javascript" src="js.js"></script>
<script type="text/javascript" src="validacion.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">


$(document).ready(function() {
	
	
	$("#nav li").prepend("<span></span>"); //Throws an empty span tag right before the a tag
	
	$("#nav li").each(function() { //For each list item...
		var linkText = $(this).find("a").html(); //Find the text inside of the a tag
		$(this).find("span").show().html(linkText); //Add the text in the span tag
	}); 
	
	$("#nav li").hover(function() {	//On hover...
		$(this).find("span").stop().animate({ 
			marginTop: "-40" //Find the span tag and move it up 40 pixels
		}, 250);
	} , function() { //On hover out...
		$(this).find("span").stop().animate({
			marginTop: "0" //Move the span back to its original state (0px)
		}, 250);
	});
	
	
});
</script>
<script type="text/javascript">
function showLightbox() {
	document.getElementById('over').style.display='block';
	document.getElementById('fade').style.display='block';
}
function hideLightbox() {
	document.getElementById('over').style.display='none';
	document.getElementById('fade').style.display='none';
}
</script>
</head>
<body>
    <div id="wrapper">
	<div id="header">
<h1 align="center">...:Bienvenido:...</h1>
<h2 align="center">&quot;A Nuestra Pagina Informativa de Teleinformatica&quot;</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>

    <ul id="nav">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="temas.html">Temas</a></li>
        <li><a href="imagenes.html">Imagenes</a></li>
        <li><a href="coment.php">Ver Comentarios</a></li>
        <li><a href="comentarios.php">Comentar</a></li>
	  </ul>
<div id="content">
<div class="post">
<h1 align="center"><strong>Añadir Comentario</strong></h1>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h5 align="center"><p><form action="comentarios.php" name="envio" method="post">Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="nombre" type="text" size="35" maxlength="30" />
<br>

<br />
&nbsp;&nbsp;&nbsp;&nbsp;Email: &nbsp;&nbsp;&nbsp;&nbsp;
<input name="email" type="text" size="35" maxlength="35" />
<br>
<br />Comentarios: 
<textarea name="coment" cols=32 rows=6></textarea>
<br>
<br>
<center>
  <input type=submit name="enviar" value="Enviar" onclick="return formulario();" />
</center> 
              
                  </form>&nbsp;</p></h5>
                  


</div>
</div>
<div id="footer">
Diseñado por: <a href="#">J.E.D</a>; Agradecimientos a: <a href="#">Dehivis Perez</a>
</div>

</div>

</body>
</html>

