<?php

include ("usuarioC.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba foto</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .submit-btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="form-container">
        <form action="<?php echo (isset($_GET['doc'])) ? 'actualizar.php' : 'guardarRegistro.php'; ?>" method="get">
            <h2>Formulario de Registro</h2>

            <div class="form-group">
                <label for="doc">Documento</label>
                <input type="text"
                    value="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(0, $_GET['doc']) : ' '; ?>"
                    name="doc" placeholder="Documento">
            </div>

            <div class="form-group">
                <label for="nomU">Nombres</label>
                <input type="text"
                    value="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(1, $_GET['doc']) : ' '; ?>"
                    name="nomU" placeholder="Nombres">
            </div>

            <div class="form-group">
                <label for="fechaN">Fecha de Nacimiento</label>
                <input type="date"
                    value="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(2, $_GET['doc']) : ' '; ?>"
                    name="fechaN">
            </div>

            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="password"
                    value="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(4, $_GET['doc']) : ''; ?>"
                    name="contraseña" placeholder="Contraseña">
            </div>

            <div class="form-group">
                <label for="fotoPerfil">Fotografía</label>
                <img src="<?php echo (isset($_GET['doc'])) ? Usuario::retornarDatos(3, $_GET['doc']) : ' '; ?>"
                    width="120px" alt="Sin Imagen">
            </div>

            <button type="submit"
                class="submit-btn"><?php echo (isset($_GET['doc'])) ? 'Actualizar' : 'Agregar'; ?></button>
        </form>
    </div>
</body>

</html>