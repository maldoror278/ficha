<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="jekcar" />
    <!--
    <link rel="stylesheet" type="text/css" href="/ficha/fichatecnica.css" media="screen" />-->
    <script src="/ficha/jquery.js" type="text/javascript"></script>

<script>

$(document).ready(function(){
  $("#guardar").click(function(){
         var str1 =$("#busqueda").serialize()+"&key=3";
           $.ajax({
            url:'controlador.php',
            type:'GET',
            data:str1,
            success:function(data){
               $("#resultado").html(data);
               //alert("Registro Guardado Exitosamente!!");
               }  
           }); 
      });   
});
</script>

	<title>Registro de nuevo modelo</title>
</head>
<body style="background-color:CCFFFF;">
 
<form id="busqueda" >
 
 <div id="combo">
 <?php
  include("db.php");
  include("combo_marca.php") ?>
 </div>
 
  <div id="contendor_modelo">
    <div id="modelo">
     <p>Modelo</p>
     <input type="text" name="modelo" size="30" />
    </div>
  
    <div id="codigo_modelo">
     <p>Codigo Modelo</p>
     <input type="text" name="cod_modelo" size="30" />
    </div>
    <br />
    <div id="resultado"></div>
<br />
<input type="button" id="guardar" name="guardar"  value="Guardar"/>
<input type="button" id="actualizar" name="actualizar"  value="Actualizar"/>
<input type="button" id="eliminar" name="Eliminar"  value="Eliminar"/>
  </form>
 </div>
</body>
</html>


