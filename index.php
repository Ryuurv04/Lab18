<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegEx desde Back-End</title>
</head>
<body>
    <?php
    include_once("class/validar.php");
    $obj_ver=new validar();
    if(array_key_exists('enviar', $_POST)){
        if($_REQUEST["con"]==$_REQUEST["con2"]){
            if($obj_ver->verificar_email($_REQUEST["correo"])&&$obj_ver->verificar_ip($_REQUEST["ip"])&& $obj_ver->verificar_password_strenght($_REQUEST["con"])== true){
                print("<h1>Se registro correctamente</h1>");
            }
            else{
                print("<h1>error al registrar</h1>");
            }
        }
        else{
            echo("Error: Las contraseñas no coninsiden");
        }

       
    }
    else{
    

    ?>
    <h1>Registrar</h1>
    <form action="index.php" method="post">
        Nombre: <input type="text" name="nombre" id=""><br>
        Apellido: <input type="text" name="apellido" id=""><br>
        Email: <input type="text" name="correo" id=""><br>
        Contraseña: <input type="text" name="con" id=""><br>
        Repetir Contraseña: <input type="text" name="con2" id=""><br>
        IP actual del equipo: <input type="text" name="ip" id=""><br>
        <input type="submit" value="enviar" name="enviar"><br>
    </form>
    <?php
    }
    ?>
</body>
</html>