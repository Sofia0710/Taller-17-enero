<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de salón FullStack</title>
</head>
<body>
    <div>
    <center><h1>Salón FullStack</h1></center>

    <form action="registro.php" method="post">

    <center><div class="form-grupo">
         <label for="nombre">Nombre </label>
         <input type="text" name="nombre" class="form-control" id="nombre">
    </div> <br>
    <div class="form-grupo">
         <label for="apellido">Apellido </label>
         <input type="text" name="apellido" class="form-control" id="apellido">
    </div> <br>
    <div class="form-grupo">
         <label for="telefono">Teléfono </label>
         <input type="tel" name="telefono" class="form-control" id="telefono">
    </div> <br>
    <div class="form-grupo">
         <label for="profesion">Profesión </label>
         <input type="text" name="profesion" class="form-control" id="profesion">
    </div> <br>
    <div class="form-grupo">
         <label for="TF">Tecnología favorita</label>
         <input type="text" name="TF" class="form-control" id="TF">
    </div></center> <br>

    <center>
      <input type="submit" name="bn_consultar" value="Consultar" class="bn bn-read">
      <input type="submit" name="bn_registrar" value="Registrar" class="bn bn-create">
      <input type="submit" name="bn_actualizar" value="Actualizar" class="bn bn-update">
      <input type="submit" name="bn_eliminar" value="Eliminar" class="bn bn-delete">
    </center>
    </form>

    <?php
       include("abrir_registro.php");
       $nombre ="";
       $apellido ="";
       $telefono ="";
       $profesion =""; 
       $TF ="";

       if(isset($_POST['bn_consultar'])){
           $telefono = $_POST['telefono'];
           $existe=0;

           if($telefono==""){
               echo "El teléfono es un campo obligatorio.";
           }
           else{
            $resultado = mysqli_query($conexion, "SELECT * FROM $crearlista WHERE telefono = '$telefono");
            while($consulta = mysqli_fetch_arry($resultado)){
                echo $consulta['nombre']."<br>";
                echo $consulta['apellido']."<br>";
                echo $consulta['telefono']."<br>";
                echo $consulta['profesion']."<br>";
                echo $consulta['TF']."<br>";
                $existe++;
            }
            if($existe==0){echo "El teléfono no existe";}
           }
       }


       if(isset($_POST['bn_registrar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $profesion = $_POST['profesion'];
        $TF = $_POST['TF'];
        

        if($nombre=="" || $apellido=="" || $telefono=="" || $profesion=="" || $TF==""){
            echo "Los campos son obligatorios.";
        }
        else{
         mysqli_query($conexion, "INSERT INTO $crearlista (nombre, apellido, telefono, profesion, tecnologia favorita)
         values
         ('$nombre', '$apellido', '$telefono', '$profesion', '$TF')");
        }
       }


       if(isset($_POST['bn_actualizar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $profesion = $_POST['profesion'];
        $TF = $_POST['TF'];
        

        if($nombre=="" || $apellido=="" || $telefono=="" || $profesion=="" || $TF==""){
            echo "Los campos son obligatorios.";
        }
        else{
            $existe=0;

            $resultado = mysqli_query($conexion, "SELECT * FROM $crearlista WHERE telefono = '$telefono");
            while($consulta = mysqli_fetch_arry($resultado)){
                $existe++;
            }
            if($existe==0)
            {
                echo "El teléfono no existe";
            }
            else{
                $_UPDATE_SQL="UPDATE $crearlista Set 
                nombre = '$nombre',
                apellido = '$apellido',
                telefono = '$telefono',
                profesion = '$profesion',
                tecnologia favorita = '$TF'
    
                WHERE telefono ='$telefono'";
    
                mysqli_query($conexion, $_UPDATE_SQL);
                echo "Actualización con éxito.";
            }  
         }    
       }

       if(isset($_POST['bn_eliminar'])){
        $telefono = $_POST['telefono'];
        $existe=0;

        if($telefono==""){
            echo "El teléfono es un campo obligatorio.";
        }
        else{
         $resultado = mysqli_query($conexion, "SELECT * FROM $lista WHERE telefono = '$telefono");
         while($consulta = mysqli_fetch_arry($resultado)){
             $existe++;
         }
         if($existe==0)
         {
             echo "El teléfono no existe";
         }
            else{
            $_DELETE_SQL="DELETE FROM $lista WHERE telefono ='$telefono'";
            mysqli_query($conexion,$_DELETE_SQL);
         }
       }
     }



    ?>
    </div>
</body>
</html>