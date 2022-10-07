<HTML LANG="es">
    <Head>
        <TTITLE>Laboratorio 9.1</TTITLE>
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
    <H1>Consulta de noticias</H1>

<div class="paginacion">
    <a href="Lab111.php?P1=0&CANTIDAD=5">[ANTERIOR] </A>
    <a href="Lab111.php?P1=5&CANTIDAD=7">[SIGUIENTE] </A>
</div>



<?PHP

require_once("class/noticias.php");

$obj_noticias = new noticias();
$noticias = $obj_noticias->paginacion( $_GET ['P1'],$_GET ['CANTIDAD']);

$nfilas=count($noticias);


print ("<P>Mostrar noticias de ". ($_GET ['P1']+1)." a ".$_GET ['CANTIDAD']."</P>\n");

if ($nfilas > 0) {
    print ("<TABLE>\n");
    print ("<TR>\n");
    print ("<TH>Titulo</TH>\n");
    print ("<TH>Texto</TH>\n");
    print ("<TH>Categoria</TH>\n");
    print ("<TH>Fecha</TH>\n");
    print ("<TH>Imagen</TH>\n");
    print ("<TR>\n");

    foreach ($noticias as $resultado) {
        print ("<TR>\n");
        print ("<TD>" . $resultado['titulo'] . "</TD>\n");
        print ("<TD>" . $resultado['texto'] . "</TD>\n");
        print ("<TD>" . $resultado['categoria'] . "</TD>\n");
        print ("<TD>" . date("j/n/Y",strtotime($resultado['fecha'])) . "</TD>\n");

        if ($resultado['imagen'] != "") {
            print ("<TD>>A TARGET=' blank' HREF='img/" . $resultado['imagen'] . "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
        }
        else{
            print ("<TD>&nbsp;</TD>\n");
        }
        print ("</TR>\n");
    }
    print ("</TABLE>\n");
}
else {
    print ("No hay noticias disponibles");
}
?>
</BODY>
</HTML>