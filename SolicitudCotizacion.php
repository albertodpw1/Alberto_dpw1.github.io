<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ESTILO4.CSS">
</head>
<body>
  
    <br>

   <h2 align="center">SOLICITUD DE COTIZACIÓN</h2>
    <br>
            <p align="center">En esta solicitud se piden los precios, las especificaciones del producto, marca,
                 una breve descripción, formas de pago, términos de entrega, precio por unidad y
                  precio total de los productos.       
            </p>
            <form action="logincotizacion.php" method="post">
            <br>
                <input type="text" name="nombre" placeholder="Ingrese nombre" required="">
                <br>
                <input type="text" name="edad"  placeholder="Ingrese edad" required="">
                <br>
                <input type="text" name="correo" placeholder="Ingrese su correo" required="">
                <br>
                <br>
                <textarea align="center" name="descripcion" placeholder="Ingrese descripción" autofocus cols="55" rows="7" required=""></textarea> 
                          
                    <p align="center"><input type="submit"  value="Enviar"></p>
<br>
<p align="center"><input type="reset"  value="Cancelar"></p>

                  
              
                <br>
                   
</body>
</html>