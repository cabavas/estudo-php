<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("06.04 - Acesso e controle de sessões");

require __DIR__ . "/../source/autoload.php";

/*
 * [ session ] Uma classe statless para manipulação de sessões
 */
fullStackPHPClassSession("session", __LINE__);

$session = new \source\Core\Session();
$session->set("user", 1);

$session->set("stats", ["name", "email"]);
$session->unset("stats");

if(!$session->has("login")) {
    echo "<p>Logar-se</p>";
    $user = (new \source\Models\UserModel())->load(1);
    $session->set("login", $user->data());
}

$session->destroy();

var_dump(
    $_SESSION,
    $session->all(),
);