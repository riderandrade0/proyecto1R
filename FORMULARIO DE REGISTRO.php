<!-- multistep form -->
<html>

    <head>
    <link rel="stylesheet" type="text/css" href="inicio.css"/>
    <link rel="stylesheet" tipe="text/js" href="r.js"/>
      
    </head>
    <body>
        <font size=5><;--menu de navegacion del sitio wep-->
        <ul  class ="navegar">
            <li> <a href="RIDER.php"> MI PORTAL</a></li>
            <li> <a href="RIDER%20ANDRADE.php"> PAGINA DE PARTIDOS NACIONALES</a></li>
             <li> <a href="RIDER%20-%20ANDRADE%20HEREDIA.php"> ULTIMOS PARTIDOS ACONTESIDOS   </a>
                <li> <a href="FORMULARIO DE REGISTRO.php"> FORMULARIO DE REGISTRO    </a>  
                <li> <a href="index.php"> USUARIO  </a> 
            </ul>
    <div class="cuerpo">
       
      <marquee hspace="px/%" > <h1>  REGISTRATE .....</h1></marquee>
        <h2> FORMULARIO DE REGISTRO</h2>
        <div class="img">
            
            <script src="./script.js"></script>
            
            
              <form action="registrar.php"method ="post" class="form_register"onsubmit ="return validar();">
        
                <h5 class="formm__titulo ">CREAR UNA  CUENTA</h5>
                    <div class="contenedor-inputs">  
                        
                        <input type="text" id ="nombre" name ="nombre" placeholder="Nombre"class ="input-48" required>
                        <input type="text" id ="apellido" name ="apellido" placeholder="Apellido"class ="input-48" required>
                        <input type="email"id ="correo" name ="correo" placeholder="Correo"class ="input-100" required>
                        <input type="text" id ="usuario" name ="usuario" placeholder="Usuario"class ="input-48" required>
                        <input type="password"id ="clave" name ="clave" placeholder="Contraceña"class ="input-48" required>
                        <input type="text"id ="telefono" name ="telefono" placeholder="Telefono"class ="input-100" required>
                        <input type="submit" value="registrar"class="btn-enviar" >
                        <p class ="form__link"> ¿ya tienes una cuenta? <a href="#">Ingresa aqui</a></p>
                        
                    </div>
                
                
                </form>

         
        </div>
</html>
        </body>
           
        
