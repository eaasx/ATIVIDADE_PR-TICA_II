<?php
$numeros = [];
for ($i=0; $i<10; $i++) {
    echo "Digite um número: ";
    $num = (int) fgets(STDIN);
    $numeros[$i] = $num;
}

for ($i=0; $i<10; $i++) {
    if ($numeros[$i] % 2 == 0) {
        $pares[] = $numeros[$i];
    } else {
        $impares[] = $numeros[$i];
    }
}

echo "\nPares:\n";
print_r($pares);

echo "Ímpares:\n";
print_r($impares);
