<?php 
    include('conexion.php');
    $sql="SELECT instructor.Nom_ins,	citacion.fec_cit,	aprendiz.ide_Apr,	aprendiz.Nom_Apr,	aprendiz.ape_Apr,	aprendiz.fic_Apr,	citacion.Art_Cit 
    FROM citacion INNER JOIN aprendiz on  citacion.FK_ide_Apr = aprendiz.ide_Apr  INNER JOIN instructor on citacion.FK_ide_ins = instructor.ide_ins";
    $rs=mysqli_query(conectar(),$sql);
?>

