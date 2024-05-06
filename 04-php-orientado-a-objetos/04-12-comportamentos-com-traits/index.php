<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.12 - Comportamentos com traits");

require __DIR__ . "/source/autoload.php";

/*
 * [ trait ] São traços de código que podem ser reutilizados por mais de uma classe. Um trait é como um compoetamento
 * do objeto (BEHAVES LIKE). http://php.net/manual/pt_BR/language.oop5.traits.php
 */
fullStackPHPClassSession("trait", __LINE__);

$user = new \source\Traits\User("Robson", "Leite", "cursos@upinside.com.br");
$address = new \source\traits\Address("Rua das flores", "3339","Casa 4");

$register = new \source\traits\Register($user, $address);

var_dump($register);

$cart = new \source\Traits\Cart();
$cart->add(1, "Full Stack PHP Developer", 1, 2000);
$cart->add(2, "Laravel PHP Developer", 2, 1000);

$cart->checkout($user, $address);