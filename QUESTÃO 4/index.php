<?php
echo "Matriz 1:\n";
for ($i=0; $i<3; $i++) {
    for ($j=0; $j<3; $j++) {
        echo "[$i][$j]: ";
        $matriz1[$i][$j] = (int) fgets(STDIN);
    }
}

echo "\nMatriz 2:\n";
for ($i=0; $i<3; $i++) {
    for ($j=0; $j<3; $j++) {
        echo "[$i][$j]: ";
        $matriz2[$i][$j] = (int) fgets(STDIN);
    }
}

echo "\nMatriz resultante:\n";
for ($i=0; $i<3; $i++) {
    for ($j=0; $j<3; $j++) {
        $soma = $matriz1[$i][$j] + $matriz2[$i][$j];
        echo $soma."\t";
    }
    echo "\n";
}
