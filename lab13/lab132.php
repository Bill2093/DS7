<?php
if(array_key_exists('enviar', $_POST)){
    $expire=time()+60*5;
    setcookie("user", $_REQUEST['visitante'] , $expire);
    header("Refresh. O");
}
?>
<HTML LANG="es">
    <HEAD>
        <TITLE>Laboratorio 13</TITLE>
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<H1>Creación de Cookies</H1>
<H2>La cookie "User" tendra solo 5 minutos de duración</H2>
<?php
if(isset($_COOKIE["user"])){
    print("<BR/>Hola <B>".$_COOKIE['user']."</B> gracias por visitar nuestro sitio web<BR/>");
}else{
?>
<FORM NAME="formcookie" METHOD="post" ACTION="lab142.php">
    <BR/>Hola, primera vez que te vemos por nuestro sitio web ¿Como te llamas? 
    <INPUT TYPE="text" NAME="Visitante">
    <INPUT NAME="enviar" VALUE=Gracias por intentificate" TYPE="submit" /><BR/>
<?php
}
?>
<BR/><A HREF="lab133.php">Continuar...</A>
</Body>
</HTML>