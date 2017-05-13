<?php //Ejemplo aprenderaprogramar.com
       $nombre = $_GET['name'];
       $contra = $_GET['contra'];
       $correo1 = $_GET['correo'];
       $Telefono1 = 5555555;
       $foto1 = 'hohohoh';
       $genero1 = $_GET['genero'];
       $fecha1 = $_GET['fecha'];
       $fecha2 = '13/05/2017';
       $direccion1 = $_GET['direc'];
       $activo1=1;
       $rol1=$_GET['rol'];
       $grupo1=1;

echo  $id1;
echo  $nombre;
echo  $correo1;
echo  $Telefono1;
echo  $foto1;

$conn = oci_connect('fase3', 'tael', 'localhost/xe');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid1 = oci_parse($conn, 'SELECT Max(ID_USUARIO) FROM USUARIO');
oci_execute($stid1);

while (($row1 = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
    echo "<tr>\n";
    foreach ($row1 as $id1) {
  echo "este es el valor recogido:".$id1;
    }
}


$stid = oci_parse($conn, 'INSERT INTO USUARIO VALUES(:myid, :mydata, :mydata1, :data1, :datofoto, :datotel, :datoGE, :datoNa, :dataRe, :datodir,:data8, :mydata2, :mydata3)');

$id1++;

oci_bind_by_name($stid, ':myid', $id1);
oci_bind_by_name($stid, ':mydata', $nombre);
oci_bind_by_name($stid, ':mydata1', $contra);
oci_bind_by_name($stid, ':data1', $correo1);
oci_bind_by_name($stid, ':datotel', $Telefono1);
oci_bind_by_name($stid, ':datofoto', $foto1);
oci_bind_by_name($stid, ':datoGE', $genero1);
oci_bind_by_name($stid, ':datoNa', $fecha1);
oci_bind_by_name($stid, ':dataRe', $fecha2);
oci_bind_by_name($stid, ':datodir', $direccion1);
oci_bind_by_name($stid, ':data8', $activo1);
oci_bind_by_name($stid, ':mydata2', $rol1);
oci_bind_by_name($stid, ':mydata3', $grupo1);

$r = oci_execute($stid);  // ejecuta y consigna

if ($r) {
    print "Una fila insertada";
}else{

    print "No se pudo";
}

oci_free_statement($stid);
oci_close($conexión);

?>


<?php header('Location: http://127.0.0.1:8000/RegistroAdmin.php'); exit(); ?>