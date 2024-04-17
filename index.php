<?php

$formatos = array('.jpg', '.png', '.gif', '.pdf', '.sql');
$directorio ='archivos';
if(isset($_POST['boton'])){


    $nombreArchivo = $_FILES['archivo']['name'];
    $nombreTempArchivo = $_FILES['archivo']['tmp_name'];
    $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));

    if(in_array($ext, $formatos)){
        if(move_uploaded_file($nombreTempArchivo, "$directorio/$nombreArchivo")){

        }else{
            echo "ocurrió un error subiendo el archivo";
        }



    }else{
        echo "La extensión del archivo no es la adecuada";
    }
}





?>









<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>
        
    <div
        class="container"
    >
        
    </div>







    <div
        class="container mt-3">

        <div class="card">
            
            <div class="card-block">
            <div class="row">



            <?php
					if ($dir = opendir($directorio)){
						
					
							
						}if ($archivo = readdir($dir)) {
							
					
						}
					
				?>

            </div>

            </div>
        </div>

        <div style="background-color: rgb(56, 56, 223);">
    <h1><b>Envía tu CV</b></h1>
    <h3>Forma parte de nuestra cartera de candidatos para todas nuestras oportunidades de carrera</h3>
    <br>
</div>

<h1>Datos personales</h1>

<h2>Rellena el siguiente formulario y envíanos tu CV</h2>

<form action="registrar.php" method="post">
    <h3>Email</h3>
    <input type="text" name="email" required style="width: 200px; height: 30px;">
    <p style="color: red">Este campo es obligatorio</p>

    <h3>¿Cómo nos dirigimos a ti?</h3>
    <select name="" id="" style="width: 200px; height: 30px;">
        <option value="" >Selecciona</option>
        <option value="">Señor</option>
        <option value="">Señora</option>
       
    </select><br><br>

    <h3>Nombre</h3>
    <input type="text" name="nombre" style="width: 200px; height: 30px;">
    <h3>Apellido(s)</h3>
    <input type="text" name="apellido" style="width: 200px; height: 30px;"><br><br>

    <h3>Teléfono</h3>
    <input type="text" name="telefono" required style="width: 200px; height: 30px;">
    <p>Por favor, incluir código de país y de área</p>

    <h3>¿En qué pueblo o ciudad vives?</h3>
    <input type="text" name="ciudad" placeholder="Type city or town" style="width: 200px; height: 30px;">

    <h3>¿Cuál es tu código postal?</h3>
    <input type="text" name="codigo" placeholder="Enter postcode" style="width: 200px; height: 30px;"><br>
    <input type="checkbox">No poseo código postal de ES

    <h3>Subir CV</h3>


    

    








</form>





    <div>
    <form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="archvio">Archivo</label>
				<input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="archivo">
				<small id="fileHelp" class="form-text text-muted">Archivos permitidos (.pdf .doc)</small>
			</div>
			<button  onclick="click()"  type="submit" class="btn btn-primary" name="boton" onclick="click()">Subir archivo</button>
		
            </div>
        </form>





        
         <button type="submit" style="background-color: blue; color: white;">ENVIAR DATOS</button>

    
    <button onclick="window.print()">Empimir</button>
        




    </div>
    
    




        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
