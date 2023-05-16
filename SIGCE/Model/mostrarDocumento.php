<?php 
    include('conexion.php');
    $sql="SELECT aprendiz.ide_Apr,aprendiz.Nom_Apr,aprendiz.ape_Apr,aprendiz.fic_Apr,citacion.Art_Cit,citacion.fec_cit 
    FROM citacion INNER JOIN aprendiz on  citacion.FK_ide_Apr = aprendiz.ide_Apr";
    $rs=mysqli_query(conectar(),$sql);
?>

