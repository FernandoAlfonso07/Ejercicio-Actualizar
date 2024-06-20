<?php

include ("usuarioC.php");



$r = usuario::mostrarDatos();
echo $r;




?>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    b:hover {
        transition: ease 0.2s;
        background-color: lightblue;
        color: lightcoral;
    }

    b {
        margin-top: 20px;
        background-color: black;
        padding: 10px;
        border-radius: 20px;
        transition: ease 0.2s;
    }

    h2 {
        background-color: yellow;
        width: 320px;
        padding: 5px;
    }
</style>

