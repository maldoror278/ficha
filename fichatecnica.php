<?php session_start();?>
<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="jekcar" />
    <link rel="stylesheet" type="text/css" href="/ficha/fichatecnica.css" media="screen" />
    <script src="/ficha/jquery.js" type="text/javascript"></script>
    
   
<script>

function campos_hidden(campo){
       $("#"+campo).toggle();
     }
     
function combo_modelo(){
   var ab=$("#marca").serialize()+"&key=4";
   $.ajax({
     url:'controlador.php',
     type:'GET',
     data:ab,
     success:function(data){
       $("#combo_modelo").html(data);}
       });
     }

function combo_region(){
   var region=$("#region").serialize()+"&key=6";
   $.ajax({
     url:'controlador.php',
     type:'GET',
     data:region,
     success:function(data){
       $("#combo_scanner_region").html(data);}
       });
     }


function cod_marca(){
    var combo = document.getElementById("marca");
    var selected = combo.options[combo.selectedIndex].value;
    alert(selected);
    }
      

function ventana_emergente(pagina){
    newwindow=window.open(pagina,"","width=260,height=300")
    newwindow.creator=self
}

$(document).ready(function(){
  
 // $('#busqueda #date').addClass('validate[required]');
 // $("#busqueda").validationEngine();
  
  
  $("#guardar").click(function(){
         var str =$("#busqueda").serialize()+"&key=1";
         alert(str);
           $.ajax({
            url:'controlador.php',
            type:'GET',
            data:str,
            success:function(data){
               $("#resultado").html(data);
               alert("Registro Guardado!!"); }  });  });
  
  
    $("#Nmarca").click(function(){
     var marca="registro_marca.php";
     ventana_emergente(marca); });
    
    $("#Nmodelo").click(function(){
     var modelo="registro_modelo.php";
     ventana_emergente(modelo); });

});
</script>
<?php include("db.php");

//echo $_SESSION['usuario'];

?>
	<title>Ficha Soporte Tecnico</title>
</head>
<body>
<!--_______Div general o contenedor_____________-->
<div id="contenedor" >

<!--_______Div de navegacion botonera___________-->
<div id="botonera" class="fort_caja_pri" style="background-color: cyan;height: 30px; margin-top: 10px;">
  <input id="Nmarca" type="button" value="Nueva Marca" name="Nueva Marca" />
  <input id="Nmodelo" type="button" value="Nuevo Modelo" name="nuevo modelo" />
  <input id="btn_combo" type="button" value="combo" name="combo" />
</div>

<?php //echo $_SESSION['usuario']; ?>
<div id="resultado">
  <input type="hidden"  /> 
</div>

<form id="busqueda">

<!--titulo Informacion del vehiculo--> 
<div class="titulo" style="width: 60%; margin: auto;">
   <p>Informaciòn del vehiculo</p>
</div>

<!--Espacio donde estan los combo de marca/modelo/año-->
  
<div id="combos" class="fort_combo">  
   <!-- combo de marca-->
   <div id="combo_marca"><?php include("combo_marca.php")?></div>
   <!-- combo de modelo-->
   <div id="combo_modelo"> </div>
   <!-- combo de año -->
   <div id="combo_año"><?php include("combo_año.php") ?></div>

</div>
<hr style="width: 60%;" />
<div class="titulo" style="width: 60%; margin: auto;background-color: white;font-family: serif;" >
<input type="checkbox" onclick="campos_hidden('vehiculo')" /> Posee VIN o ECU del vehiculo
</div>


<!--_______Informacion del Vehiculo_____-->

<div hidden="" id="vehiculo" class="fort_caja_pri" style="height:100px;">

  <div hidden="" id="cliente" style="width: 157px;float: left;">
   <p>Cliente</p>
   <input type="text" name="nombre" />
  </div>

  <div id="vin" style="width: 157px;height: 78px; float: left;">
   <p>Vin</p>
   <input type="text" name="vin"  />
  </div>

  <div id="ecu" style="width: 157px;height: 78px;float: left;">
   <p>Ecu</p>
   <input type="text" name="ecu"  />
  </div>
</div>

<!--_________ Informacion del scanner_________   -->
<div id="scanner" class="fort_caja_pri">  
 
  <div class="titulo">
   <p>Informaciòn del scanner</p>
  </div>
 
<!--Espacio donde estan los combo de marca/modelo/año-->
   <!-- combo de Region-->
   <div id="combo_region"><?php include("combo_region.php")?></div>
   <!-- combo de Marca_scanner-->
   <div id="combo_scanner_region"> </div>
  
  <div class="txtsc" id="modelo">
   <p>Modelo</p>
   <input type="text" name="modelo" value="GD860" />
  </div>

  <div class="txtsc" id="serial">
   <p>Serial</p>
   <input type="text" name="serial"  />
  </div>

  <div class="txtsc" id="version">
   <p>Version del Software</p>
   <input type="text" name="version"  />
  </div>
  
</div>  

<!--_________ Resultado del ensayo/consulta_________   -->
<div id="resultado" style="width: 60%;margin: auto;" >
  <div class="titulo">
   <p>Resultado del ensayo/consulta</p>
  </div>
   
  <div id="fecha" style="margin-left:50%;" >
   <p>Fecha</p>
   <input type="text" name="fecha" id="date" />
  </div>
  
  <div id="descripcion" style="margin-left:0%;margin-bottom:15px;" >
   <p>Descripciòn</p>
   <input type="text" name="descripcion" id="descripcion" size="100" />
  </div>
  
  <div><!--Motor campo oculto -->
<input type="checkbox" name="motor" value="1" onclick="campos_hidden('motor')" /> Motor y Transmisiòn <br/>

<div hidden="" id="motor" style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
    <p>Consulta/Falla</p>
     <textarea class="txtarea" name="falla_motor" rows="8" cols="45"  ></textarea>
   </div>
 
   <div style="float:left;">
    <p>Sugerencia</p>
     <textarea class="txtarea" style="float: right;" name="sugerencia_motor" rows="8" cols="45"></textarea>
   </div>
</div>
</div><!--cierre de campo oculto motor -->


<div><!--ABS campo oculto -->
<input type="checkbox" name="abs" value="1" onclick="campos_hidden('abs')" /> ABS <br/>

<div hidden="" id="abs" style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
    <p>Consulta/Falla</p>
     <textarea class="txtarea"  name="falla_abs" rows="8" cols="45"  ></textarea>
   </div>
 
   <div style="float:left;">
    <p>Sugerencia</p>
     <textarea class="txtarea" style="float: right;" name="sugerencia_abs" rows="8" cols="45"></textarea>
   </div>
</div>
</div><!--cierre de campo oculto motor -->


<div><!--SRS campo oculto -->
<input type="checkbox" name="srs" value="1" onclick="campos_hidden('srs')" /> SRS <br/>

<div hidden="" id="srs" style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
    <p>Consulta/Falla</p>
     <textarea class="txtarea"  name="falla_srs" rows="8" cols="45"  ></textarea>
   </div>
 
   <div style="float:left;">
    <p>Sugerencia</p>
     <textarea class="txtarea" style="float: right;" name="sugerencia_srs" rows="8" cols="45"></textarea>
   </div>
</div>
</div><!--cierre de campo oculto motor -->


<div><!--Carroceria/inmovilizador/transponder campo oculto -->
<input type="checkbox" name="carroceria" value="1" onclick="campos_hidden('carroceria')" /> Carroceria/Inmobilizador/Transponder <br/>

<div hidden="" id="carroceria" style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
    <p>Consulta/Falla</p>
     <textarea class="txtarea"  name="falla_carroceria" rows="8" cols="45"  ></textarea>
   </div>
 
   <div style="float:left;">
    <p>Sugerencia</p>
     <textarea class="txtarea" style="float: right;" name="sugerencia_carroceria" rows="8" cols="45"></textarea>
   </div>
</div>
</div><!--cierre de campo oculto motor -->

  
  
<!--
  <div id="checkbox"> 
    <input type="checkbox" name="motor" value="1" checked="1" /> Motor y Transmisiòn <br/>
    <input type="checkbox" name="abs" value="1" checked="1" /> ABS <br />
    <input type="checkbox" name="srs" value="1" checked="1" /> SRS <br />
    <input type="checkbox" name="carroceria" value="1" checked="1" /> Carroceria/Inmobilizador/Transponder
  </div>
 <div style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
   <p>Consulta/Falla</p>
   <textarea class="txtarea"  name="falla" rows="8" cols="45"  ></textarea>
   </div>
 
 <div style="float:left;">
   <p>Sugerencia</p>
   <textarea class="txtarea" style="float: right;" name="sugerencia" rows="8" cols="45"></textarea>
 </div>
    </div>
    -->
  </div>
</form> 
<!-- Area de los botones (Guardar/Eliminar/Actualizar)-->
<div class="fort_caja_pri" style="margin: auto;height: 40px;">  
<input type="button" id="guardar" name="guardar"  value="Guardar"/>
<input type="button" id="actualizar" name="actualizar"  value="Actualizar"/>
<input type="button" id="eliminar" name="Eliminar"  value="Eliminar"/>
</div>
</div>
</body>
</html>