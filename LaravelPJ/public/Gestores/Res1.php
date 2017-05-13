<?php //Ejemplo aprenderaprogramar.com
       $id1 = $_GET['id'];
       $nombre = $_GET['name'];
       $contra = $_GET['contra'];
       $correo1 = $_GET['correo'];
       $Telefono1 = 5555555;
       $foto1 = 'hohohoh';
       $genero1 = $_GET['genero'];
       $fecha1 = $_GET['fecha'];
       $fecha2 = '13/04/2017';
       $direccion1 = $_GET['direc'];
       $activo1=1;
       $rol1=1;
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

$stid = oci_parse($conn, 'INSERT INTO USUARIO (id_usuario, usr_nombre, usr_pass, usr_correo,USR_TEL,USR_GENERO,USR_NACIMIENTO, USR_REGISTRO,usr_activado, ROL_id_rol, GRUPO_id_grupo) VALUES(:myid, :mydata, :mydata1,:data1, :datotel, :datoGE , :datoNa , :dataRe, :data8 ,:mydata2, :mydata3)');

oci_bind_by_name($stid, ':myid', $id1);
oci_bind_by_name($stid, ':mydata', $nombre);
oci_bind_by_name($stid, ':mydata1', $contra);
oci_bind_by_name($stid, ':data1', $correo1);
oci_bind_by_name($stid, ':datotel', $Telefono1);
oci_bind_by_name($stid, ':datoGE', $genero1);
oci_bind_by_name($stid, ':datoNa', $fecha1);
oci_bind_by_name($stid, ':dataRe', $fecha2);
oci_bind_by_name($stid, ':data8', $activo1);
oci_bind_by_name($stid, ':mydata2', $rol1);
oci_bind_by_name($stid, ':mydata3', $grupo1);

$r = oci_execute($stid);  // ejecuta y consigna

if ($r) {
    print "Una fila insertada";
}

oci_free_statement($stid);
oci_close($conexión);

?>