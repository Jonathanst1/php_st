


<?php
//um vetor possui chaves e valores ,indices
//como eu acesso esse índice ?
//começam com o numero 0


$idadeList = [21, 23, 19, 25, 30, 41, 18];
//echo count($idadeList); //recebe uma lista e conta a quantidade de itens na lista

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}