<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo_CAFECH.png">
    <title>Document</title>
</head>
<body>
<header>
        <nav id="navbar">
                <div class="container">
                    <img src="images/logo_CAFECH.png" width="60px" class="logotype">
                    <ul class="textbutton">
                        <li>
                            <a href="index.php">Inicio</a>
                        </li>
                        <li>
                            <a href="nosotros.php">Nosotros</a>
                        </li>
                        <li>
                            <a href="galeria.php">Galería</a>
                        </li>
                        <li>
                            <a href="productos.php">Productos</a>
                        </li>
                        <li>
                            <a href="contacto.php">Contacto</a>
                        </li>
                        <li>
                            <a href="login.php">Log in</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </header>
    <section class="pagos">
    <h1>Seleccione una forma de pago:</h1>
    <form>
        <label for="forma-pago">Forma de Pago:</label>
        <select id="forma-pago">
            <option value="efectivo">Efectivo</option>
           <option value="tarjeta-credito">Tarjeta de Crédito</option>
        </select>
        <br>

        <div id="efectivo" class="opciones-pago">
            <h2>Opciones de Pago en Efectivo:</h2>
            
        </div>

        <div id="tarjeta-credito" class="opciones-pago">
            
            <<h2>Opciones de Pago con Tarjeta de Crédito:</h2>
            
        
        </div
    </section>
    
</body>
</html>