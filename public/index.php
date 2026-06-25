<?php

require_once "../clases/Persona.php";
require_once "../clases/animal.php";
$camilo = new Persona();

$camilo->saludar();

$camilo->caminando();

$perro = new perro();
$perro->morder();
$perro->caminando();



?>