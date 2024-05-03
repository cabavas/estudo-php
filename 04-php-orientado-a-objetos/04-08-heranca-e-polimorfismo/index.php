<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new \source\Inheritance\Event\Event(
    "Workshop FSPHP",
    new DateTime("2024-05-20 16:00"),
    2500,
    "4"
);

var_dump($event);

$event->register("Robson Leite", "cursos@upinside.com.br");
$event->register("Kaue Moura", "cursos@upinside.com.br");
$event->register("João Leitão", "cursos@upinside.com.br");
$event->register("Caio", "cursos@upinside.com.br");
$event->register("Cleber", "cursos@upinside.com.br");
$event->register("Joaquina", "cursos@upinside.com.br");


/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$address = new source\Inheritance\Address("Rua dos eventos", "1287");

$event = new source\Inheritance\Event\EventLive(
    "Workshop FSPHP",
    new DateTime("2024-05-20 16:00"),
    2500,
    "4",
    $address
);

$event->register("Robson Leite", "cursos@upinside.com.br");
$event->register("Kaue Moura", "cursos@upinside.com.br");
$event->register("João Leitão", "cursos@upinside.com.br");
$event->register("Caio", "cursos@upinside.com.br");
$event->register("Cleber", "cursos@upinside.com.br");


/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);


$event = new source\Inheritance\Event\EventOnline(
    "Workshop FSPHP",
    new DateTime("2024-05-20 16:00"),
    197,
    "http>//upinside.com.br/aovivo",

);

$event->register("Robson Leite", "cursos@upinside.com.br");
$event->register("Kaue Moura", "cursos@upinside.com.br");
$event->register("João Leitão", "cursos@upinside.com.br");
$event->register("Caio", "cursos@upinside.com.br");
$event->register("Cleber", "cursos@upinside.com.br");