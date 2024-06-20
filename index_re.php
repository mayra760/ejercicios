<?php 
include 'clase.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <h1>registrar Usuario</h1>
    <form method="get" action="guardar.php"><br>
        <input type="text"  VALUE ="<?php if(isset($_GET['documento'])){
         echo Retornar::retornarDato(1,$_GET['documento']);
        }?>" name="documento" placeholder="documento"><br><br>

        <input type="text" VALUE ="<?php if(isset($_GET['documento'])){
         echo Retornar::retornarDato(2,$_GET['documento']);
        }?>" name="nombre" placeholder="nombre"><br><br>


        <input type="date"  VALUE ="<?php if(isset($_GET['documento'])){
         echo Retornar::retornarDato(3,$_GET['documento']);
        }?>" name="fecha_nac" placeholder="fecha_nac"><br><br>

        <input type="text"  VALUE ="<?php if(isset($_GET['documento'])){
         echo Retornar::retornarDato(4,$_GET['documento']);
        }?>" name="foto" placeholder="foto"><br><br>

        <input type="password"  VALUE ="<?php if(isset($_GET['documento'])){
         echo Retornar::retornarDato(5,$_GET['documento']);
        }?>" name="contraseña" placeholder="contraseña"><br><br>
        <input type="submit" value="registrar">
    </form>

</body>
</html>