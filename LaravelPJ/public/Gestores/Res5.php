<?php //Ejemplo aprenderaprogramar.com
        $base = $_GET['base'];
       $nombre = $_GET['name'];
       $contra = $_GET['contra'];
       $correo = $_GET['correo'];
       $Telefono = $_GET['Telefono'];

       $genero = $_GET['genero'];
       $direc = $_GET['direc'];
       $fecha = $_GET['fecha'];

       $rol = $_GET['rol'];
       $activo = $_GET['activo'];
       $grupo = $_GET['grupo'];
       $null = '';
                                    $conn = oci_connect('fase3', 'tael', 'localhost/xe');

                                    $stid = oci_parse($conn, 'update USUARIO set usr_nombre= :mycambio
                                    where usr_nombre= :myid');
                                    oci_bind_by_name($stid, ':myid', $base);
                                    oci_bind_by_name($stid, ':mycambio', $contra);
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
