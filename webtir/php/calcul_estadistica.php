<!DOCTYPE html>
    
<?php
include "conexion.php";
session_start();
$nif=$_SESSION['NIF'];
$sql = "SELECT data, punts FROM punts WHERE nif = '$nif'";
$result = mysql_query($sql, $conexion);

$valoresX=array();
$valoresY=array();
    
while ($data = mysql_fetch_row($result)) {
    $valoresX[]=$data[0];
    $valoresY[]=$data[1];
}

$datosX= json_encode($valoresX);
$datosY= json_encode($valoresY);
?>

<div id="estadistica"></div>

<script type="text/javascript">
    function crearlinea(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

                        
<script Type="text/javascript">
    
    datosX=crearlinea('<?php echo $datosX ?>');
    datosY=crearlinea('<?php echo $datosY ?>');
    
    var trace1 = {
        x: datosX,
        y: datosY,
        type: 'scatter'
    };
    
    var data = [trace1];
    
    Plotly.newPlot('estadistica', data);
    
  
</script>    
               
                    
                          
                    
                    
        
                
                
    
        