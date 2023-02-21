<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/trabajadores.controlador.php";
require_once "controladores/planillas.controlador.php";
require_once "controladores/otros.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/trabajadores.modelo.php";
require_once "modelos/planillas.modelo.php";
require_once "modelos/otros.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();