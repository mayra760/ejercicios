<?php

class Usuario{

    public static function registro($documento, $nombre, $fecha_nac,$foto, $contraseña){
        include 'conexion.php';
        $sql_insert= "INSERT INTO tb_usuario(nombre, fecha_nac, foto, contraseña, documento) VALUES ('$nombre', '$fecha_nac', '$foto','$contraseña', '$documento')";
        $consulta=$conexion->query($sql_insert);

        if($consulta){
            header("location:V_consultar.php");
        }
    }

    public static function consultarUsuario(){
        include 'conexion.php';
        $salida = "";
        $sql ="SELECT * FROM tb_usuario";
        $consulta=$conexion->query($sql);

        while($fila= $consulta->fetch_assoc())
        {
            $salida.="<div style='background-color:yellow'>";
            $salida.= "<h1>".$fila['documento']."</h1>"."<br>";
            $salida.= "<h2>".$fila['nombre']."</h2>";
            $salida.= "</div>";
        }
        return $salida;
    }


    public static function actualizarDatos($documento,$nombre,$fecha_nac,$foto,$contraseña){
        include 'conexion.php';
        $salida=0;
        $sql="update tb_usuario set nombre='$nombre', fecha_nac='$fecha_nac', foto='$foto', contraseña='$contraseña' where documento=$documento";
        $consulta= $conexion->query($sql);
        if($consulta){
            return"ha sido actualizado";
        }
    }

} 

class Retornar{

    public static function retornarDato($des, $valor){

        include 'conexion.php';
        $salida="";
        $campo="";
        $tabla="";
        $busqueda="";
        
        if($des==1){
            $campo =" nombre "; $tabla=" tb_usuario ";
            $busqueda =" documento ";
        }

        if($des==2){
            $campo =" documento "; $tabla=" tb_usuario ";
            $busqueda =" documento ";
        }
        if($des==3){
            $campo =" fecha_nac "; $tabla=" tb_usuario ";
            $busqueda =" documento ";
        }

        if($des==4){
            $campo =" foto "; $tabla=" tb_usuario ";
            $busqueda =" documento ";
        }

        if($des==5){
            $campo =" contraseña "; $tabla=" tb_usuario ";
            $busqueda =" documento ";
        }
        $sql="SELECT $campo FROM $tabla WHERE $busqueda='$valor' ";
        $consulta=$conexion->query($sql);

        while($fila=$consulta->fetch_array())
        {
            $salida.=$fila[0];
        }
        return $salida; 
    }
}