<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.02 - Classes, propriedades e objetos");

fullStackPHPClassSession("classe e objeto", __LINE__);

require __DIR__ . "/classes/User.php";

$user = new User();
var_dump($user);


fullStackPHPClassSession("propriedades", __LINE__);
$user->firstName = "Caio";
$user->lastName = "Vasconcelos";
$user->email = "cursos";
var_dump($user);

echo "<p>O e-mail de {$user->firstName} é {$user->email}</p>";


fullStackPHPClassSession("métodos", __LINE__);

$user->setFirstName("Caio");
$user->setLastName("Vasconcelos");
$user->setEmail("cursos");