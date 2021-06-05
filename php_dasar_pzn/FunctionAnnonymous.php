<?php

// TODO: Annonymous Function
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko");

// TODO : Annonymous sebagai argument
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" .PHP_EOL;
}

sayGoodBye("dia", function (string $name) {
    return strtoupper($name);
});