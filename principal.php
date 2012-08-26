<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="jekcar" />
    <link rel="stylesheet" type="text/css" href="/ficha/fichatecnica.css" media="screen" />
    <script src="/ficha/jquery.js" type="text/javascript"></script>

	<title>Untitled 1</title>
    
    <script type="text/javascript">
       
       function men(){
        $("#"+txt_oculto).toggle();
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
        }//fin de la funcion combo modelo
        
        
        function buscar(){
            var buscar1 = $("form").serialize()+"&key=7";
            alert(buscar1);
          $.ajax({
          url:'controlador.php',
          type:'GET',
          data:buscar1,
          success:function(data){
       $("#detalle").html(data);}
         });
        }
    
    </script>
    
</head>

<body style="background-color: white;">
<?php include("db.php");?>

<div id="contenedor_pri"> 
  
 <div id="botonera"> 
 <div id="combos" class="fort_combo">
 <form>
   <!-- combo de marca-->
   <div id="combo_marca"><?php include("combo_marca.php")?></div>
   <!-- combo de modelo-->
   <div id="combo_modelo"> </div>
   <!-- combo de año -->
   <div id="combo_año""><?php include("combo_año.php") ?></div>
   </form>
   <input type="button" id="btn_buscar" name="buscar" value="buscar" onclick="buscar()"/> 
   
     </div>
   </div>
 </div>

<div id="detalle"> </div>

</body>
</html>