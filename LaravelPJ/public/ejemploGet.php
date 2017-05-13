<?php //Ejemplo aprenderaprogramar.com

       $nombre = $_GET['nombre'];
	   $contra = $_GET['contra'];
     

$conn = oci_connect('fase3', 'tael', 'localhost/xe');

$stid = oci_parse($conn, 'select usr_pass from usuario where usr_nombre =:myid');
oci_bind_by_name($stid, ':myid', $nombre);
oci_execute($stid);

$rol = oci_parse($conn, 'select ROL_id_rol from usuario where usr_nombre =:paraRol');
oci_bind_by_name($rol, ':paraRol', $nombre);
oci_execute($rol);


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


echo "<table>\n";
while (($row1 = oci_fetch_array($rol, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row1 as $item1) {
        echo "  <td>".($item1 !== null ? htmlentities($item1, ENT_QUOTES) : "&nbsp;")."</td>\n";
        echo "putos esto es".$item1;
    }
    echo "</tr>\n";
}
echo "</table>\n";

echo $item;
echo " ";
echo $contra;
echo " ";
echo $item1;

        if (strcmp ($item , $contra) == 0 && $item1 == 1 ) {
			header ("Location: http://127.0.0.1:8000/pagAceptada.php?variable1=$nombre");
         }

         if(strcmp ($item , $contra) == 0 && $item1 == 2 ){
			header ("Location: http://127.0.0.1:8000/pagAceptadaAdmin.php?variable1=$nombre");
         }

?>
