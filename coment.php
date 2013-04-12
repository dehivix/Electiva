<?php require_once('Connections/comentarios.php'); ?>
<?php
error_reporting(0);
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_comentarios, $comentarios);
$query_comentarios = "SELECT * FROM comentarios";
$comentarios = mysql_query($query_comentarios, $comentarios) or die(mysql_error());
$row_comentarios = mysql_fetch_assoc($comentarios);
$totalRows_comentarios = mysql_num_rows($comentarios);
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
			<div class="post" style="padding-top: 17px;">
				<h2 class="title"> Comentarios!</h2>
			 
	  </div>
<div class="post">
		<div class="entry">
          <table border="0" cellspacing="4">
            <tr>
              <td width="154" bgcolor="#0171AF">Nombre</td>
              <td width="155" bgcolor="#0171AF">Email</td>
              <td width="243" bgcolor="#0171AF">Comentarios</td>
            </tr>
            <?php do { ?>
              <tr>
                <td bgcolor="#D1E6EF"><img src="images/user-silhouette-question.png" alt="" width="16" height="16" />&nbsp;&nbsp;<?php echo $row_comentarios['nombre']; ?></td>
                <td bgcolor="#D1E6EF"><img src="images/mails-stack.png" alt="" width="16" height="16" />&nbsp;&nbsp;<?php echo $row_comentarios['email']; ?></td>
                <td bgcolor="#D1E6EF"><img src="images/clipboard-list.png" alt="" width="16" height="16" />&nbsp;&nbsp;<?php echo $row_comentarios['coment']; ?></td>
              </tr>
              <?php } while ($row_comentarios = mysql_fetch_assoc($comentarios)); ?>
          </table>
</div>
				<p class="meta"><b>|</b> <a href="index.html" class="comments">Volver al menu principal</a><b>|</b> </p>
</div>
	  </div>
		<!-- end contentn -->
		
		<div style="clear: both;">&nbsp;</div>
	</div>
</div>
<!-- end page -->
<hr />



<div id="footer">
	<p>(c) 2010. All rights reserved. Design by <a href="index.html">Y.E.D</a>.</p>
</div>

</body>
</html>
<?php
mysql_free_result($comentarios);


?>
