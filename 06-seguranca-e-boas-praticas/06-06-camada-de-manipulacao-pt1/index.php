<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.06 - Camada de manipulação pt1");

require __DIR__ . "/../source/autoload.php";

/*
 * [ string helpers ] Funções para sintetizar rotinas com strings
 */
fullStackPHPClassSession("string", __LINE__);

$string = "Essa é uma string, nela temos um under_score e um guarda-chuva!";
$message = new \source\Core\Message();
echo $message->info(str_slug($string));
echo $message->info(str_studly_case($string));
echo $message->info(str_camel_case($string));