<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="jekcar" />
    <link rel="stylesheet" type="text/css" href="/ficha/fichatecnica.css" media="screen" />
    <script src="/ficha/jquery.js" type="text/javascript"></script>
	<title>Login</title>
    
    <script>
    
   function ventana_emergentE(){
    window.location.replace("http://127.0.0.1/ficha/fichatecnica.php");
   }
    
$(document).ready(function(){
  $("#btn_login").click(function(){
         var str =$("#login").serialize()+"&key=5";
         $.ajax({
            url:'controlador.php',
            type:'GET',
            data:str,
            success:function(data){
               if(data=="autenticado"){
               ventana_emergentE();
              }else{
                alert(data);}
             }    
           });
      });
});
    
    
    </script>
    
    
    
    
</head>
<body style="background: white;">

<div id="contenedor_login" style="width: 60%;padding-top: 10%;; margin: auto;">
<p><h3 style="margin-left:30%;"> Ingrese Usuario y Clave para acceder</h3></p>
<form id="login">
<div style="margin-left:30%;width: 30%;height: 15%;background: darkgray; padding-left: 10%;padding-top: 1%;padding-bottom: 1%; ">
  <div id="usuario" >
   <p>Usuario</p>
   <div><input type="text" name="usuario" /></div>
  </div>
  
  <div id="password">
   <p>Contraseña</p>
   <div><input type="text" name="password" /></div>
  </div>
<br />
 <input id="btn_login" type="button" name="login" value="login"  />

</div> 
</form> 
</div>
<div id="resultado"></div>
</body>
</html>