<html>

    <head>
    <link rel="stylesheet" type="text/css" href="inicio.css"/>
    
        <title>RIDER ANDRADE HEREDIA</title>
    </head>
    <body>
        <font size=5>  <;--menu de navegacion del sitio wep--></;--menu>
        <ul  class ="navegar">
        <li> <a href="RIDER.php"> MI PORTAL</a></li>
            <li> <a href="RIDER%20ANDRADE.php"> PAGINA DE PARTIDOS NACIONALES</a></li>
             <li> <a href="RIDER%20-%20ANDRADE%20HEREDIA.php"> ULTIMOS PARTIDOS ACONTESIDOS   </a>
                <li> <a href="FORMULARIO DE REGISTRO.php"> FORMULARIO DE REGISTRO    </a>  
                <li> <a href="index.php"> USUARIO  </a> 
            </ul>
    
            
    <div class="cuerpo">
       
     
        
        <marquee direction="right"><h1> BIENVENIDOS A MI PAGINA DE PARTIDOS</h1> </marquee>
        <h2> PARTIDOS BOLIVIA VS PERU</h2>
        <div class="img">
            
            <img src="bolivia.jpg" onmouseover="this.width=400;this.height=285;" onmouseout="this.width=250;this.height=250;" width="250" height="250" />
        </div>

       <font size=5><p> <samp class="azul" >Informacion de los partidos acontesidos:_</span>Los últimos enfrentamientos entre Perú y Bolivia<mark>
            
                
       <table class="table table-bordered">
			<thead class="alert-success">
				<tr>
					<th>Equipo1</th>
					<th>Entre2</th>
					<th>g1</th>
					<th>fecha-hora</th>
					<th>g2</th>
					<th>Entre2</th>
					<th>Equipo2</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					
					$query = $conn->query("SELECT * FROM `employee` ORDER BY `entrenador1` ASC");
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $fetch['equipo1']?></td>
					<td><?php echo $fetch['entrenador1']?></td>
					<td><?php echo $fetch['g1']?></td>
					<td><?php echo $fetch['fechahora']?></td>
					<td><?php echo $fetch['g2']?></td>
					<td><?php echo $fetch['entrenador2']?></td>
					<td><?php echo $fetch['equipo2']?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
         </font>
        
        
        <h1>  Contacto</h1>
        
            <p> Si quieres mas informacion <span class ="azul">comunicate</span>  al cel:.76436210.</p>
        <a href="javascript:print()">Imprimir pagina</a>
        </div>
</html>
        </body>
    </body>
           <script language="JavaScript">  var estado=true;  setTimeout("ver()",100);  function ver (){  estado=!estado;  if(estado==true)  texto1.style.visibility="visible";  else  texto1.style.visibility="hidden";  setTimeout("ver()",100);  }  </script><p align="center" id="texto1"  style="visibility:visible"><font >VISITA LAS DEMAS PAGINAS</font>