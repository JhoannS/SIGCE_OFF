<?php 
require('../Model/mostrarDocumento.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel=icon href='../assets/img/logo_SIgCE.png' sizes="32x32" type="image/png">
    <title>Consultar citación</title>
</head>
<body>
    <header>
        <nav>
            <i class="fa-solid fa-bars"></i>
            <img src="../assets/img/user.png" alt="user">
        </nav>
    </header>
    <section>
        <div class="dash">
            <img src="../assets/img/logo.png" alt="logo_sena">
            <div class="navegacion">
                <div class="fa-solid fa-magnifying-glass"></div>
                <div class="fa-solid fa-envelope"></div>
                <div class="fa-solid fa-calendar-days"></div>
                <div class="fa-solid fa-list-check"></div>
                <div class="fa-solid fa-gear"></div>
            </div>
            <img src="../assets/img/user.png" alt="user">
        </div>
    </section>
    <aside>
        <div class="contenido">
            <h2>Consultar Citación</h2>
            <div class="buscador">
                 <input type="text"><i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="filtros">
                <i class="fa-solid fa-filter"></i>
                <div class="filtros_nav">
                    <a href="lleagada.php"><div class="fa-solid fa-bars-staggered" ><p>Orden de Llegada</p></div></a>
                    <a href="instructor.php"><div class="fa-solid fa-users-viewfinder" ><p>Instructor</p></div></a>
                    <a href="documento.php"><div class="fa-solid fa-id-card" id="primero"><p>Documento</p></div></a>
                </div>  
            </div>
        

         <div class="filtros">
                
                <table>
                   <th>Documento</th>
                   <th>Fecha</th>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>Ficha</th>
                   <th>Falta</th>
                </div> 
                <div class="filtros_nav">
                  
                <?php
            while($row=mysqli_fetch_array($rs)){?>				 
        <tr>
            <td><?php  echo $row['ide_Apr']?></td>
            <td><?php  echo $row['fec_cit']?></td>
            <td><?php  echo $row['Nom_Apr']?></td>
            <td><?php  echo $row['ape_Apr']?></td>
            <td><?php  echo $row['fic_Apr']?></td>
            <td><?php  echo $row['Art_Cit']?></td>
        </tr>
        <?php }?>
                </div> 
                
              
        
        </table>
            </div>
            
           

         </div>
    </aside>
    <script src="https://kit.fontawesome.com/0774745bde.js" crossorigin="anonymous"></script>
</body>
</html>