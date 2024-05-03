<?php
use source\Members\Trigger;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.09 - Membros de uma classe");

require __DIR__ . "/source/autoload.php";

/*
 * [ constantes ] http://php.net/manual/pt_BR/language.oop5.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

use source\Members\Config;

$config = new Config();
echo "<p>" . $config::COMPANY . "</p>";

var_dump(
        $config::COMPANY,
    // $config::DOMAIN, 
    // $config::SECTOR 
);

$reflection = new ReflectionClass(Config::class);
var_dump($reflection, get_class_methods($reflection));

var_dump($config, $reflection->getConstants());

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

Config::$company = "UpInside";
Config::$domain = "upinside.com.br";
Config::$sector = "Educação";

$config::$sector = "Tecnologia";

var_dump($config, $reflection->getProperties(), $reflection->getDefaultProperties());


/*
 * [ métodos ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("métodos", __LINE__);

$config::setConfig("", "", "");
Config::setConfig("UpInside", "upinside.com.br", "Educação");

var_dump($config, $reflection->getMethods(), $reflection->getDefaultProperties());


/*
 * [ exemplo ] Uma classe trigger
 */
fullStackPHPClassSession("exemplo", __LINE__);

$trigger = new Trigger();
$trigger::show("Um objeto trigger");

Trigger::show("Essa é uma mensagem para o usuário!");
Trigger::show("Essa é uma mensagem para o usuário!", Trigger::WARNING);
Trigger::show("Essa é uma mensagem para o usuário!", Trigger::ACCEPT);
Trigger::show("Essa é uma mensagem para o usuário!", Trigger::ERROR);

echo Trigger::show("Esse é um retorno para o usuário!");
echo Trigger::show("Esse é um retorno para o usuário!", Trigger::WARNING);
echo Trigger::show("Esse é um retorno para o usuário!", Trigger::ACCEPT);
echo Trigger::show("Esse é um retorno para o usuário!", Trigger::ERROR);