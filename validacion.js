function formulario()
{

//Chequeamos Usuario
if (document.envio.nombre.value.length==0){
   alert("Introduzca su Nombre, por favor.");
   document.envio.nombre.focus();
   return false;
}

//Chequeamos nombre
if (document.envio.email.value.length==0){
   alert("Introduzca su Email, por favor.");
   document.envio.email.focus();
   return false;
}

//Chequeamos Apellido
if (document.envio.coment.value.length==0){
   alert("Introduzca su Comentario, por favor.");
   document.envio.coment.focus();
   return false;
}

//document.frmRegistro.submit();
alert("¡Muchas gracias por enviar su comentario!");

   document.envio.submit();
	
}
// JavaScript Document