<?php
//session_start();

   //var globales.
   global $connection;
   global $result;



   //Conecta a la bd.
   function dbOpen()
   {
       //
       $connection = mysql_connect("localhost","root","") or die ("Couldn't open connection");

       $result=mysql_select_db("fichatecnica");
   }


	   
   //Cierra la bd.
   function dbClose()
   {
       mysql_close();
   }


   function dbLogin($sql_login,$nombre,$contraseña){
   
     dbOpen();
   
    $resultado = mysql_query($sql_login);
     
    $res1=mysql_fetch_assoc($resultado);
      
      if($res1){
        extract($res1);
           }else{
                   }
      if(mysql_num_rows($resultado)<1 || $usuario!=$nombre || $password!=$contraseña){
            echo "Su Usuario o Clave son invalidos";
          }else{
            echo "autenticado";
            $_SESSION['usuario']=$nombre;
            $_SESSION['password']=$contraseña;
         }

   }

   //execute a query and return a resultset
   function dbExecute($sql)
   {

     dbOpen();

     $result_set = mysql_query($sql);

     if (!$result_set)
     {
       die( 'ERROR: ' .  mysql_error() . $sql );
     }
     else
     {
      return $result_set;
     }
	 
     dbClose();      
   }


   function dmaamd($f)
   {
     //recibe fecha dd/mm/aa y devuelve aaaa/mm/dd
     return substr($f,6,4) . "-" . substr($f,3,2) . "-" . substr($f,0,2); 
   }

   function amddma($f)
   {
     //recibe fecha aaaa/mm/dd y devuelve dd/mm/aaaa
     return substr($f,8,2) . "-" . substr($f,5,2) . "-" . substr($f,0,4); 
   }

 function mensaje32(){
    return "hola jesus";
}

?>
