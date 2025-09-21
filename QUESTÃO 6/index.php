<?php
echo "Escolha (quadrado/retangulo/circulo): ";
$figura = trim(fgets(STDIN));

if ($figura == "quadrado") {
    echo "Lado: ";
    $lado = (float) fgets(STDIN);
    echo "Área: ".$lado*$lado."\n";
}
elseif ($figura == "retangulo") {
    echo "Base: ";
    $base = (float) fgets(STDIN);
    echo "Altura: ";
    $altura = (float) fgets(STDIN);
    echo "Área: ".$base*$altura."\n";
}
elseif ($figura == "circulo") {
    echo "Raio: ";
    $raio = (float) fgets(STDIN);
    echo "Área: ".(3.14*$raio*$raio)."\n";
}
else {
    echo "Figura inválida.\n";
}
