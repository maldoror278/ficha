<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="jekcar" />
    <script src="/ficha/jquery.js" type="text/javascript"></script>

	<title>Untitled 1</title>
    <script>
    
    function campos_hidden(campo){
       $("#"+campo).toggle();
     }
    
     $(document).ready(function(){
         
         });
   
   
    </script>
</head>

<body >

<div><!--Motor campo oculto -->
<input type="checkbox" name="motor" value="1" onclick="campos_hidden('motor')" /> Motor y Transmisiòn <br/>

<div hidden="" id="motor" style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
    <p>Consulta/Falla</p>
     <textarea class="txtarea"  name="falla" rows="8" cols="45"  ></textarea>
   </div>
 
   <div style="float:left;">
    <p>Sugerencia</p>
     <textarea class="txtarea" style="float: right;" name="sugerencia" rows="8" cols="45"></textarea>
   </div>
</div>
</div><!--cierre de campo oculto motor -->


<div><!--ABS campo oculto -->
<input type="checkbox" name="abs" value="1" onclick="campos_hidden('abs')" /> ABS <br/>

<div hidden="" id="abs" style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
    <p>Consulta/Falla</p>
     <textarea class="txtarea"  name="falla" rows="8" cols="45"  ></textarea>
   </div>
 
   <div style="float:left;">
    <p>Sugerencia</p>
     <textarea class="txtarea" style="float: right;" name="sugerencia" rows="8" cols="45"></textarea>
   </div>
</div>
</div><!--cierre de campo oculto motor -->


<div><!--SRS campo oculto -->
<input type="checkbox" name="srs" value="1" onclick="campos_hidden('srs')" /> SRS <br/>

<div hidden="" id="srs" style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
    <p>Consulta/Falla</p>
     <textarea class="txtarea"  name="falla" rows="8" cols="45"  ></textarea>
   </div>
 
   <div style="float:left;">
    <p>Sugerencia</p>
     <textarea class="txtarea" style="float: right;" name="sugerencia" rows="8" cols="45"></textarea>
   </div>
</div>
</div><!--cierre de campo oculto motor -->


<div><!--Carroceria/inmovilizador/transponder campo oculto -->
<input type="checkbox" name="srs" value="1" onclick="campos_hidden('carroceria')" /> Carroceria/Inmobilizador/Transponder <br/>

<div hidden="" id="carroceria" style="width: 100%; height: 220px; ">
 
   <div style="float:left;">
    <p>Consulta/Falla</p>
     <textarea class="txtarea"  name="falla" rows="8" cols="45"  ></textarea>
   </div>
 
   <div style="float:left;">
    <p>Sugerencia</p>
     <textarea class="txtarea" style="float: right;" name="sugerencia" rows="8" cols="45"></textarea>
   </div>
</div>
</div><!--cierre de campo oculto motor -->

<table style="border: black;">
<tr>
	<td>df</td>
	<td>df</td>
	<td>df</td>
	<td>df</td>
	<td>df</td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>





</body>
</html>