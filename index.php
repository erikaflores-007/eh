<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con PHP</title>
    
<link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="form-container">
    <h2>Dejanos tu Orden</h2>
    <form method="post" autocomplete="off">
        <div class="form-group">
            <div class="form-content">
<label for="name">Nombre</label>
<input type="text" id="name" placeholder="Nombre">
            </div>
            <div class="form-content">
<label for="email">Correo</label>
<input type="email" id="email" placeholder="Correo">
            </div>
        </div>
        <div class="form-group">
            <div class="form-content">
<label for="direction">Direccion</label>
<input type="direction" id="direction" placeholder="Direction">
            </div>
            <div class="form-content">
<label for="phone">Telefono</label>
<input type="tel" id="phone" placeholder="Telefono">
            </div>
        </div>
<label for="message">Mensaje</label>
<textarea name="message" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
<input class="btn" type="submit" name="contact" value="Enviar Mensaje">
    </form>
   </div>
<?php
include("comentario.php")
?>

</body>
</html>