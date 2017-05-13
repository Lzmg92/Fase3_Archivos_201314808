<?php
$nomb =  $_GET['nombArc'];
$num =  $_GET['jjjj'];
$conn = oci_connect('fase3', 'tael', 'localhost/xe');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, ' Select ID_ARCHIVO from ARCHIVO where NOMBRE=:myid and USUARIO_ID_USUARIO=:myil
');
oci_bind_by_name($stid, ':myid', $nomb);
oci_bind_by_name($stid, ':myil', $num);

oci_execute($stid);



echo "<table>\n";
while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "  <td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
        echo "putos esto es".$item;
    }
    echo "</tr>\n";
}
echo "</table>\n";

$stid = oci_parse($conn, ' DELETE FROM ARCHIVO
WHERE ID_ARCHIVO =:myil
');
oci_bind_by_name($stid, ':myil', $item);

oci_execute($stid);

?>

<?php header('Location: http://127.0.0.1:8000/EliminarArchivos.php'); exit(); ?>