<?php
for ($i=0; $i<4; $i++) {
    echo "Nome do produto: ";
    $nome[$i] = trim(fgets(STDIN));

    echo "Quantidade: ";
    $quantidade[$i] = (int) fgets(STDIN);

    echo "Preço unitário: ";
    $preco[$i] = (float) fgets(STDIN);

    $total[$i] = $quantidade[$i] * $preco[$i];
}

echo "\nProduto\tQtd\tPreço\tTotal\n";
for ($i=0; $i<4; $i++) {
    echo $nome[$i]."\t".$quantidade[$i]."\t".$preco[$i]."\t".$total[$i]."\n";
}
