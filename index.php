<?php

namespace Desafio;

require_once __DIR__ . '/vendor/autoload.php';

$Desafio = new Desafio;
print json_encode($Desafio->item);
?>