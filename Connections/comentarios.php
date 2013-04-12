<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_comentarios = "localhost";
$database_comentarios = "electiva";
$username_comentarios = "root";
$password_comentarios = "";
$comentarios = mysql_pconnect($hostname_comentarios, $username_comentarios, $password_comentarios) or trigger_error(mysql_error(),E_USER_ERROR); 
?>