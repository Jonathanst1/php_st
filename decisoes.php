<?php
//É bom sempre adicionar as chaves mesmo o código funcionando sem
$idade = 19;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais do que 18 anos ou ";
echo " a partir de 16 anos acompanhado" . PHP_EOL;
if ($idade >= 18 ) {    //se
    echo "Você tem $idade anos. Pode entrar sozinho.";
    
} else if($idade >= 16 && $numeroDePessoas > 1) { // é como se dentro do else tivesse uma verificação como se tivesse um if dentro do else dentro de outro if 
    echo "VOcê tem $idade anos , está acompanhado(a), então pode entrar";
}else
    echo "Você só tem $idade anos. VocÊ não pode entrar"; // Quando se tem apenas uma linha podemos tirar as chaves
    

echo PHP_EOL;
echo "Adeus!";



