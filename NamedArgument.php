<?php

function sayHello(string $ichi, string $ni, string $san){
    echo "kitauji kokou suisou gakku bue yokoso, $ichi $ni $san".PHP_EOL;
}

// tanpa named argument
sayHello("Yukina", "Reina", "Suzune");

// dengan named argument
sayHello(ni: "Yukina", san: "Reina", ichi: "Suzune");