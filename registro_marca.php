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
         var str =$("#busqueda").serialize()+"&key=2";
           $.ajax({
            url:'controlador.php',
            type:'GET',
            data:str,
            success:function(data){
               $("#resultado").html(data);
               //alert("Registro Guardado Exitosamente!!");
               }  
           });
      });   
});
</script>

	<title>Registro de nueva marca</title>
</head>
<body style="background-color:CCFFFF;">
 <form id="busqueda" >
  <div id="contendor_marca">
    <div id="marca">
     <p>Marca</p>
     <input type="text" name="marca" size="30" />
    </div>
  
    <div id="codigo_marca">
     <p>Codigo Marca</p>
     <input type="text" name="cod" size="30" />
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


