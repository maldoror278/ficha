<?php

$sql1="SELECT * FROM año";

$consulta=dbExecute($sql1);
echo "Año";
echo "<br>";
echo "<SELECT style='width:80px' id='año' NAME='ano' SIZE='1' onchange=''>"; 
   while($res=mysql_fetch_assoc($consulta)){
              extract($res);
             
         echo "<OPTION VALUE='$cod_año'>$año</OPTION>";  
      } 
echo "</SELECT>";
 



?>