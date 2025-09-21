<?php
echo "Digite a temperatura: ";
$temperatura = (float) fgets(STDIN);

echo "Converter para (C/F): ";
$escala = trim(fgets(STDIN));

if ($escala == "F") {
    $f = ($temperatura * 9/5) + 32;
    echo "$temperatura °C = $f °F\n";
} elseif ($escala == "C") {
    $c = ($temperatura - 32) * 5/9;
    echo "$temperatura °F = $c °C\n";
} else {
    echo "Escala inválida.\n";
}
