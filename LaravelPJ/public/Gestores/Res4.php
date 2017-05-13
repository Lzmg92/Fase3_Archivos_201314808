<?php //Ejemplo aprenderaprogramar.com

       $nombre = $_GET['elim'];
$conn = oci_connect('fase3', 'tael', 'localhost/xe');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'update USUARIO set usr_activado=3
  where usr_nombre=:myid');
oci_bind_by_name($stid, ':myid', $nombre);
oci_execute($stid); // ejecuta y consigna
header ("Location: http://127.0.0.1:8000/visDatos.php");
?>
