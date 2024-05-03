<?php
use source\Related\Address;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new \source\Related\Company();
$company->bootCompany("UpInside", "Nome da rua");

var_dump($company);

$company->boot("UpInside", new Address("Av Agamenon Magalhães", 3399, "Bloco A sala 10"));

echo "<p>A {$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()}</p>";
/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$fsphp = new \source\Related\Product("Full Stack PHP", 1997);
$laradev = new \source\Related\Product("Laravel Developer", 1997);

$company->addProduct($fsphp);
$company->addProduct($laradev);

/**
 * @var \source\Related\Product $product
 */
foreach ($company->getProducts() as $product) {
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("CEO", "Robson", "Leite");
$company->addTeamMember("Manager", "Kaue", "Cardoso");
$company->addTeamMember("Support", "Kah", "Morandi");

/**
 * @var \source\Related\User $member
 */

 var_dump($company->getTeam());
 
foreach ($company->getTeam() as $member) {
    echo "<p>{$member->getJob()}: {$member->getFirstName()} {$member->getLastName()}</p>";
}
