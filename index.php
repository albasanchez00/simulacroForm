<!doctype html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestoría</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <section id="bloque-contenido">
        <h2>Solicitud de Cita Previa</h2>
        <form action="lectura.php">
            <div class="secc-radio">
                <p>
                    <label for="seguros">Seguros</label>
                    <input type="radio" id="seguros" name="servicio" required>
                </p>
                <p>
                    <label for="juridico">Colsultoría Jurídica</label>
                    <input type="radio" id="juridico" name="servicio" required>
                </p>
                <p>
                    <label for="comunidades">Amdministracion de Comunidades</label>
                    <input type="radio" id="comunidades" name="servicio" required>
                </p>
            </div>
            <div class="fechHora">
                <p>
                    <label for="fecha">Fecha<sup>*</sup>:</label>
                    <input type="date" id="fecha" name="fecha" required>
                </p>
                <p>
                    <label for="horas">Hora<sup>*</sup>:</label>
                    <select id="horas" name="horas" required>
                        <option value=""></option>
                    </select>
                </p>
            </div>
            <div>
                <label for="nombre"></label>
                <input class="datos textoCentrado" type="text" placeholder="Nombre y Apellido*" id="" name="" required>
            </div>
            <div>
                <label for="email"></label>
                <input class="datos textoCentrado" type="email" placeholder="Email*" id="email" name="email" required>
            </div>
            <div>
                <label for="tlfno"></label
                ><input class="datos textoCentrado" type="text" placeholder="Teléfono*" id="tlfno" name="tlfno">
            </div>
            <div>
                <label for="mensaje"></label>
                <input class="datos textoCentrado" type="text" placeholder="Mensaje" id="descripcion" name="descripcion">
            </div>
            <div>
                <!-- Cambiar el estado del submit, dependiendo si acepta la política de privacidad-->
                <p><input type="checkbox" id="check">Acepta las <a href="htttps://agpd.es">Políticas de Privacidad</a></p>
            </div>
            <div>
                <input class="boton" type="submit" value="Enviar" disabled id="enviar">
                <input type="reset" value="Borrar" class="boton">
            </div>
            <?php
                if(isset($_GET["mensaje"])){
                    $mensaje = $_GET["mensaje"];
                    echo "<p>$mensaje</p>";
                }
            ?>
        </form>
    </section>
</body>
</html>