<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body >
   <FORM method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"">
    
    <input type="text" id="name" name="name" placeholder="Nombre: " value="<?php echo $_POST['name']; ?>" />
    <?php echo "<p class='note'>".$msg_name."</p>";?>
    <?php echo "<p class='note'>".$msg2_name."</p>";?>
    <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos: " />
    <input type="text" id="direccion" name="direccion" placeholder="Dirección: " />
    <input type="text" id="cp" name="cp"  placeholder="C.P: "/>
    <input type="email" id="email" name="email" placeholder="email: " />
    <input type="email" id="email2" name="email2" placeholder="Confirma email: "/>
    <input type="text" id="dni" name="dni" placeholder="DNI: "/>
    <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña: "/>

    <button type="submit"  name="Aceptar">Enviar </button>

    <?php
    echo 'entro a validar';
    if (isset($_POST['submit'])) {
    //checking name
    if(empty($_POST['name']))
    $msg_name = "You must supply your name";
    $name_subject = $_POST['name'];
    $name_pattern = '/^[a-zA-Z ]*$/';
    preg_match($name_pattern, $name_subject, $name_matches);
    if(!$name_matches[0])
    $msg2_name = "Only alphabets and white space allowed";
    }
    

        
    ?>
    

   </FORM>
    
</body>
</html>