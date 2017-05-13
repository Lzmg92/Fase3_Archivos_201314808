<?php

$nomb =  $_GET['elim'];
$num =  $_GET['idH'];
$conn = oci_connect('fase3', 'tael', 'localhost/xe');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, ' Select CONTENIDO from ARCHIVO where NOMBRE=:myid and USUARIO_ID_USUARIO=:myil
');
oci_bind_by_name($stid, ':myid', $nomb);
oci_bind_by_name($stid, ':myil', $num);

oci_execute($stid);


echo "<table>\n";
while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>
