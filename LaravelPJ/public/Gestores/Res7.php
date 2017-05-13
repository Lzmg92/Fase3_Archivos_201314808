<?php
       $nombre = $_GET['nombreA'];
       $contra = $_GET['permisos'];
       $correo1 = $_GET['carpetaID'];
       $Telefono1 = $_GET['idusuario'];


$conn = oci_connect('fase3', 'tael', 'localhost/xe');

$stid1 = oci_parse($conn, 'SELECT Max(ID_CARPETA) FROM CARPETA');
oci_execute($stid1);

while (($row1 = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row1 as $id1) {
	echo "este es el valor recogido:".$id1;
    }
}

$stid = oci_parse($conn, 'INSERT INTO CARPETA (id_carpeta, nombre, permisos, CARPETA_id_carpeta, USUARIO_id_usuario) VALUES(:myid, :mydata, :mydata1,:data1, :datotel)');


$id1++;
oci_bind_by_name($stid, ':myid', $id1);
oci_bind_by_name($stid, ':mydata', $nombre);
oci_bind_by_name($stid, ':mydata1', $contra);
oci_bind_by_name($stid, ':data1', $correo1);
oci_bind_by_name($stid, ':datotel', $Telefono1);
oci_execute($stid);
?>

<?php header('Location: http://127.0.0.1:8000/AgregarCarpeta.php'); exit(); ?>