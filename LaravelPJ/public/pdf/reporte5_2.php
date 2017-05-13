<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte 5</title>
<style>
 
 .col-md-12 {
    width: 100%;
} 

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: #ECF0F5;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}


.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;

}


.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}


.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}

table {
    background-color: transparent;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4;
}


.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
}

.bg-red {
    background-color: #dd4b39 !important;
}

.bg-celeste {
    background-color: #A9E2F3 !important;
}

</style>
	  
</head>
<body>
<?php

//Obterner las variable

$variable1=($_GET['var1']);
echo $variable1;
?>
<div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"> Listado de clientes registrados en una Y fecha, No. ARCHIVOS -<?=  $date; ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                  <thead>
                     <tr>
                      <th style="width: 10px"><span class="badge bg-red"> USUARIO </span></th>
                      <th style="width: 10px"><span class="badge bg-red"> FECHA REGISTRO </span></th>
                      <th style="width: 10px"><span class="badge bg-red"> NO. ARCHIVOS </span></th>
                    </tr>
                  </thead>
                    <tbody>
                    <p> 
            <?php

              $conn = oci_connect('fase3', 'tael', 'localhost/xe');
              $stid = oci_parse($conn, 'SELECT U.usr_nombre Usuario,  TO_CHAR(U.usr_registro, \'yyyy\') Registro, count(*) Archivos
                       from  USUARIO U,  archivo A
                       where TO_CHAR(U.usr_registro, \'yyyy\')= :esto and  U.id_usuario = A.USUARIO_id_usuario
                       group by U.usr_nombre, TO_CHAR(U.usr_registro, \'yyyy\')

                ');
              oci_bind_by_name($stid, ':esto', $variable1);
              oci_execute($stid);

              echo "<table>\n";
            while (($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
                echo "<tr>\n";
                foreach ($row as $item) {
                    echo " <td style=\"width: 350px\">  </td> <td style=\"width: 1500px\">".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
                 }
                echo "</tr>\n";
            }
            echo "</table>\n";

            ?>
            </p>
                  <?php foreach($data as $pais){ ?>
                 
                    <tr>
                      <td style="width: 10px" ><?= $pais->id; ?></td>
                      <td><?= $pais->nombre; ?></td>
                      <td><span class="badge bg-red"><?= $pais->users()->count(); ?></span></td>
                    </tr>
                    
                    <?php  } ?>
                    
                  </tbody>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->

              
            </div>


	
</body>
</html>

