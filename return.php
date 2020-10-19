<?php

header("Access-Control-Allow-Origin: *"); //PERMITIR OUTRO SITE FAZER UMA REQUISIÇÃO NA MINHA API
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); //PERMITIR MÉTODOS DE REQUISIÇÃO
header("Content-Type: application/json"); //INFORMANDO O TIPO DE RETORNO

echo json_encode($array, JSON_UNESCAPED_UNICODE);
exit;
