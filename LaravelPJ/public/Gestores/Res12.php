<?php
$nomb =  $_GET['elimarcarpe'];
$conn = oci_connect('fase3', 'tael', 'localhost/xe');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'DELETE FROM CARPETA 
WHERE id_carpeta= :myid or CARPETA_id_carpeta = :myid
');
oci_bind_by_name($stid, ':myid', $nomb);
oci_execute($stid);
?>