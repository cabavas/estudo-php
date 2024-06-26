<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

$hello = "Olá Mundo!";
$code = "<span class='tag'>#BoraProgramar!</span.";

echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Faltam 2 {$day}s para o evento!</p>";

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

echo '<h3>' . $hello . " " . $code . "</h3>";

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);