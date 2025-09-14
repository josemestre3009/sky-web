<?php
//Configuracion de pagina
$NombreEmpresa = "Sky Soluciones Tecnologicas S.A.S";
$Whatsapp = "573137571093";
$Telefono = "3137571093";
$Correo = "sky.tecnologia.sas@gmail.com";
$Direccion = "Cra. 19 # 17A-32";
$Ciudades = "Valledupar";

//planes

$jsonData = '[
    {
        "NOMBRE": "PLATA",
        "MEGAS": 6,
        "PRECIO": 80000
    },
    {
        "NOMBRE": "ORO",
        "MEGAS": 10,
        "PRECIO": 100000
    },
    {
        "NOMBRE": "DIAMANTE",
        "MEGAS": 14,
        "PRECIO": 140000
    }
]';

// Decodificar JSON a array de PHP
$plans = json_decode($jsonData, true);

?>