<?php

$varcarp=$_GET['nombreBuscar'];
$variable1=$_GET['id'];

$conn = oci_connect('fase3', 'tael', 'localhost/xe');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


$stid1 = oci_parse($conn, 'SELECT CARPETA_ID_CARPETA FROM CARPETA
WHERE NOMBRE=:mcarep
');
oci_bind_by_name($stid1, ':mcarep',$varcarp);
oci_execute($stid1);

echo "<table>\n";
while (($row1 = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row1 as $item1) {
    }
    echo "</tr>\n";
}
echo "</table>\n";


$stid = oci_parse($conn, 'SELECT NOMBRE FROM CARPETA
WHERE CARPETA_ID_CARPETA= :myid and USUARIO_ID_USUARIO= :myid1
');
oci_bind_by_name($stid, ':myid', $item1);
oci_bind_by_name($stid, ':myid1', $variable1);
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