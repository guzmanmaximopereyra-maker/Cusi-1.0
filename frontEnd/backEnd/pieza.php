<!--habitacion donde cusi tendra acceso a los minijuegos, podra dormir, cambiarse de skin, etc-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cusi</title>
    <link rel="stylesheet" href="../Cusi_style/Cusi_style.css">
</head>

<body>
    <section class="pieza">
        <div class="botones">
            <button onclick="irA('baño.php')" class="arrow_l"><img src="../Cusi_style/left.png" width="70"></button>
            <button onclick="irA('config.php')" class="btn-secundario" id="src"> <img src="../Cusi_style/eng.png"
                    width="70"></button>
        </div>

        <img src="../Cusi_style/CUSI_skins/Cusi.png" width="550" id="cusi_a">
        <img src="../Cusi_style/room-scr/games.png" width="480" id="minijuegos" class="im-btn" style="cursor: pointer;">
        <img src="../Cusi_style/room-scr/armario.png" width="300" id="armario" class="im-btn" style="cursor: pointer;">

    </section>

    <script src="Cusi_script.js"></script>
</body>

</html>