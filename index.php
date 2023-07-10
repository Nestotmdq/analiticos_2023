<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.jpg">
    <title>Procesador de Analiticos 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/funciones.js"></script>;
  </head>
 <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<?php
include 'configuracion.php';
$indicador_nivel = 0;
$contador_div = 0;

foreach ($electronica as $nivel => $asignaturas) {
    $indicador_nivel ++;
    
    ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                      <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="col-1">CONDICION</th>
                        <th scope="col" class="col-1">MES</th>
                        <th scope="col" class="col-1">AÑO</th>
                        <th scope="col" class="col-4">MATERIA</th>
                        <th scope="col" class="col-1">CALIFICACION</th>
                        <th scope="col" class="col-1"></th>
                        
                        <th scope="col" class="col-2">ESTABLECIMIENTO</th>
                    </tr>
                    </thead>
                        <?php
            
    foreach ($asignaturas as $asignatura) {
                        echo "<tr>";
                        echo "<td>";
                        echo "<div id="."a".$contador_div.">";
                        
                        ?><select class="form-select form-select-sm" aria-label=".form-select-sm example" name="mesa_examinadora">
                        <?php foreach ($condiciones as $condicion) { ?>
                            <option value="<?php echo $condicion; ?>"><?php echo $condicion; ?></option>
                        <?php } ?>
                        </select>
                        
                        <?php
                        echo "</div>";
                        
                        
                        echo "</td>";
                        echo "<td>";
                        echo "<div id="."b".$contador_div.">";
                        
                        ?><select class="form-select form-select-sm" aria-label=".form-select-sm example" name="mesa_examinadora">
                        <?php foreach ($mesas_examinadoras as $mesa) { ?>
                            <option value="<?php echo $mesa; ?>"><?php echo $mesa; ?></option>
                        <?php } ?>
                        </select>
                        
                        <?php
                        echo "</div>";
                        echo "</td>";
                        echo "<td>2023</td>";
                        echo "<td>";
                        echo $asignatura;
                        echo "</td>";
                        echo "<td>";
                        echo "<div id="."d".$contador_div.">";
                        ?><input type="number" name="numero" min="0" max="10" step="0.01"/ placeholder = "8.00" class = "notanumero"><?php

                        
                        echo "</div>";
                        
                        echo "</td>";
                        echo "<td>";
                        echo "<div id="."e".$contador_div." class ='resultado' >";
                        
                        echo "</td>";
                       
                        echo "<td>";
                        echo "<div id="."c".$contador_div.">";
                        ?><select class="form-select form-select-sm" aria-label=".form-select-sm example" name="mesa_examinadora">
                        <?php foreach ($establecimientos as $establecimiento) { ?>
                            <option value="<?php echo $mesa; ?>"><?php echo $establecimiento; ?></option>
                        <?php } ?>
                        </select>
                        <?php
                        echo "</div>";
                        echo "</td>";
                        echo "</td>";
                        echo "</tr>";
                        $contador_div ++;
    }
   ?>
                        <tr>
                            <td>
                                <?php
                                switch($indicador_nivel){
                                    case 1:
                                        echo "<b>PRIMER AÑO</b>";
                                        break;
                                    case 2:
                                        echo "<b>SEGUNDO AÑO</b>";
                                        break;
                                    case 3:
                                        echo "<b>TERCER AÑO</b>";
                                        break;
                                    case 4:
                                        echo "<b>CUARTO AÑO</b>";
                                        break;
                                    case 5:
                                        echo "<b>QUINTO AÑO</b>";
                                        break;
                                    case 6:
                                        echo "<b>SEXTO AÑO</b>";
                                        break;
                                    default :
                                        echo "<b>SEPTIMO AÑO</b>";
                                        break;
                                }
                                ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td><b>CURSO COMPLETO</b></td>
                            <td></td>
                            <td><b>PROMEDIO</b></td>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    
    <?php
}
?>
    
</body>
</html>