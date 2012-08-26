<?php

$sql1="SELECT * FROM marca";

$consulta=dbExecute($sql1);
echo "Marca";
echo "<br>";
echo "<SELECT style='width: 125px' id='marca' NAME='cod_marca' SIZE='1' onchange='combo_modelo()'>"; 
   while($res=mysql_fetch_assoc($consulta)){
              extract($res);
         echo "<OPTION VALUE='$cod_marca' selected>$marca</OPTION>";  
      } 
echo "</SELECT>";

?>