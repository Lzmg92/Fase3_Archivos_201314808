<?php
   	   $nomb = $_GET['nombre'];
       $num = $_GET['idJ'];
       $contenido = $_GET['conte'];

$conn = oci_connect('fase3', 'tael', 'localhost/xe');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, ' update ARCHIVO set CONTENIDO=:mkl
  where NOMBRE=:myid and USUARIO_ID_USUARIO=:myil
');
oci_bind_by_name($stid, ':myid', $nomb);
oci_bind_by_name($stid, ':myil', $num);
oci_bind_by_name($stid, ':mkl', $contenido);
$r = oci_execute($stid);  // ejecuta y consigna

if ($r) {
    print "Contenido modificado!";
}
oci_free_statement($stid);
oci_close($conexión);

?>


<?php header('Location: http://127.0.0.1:8000/ModificarArchivo.php'); exit(); ?>