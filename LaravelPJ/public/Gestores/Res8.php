<?php 
       $nombre = $_GET['nombreAR'];
       $contra = $_GET['permi'];
       $correo1 = $_GET['carpetaID1'];
       $Telefono1 = $_GET['usuARdi'];
       $cnt1 = $_GET['conte'];

$conn = oci_connect('fase3', 'tael', 'localhost/xe');

$stid1 = oci_parse($conn, 'SELECT Max(id_archivo) FROM ARCHIVO
');
oci_execute($stid1);

while (($row1 = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row1 as $item1) {
	echo "este es el valor recogido:".$item1;
    }
}


$stid = oci_parse($conn, 'INSERT INTO ARCHIVO (id_archivo, nombre, permisos, CARPETA_id_carpeta, USUARIO_id_usuario, CONTENIDO) VALUES(:myid, :mydata, :mydata1,:data1, :datotel, :contenidoq)');

	$item1++;

oci_bind_by_name($stid, ':myid', $item1);
oci_bind_by_name($stid, ':mydata', $nombre);
oci_bind_by_name($stid, ':mydata1', $contra);
oci_bind_by_name($stid, ':data1', $correo1);
oci_bind_by_name($stid, ':datotel', $Telefono1);
oci_bind_by_name($stid, ':contenidoq', $cnt1);

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

									echo " ";
									echo " ";

					?>

<?php header('Location: http://127.0.0.1:8000/AgregarArchivo.php'); exit(); ?>