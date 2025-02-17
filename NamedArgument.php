<?php

function sayHello(string $ichi, string $ni = "", string $san){ // karena ada named argumen jadi menambahkan default value tidak harus dibelakang
    echo "kitauji kokou suisou gakku bue yokoso, $ichi $ni $san".PHP_EOL;
}

// tanpa named argument
sayHello("Yukina", "Reina", "Suzune");

// sayHello("Yukina", "Reina"); => code disamping error
// karena walaupun argument ke 2 memiliki default value tapi tetap tidak mengisi ke argument ke 3
// dengan named argument
sayHello(ni: "Yukina", san: "Reina", ichi: "Suzune");
sayHello(san: "Reina", ichi: "Suzune"); //ini tidak error karena kita tidak mengisi $ni