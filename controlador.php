<?php

include("db.php"); 

$key=$_GET['key'];

switch($key){

  case 1:

  try{
    //$nombre = $_SESSION['usuario'];    
    $nombre = $_GET['nombre'];
    $vin = $_GET['vin'];
    $ecu = $_GET['ecu'];
    $modelo = $_GET['modelo'];
    $serial = $_GET['serial'];
    $version = $_GET['version'];
    $fecha = $_GET['fecha'];
    
    if(isset($_GET['motor'])){
        $motor = $_GET['motor'];
     }else{
        $motor = 0;
     }    
        
    if(isset($_GET['abs'])){
         $abs = $_GET['abs'];
    }else{
        $abs=0;
    }
         
         
    if(isset($_GET['srs'])){
          $srs = $_GET['srs'];
     }else{
         $srs=0;
     }
          
          
     if(isset($_GET['carroceria'])){
       $carroceria = $_GET['carroceria'];
     }else{
       $carroceria = 0;
     }
    
    
    $cod_marca = $_GET['cod_marca'];
    $cod_modelo = $_GET['cod_modelo'];
    $cod_año = $_GET['ano'];
    
    $cod_region = $_GET['cod_region'];
    $cod_modelo_s = $_GET['cod_modelo_s'];
 
    $falla_motor = $_GET['falla_motor'];
    $sugerencia_motor = $_GET['sugerencia_motor'];
    $falla_abs = $_GET['falla_abs'];
    $sugerencia_abs = $_GET['sugerencia_abs'];
    $falla_srs = $_GET['falla_srs'];
    $sugerencia_srs = $_GET['sugerencia_srs'];
    $falla_carroceria = $_GET['falla_carroceria'];
    $sugerencia_carroceria = $_GET['sugerencia_carroceria'];
 
    $descripcion = $_GET['descripcion'];
  }catch(exception $e){
    return "problema";
  }
    $fecha_f=dmaamd($fecha);

    $sql="insert into ficha(falla_motor,sugerencia_motor,motor,abs,srs,carroceria,fecha,serial,cod_marca,cod_modelo,cod_año,modelo,version,vin,ecu,nombre,falla_abs,sugerencia_abs,falla_srs,sugerencia_srs,falla_carroceria,sugerencia_carroceria,cod_region,cod_modelo_s,descripcion)values('$falla_motor','$sugerencia_motor',$motor,$abs,$srs,$carroceria,'$fecha','$serial','$cod_marca','$cod_modelo','$cod_año','$modelo','$version','$vin','$ecu','$nombre','$falla_abs','$sugerencia_abs','$falla_srs','$sugerencia_srs','$falla_carroceria','$sugerencia_carroceria','$cod_region','$cod_modelo_s','$descripcion')";

    $op = dbExecute($sql);

    break;

 case 2:
   
    $marca = $_GET['marca'];
    $cod = $_GET['cod'];
    
    $sql="insert into marca(marca,cod_marca)values('$marca','$cod')";
    
    $res = dbExecute($sql); 
    
    echo "Registro Guardado exitosamente";
 
 break; 


case 3:
   
    $modelo = $_GET['modelo'];
    $cod_modelo = $_GET['cod_modelo'];
    $cod_marca = $_GET['cod_marca'];
    
    $sql="insert into modelo(modelo,cod_marca,cod_modelo)values('$modelo','$cod_marca','$cod_modelo')";
    
    $res = dbExecute($sql); 
    
    echo "Registro Guardado exitosamente";
 
 break; 


case 4:
   
    $cod_marca = $_GET['cod_marca'];
    
    $sql1="SELECT modelo,cod_modelo FROM modelo where cod_marca='$cod_marca'";

$consulta=dbExecute($sql1);
echo "Modelo";
echo "<br>";
echo "<SELECT style='width:115px' id='modelo' NAME='cod_modelo' SIZE='1' onchange=''>"; 
   while($res=mysql_fetch_assoc($consulta)){
              extract($res);
         echo "<OPTION VALUE='$cod_modelo'>$modelo</OPTION>";  
      } 
echo "</SELECT>";
  
 break; 
 
 
case 5:
     
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];
    
    $sentencia="SELECT usuario,password FROM login where usuario='$usuario' and password='$password'";

    dbLogin($sentencia,$usuario,$password);
             
 break; 
 

case 6:
   
    $cod_region = $_GET['cod_region'];
    
    $sql1="SELECT marca,cod_marca_scanner FROM marca_scanner where cod_region='$cod_region'";

$consulta=dbExecute($sql1);
echo "Marca";
echo "<br>";
echo "<SELECT style='width:115px' id='modelo' NAME='cod_modelo_s' SIZE='1' onchange=''>"; 
   while($res=mysql_fetch_assoc($consulta)){
              extract($res);
         echo "<OPTION VALUE='$cod_marca_scanner'>$marca</OPTION>";  
      } 
echo "</SELECT>";
  
 break; 
 
 
case 7:
   
    
    $cod_marca = $_GET['cod_marca'];
    $cod_modelo = $_GET['cod_modelo'];
    $ano = $_GET['ano'];
    
    $sql1="SELECT * FROM ficha where cod_marca='$cod_marca' and cod_modelo='$cod_modelo' and cod_año='$ano'";

$consulta=dbExecute($sql1);

   while($res=mysql_fetch_assoc($consulta)){
              extract($res);
              // echo "<div onclick='men()'>";
              // echo "Descripcion:"." ".$descripcion;
              // echo "</div>";
              // echo "<div hidden=' ' id='txt_oculto'>";
              // echo "<p>'$falla_motor'</p>";
              // echo "</div>";
              // echo "<hr>"; 
               
        echo "Descripcion:"." ".$descripcion."<br>";
        echo "<br>";       
echo "<table BORDER='-1'>";
echo "<tr style='background-color:darkgrey;'>";
	echo "<td width='10%'>Area</td>";
	echo "<td width='20%'>Motor</td>";
	echo "<td width='20%'>ABS</td>";
	echo "<td width='20%'>SRS</td>";
	echo "<td width='20%'>Carroceria</td>";
echo"</tr>";
echo "<tr>";
	echo "<td>Falla</td>";
	echo "<td>'$falla_motor'</td>";
	echo "<td>'$falla_abs'</td>";
	echo "<td>'$falla_srs'</td>";
	echo "<td>'$falla_carroceria'</td>";
echo"</tr>";
echo "<tr>";
	echo "<td>Sugerencia</td>";
	echo "<td>'$sugerencia_motor'</td>";
	echo "<td>'$sugerencia_abs'</td>";
	echo "<td>'$sugerencia_srs'</td>";
	echo "<td>'$sugerencia_carroceria'</td>";
echo"</tr>";
echo"</table>";
      echo "<br>";         
          
      } 
  
 break; 
 
 

 
 
}



 

?>