<?php


$sql2="SELECT * FROM region";

$consulta=dbExecute($sql2);
echo "Region";
echo "<br>";
echo "<SELECT style='width: 125px' id='region' NAME='cod_region' SIZE='1' onchange='combo_region()'>"; 
   while($res=mysql_fetch_assoc($consulta)){
              extract($res);
         echo "<OPTION VALUE='$cod_region' selected>$region</OPTION>";  
      } 
echo "</SELECT>";



?>