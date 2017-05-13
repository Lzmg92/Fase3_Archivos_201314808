<?php //Ejemplo aprenderaprogramar.com
       $id1 = $_GET['id'];
       $nombre = $_GET['name'];
	   $contra = $_GET['contra'];
       $correo1 = $_GET['correo'];
       $Telefono1 = $_GET['Telefono'];
       $foto1 = "hohohoh";
       $genero1 = $_GET['genero'];
       $fecha1 = $_GET['fecha'];
       $fecha2 = "13/04/2017";
       $direccion1 = $_GET['direc'];
       $activo1=1;
       $rol1=1;
       $grupo1=1;
       



       $id1 = 4;
       $nombre = "sss";
       $contra = "2222";
       $correo1 = "wwwwwww";
       $Telefono1 = 2222222;
       $foto1 = "hohohoh";
       $genero1 = "FEMENINO";
       $fecha1 = "13/04/2017";
       $fecha2 = "13/04/2017";
       $direccion1 = "344fwefwefwefw";
       $activo1=1;
       $rol1=1;
       $grupo1=1;

$conn = oci_connect('video1', 'lisbeth', 'localhost/xe');

$stid = oci_parse($conn, 'INSERT INTO USUARIO (id_usuario,usr_nombre, usr_pass, usr_correo, usr_tel, fotografia, usr_genero, usr_nacimiento, usr_registro, usr_direccion,
usr_activado, ROL_id_rol, GRUPO_id_grupo) VALUES (:id,:mnombre,:mpass , :mcorreo,:mtel, :mfoto, :mgenero, :mfechaA, :mfechaDis, :mdireccion,:mactivo,:mrol,:mgrupo);
');

oci_bind_by_name($stid, ':id', $id1);
oci_bind_by_name($stid, ':mnombre', $nombre);
oci_bind_by_name($stid, ':mpass', $contra);
oci_bind_by_name($stid, ':mcorreo', $correo1);
oci_bind_by_name($stid, ':mtel', $Telefono1);
oci_bind_by_name($stid, ':mfoto', $foto1);
oci_bind_by_name($stid, ':mgenero', $genero1);
oci_bind_by_name($stid, ':mfechaA', $fecha1);
oci_bind_by_name($stid, ':mfechaDis', $fecha2);
oci_bind_by_name($stid, ':mdireccion', $direccion1);
oci_bind_by_name($stid, ':mactivo', $activo1);
oci_bind_by_name($stid, ':mrol', $rol1);
oci_bind_by_name($stid, ':mgenro', $grupo1);


oci_execute($stid);

?>