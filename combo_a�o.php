<?php

$sql1="SELECT * FROM a�o";

$consulta=dbExecute($sql1);
echo "A�o";
echo "<br>";
echo "<SELECT style='width:80px' id='a�o' NAME='ano' SIZE='1' onchange=''>"; 
   while($res=mysql_fetch_assoc($consulta)){
              extract($res);
             
         echo "<OPTION VALUE='$cod_a�o'>$a�o</OPTION>";  
      } 
echo "</SELECT>";
 



?>