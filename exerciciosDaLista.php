<?php

/* 1- Declare uma variável $x com o valor 5. Em seguida, incremente seu
valor em 1 e exiba o resultado.*/

$x = 5;
echo ++$x . "<br/>";

/* 2- Declare uma variável $y com o valor 10. Em seguida, decrete seu valor
em 1 e exiba o resultado. */

$y = 10;
echo --$y . "<br/>" . "<br/>";

/* 3- Declare uma variável $a com o valor 3. Primeiro, exiba o valor de $a e
depois incremente usando pré-incremento e pós-incremento. */

$a = 3;
echo $a . "<br/>";
echo "Pré incremento = " . ++$a . "<br/>";
echo " Pós incremento = " .$a++ . "<br/>";
echo " Valor atualizado do pós incremento = ". $a . "<br/>" . "<br/>";

/* 4- Declare uma variável $b com o valor 8. Primeiro, exiba o valor de $b e
depois decrete usando pré-decremento e pós-decremento. */

$b = 8;
echo $b . "<br/>";
echo "Pré decremento = " . --$b . "<br/>";
echo "Pos decremento = " . $b-- . "<br/>";
echo "Valor atualizado do Pós decremento = " . $b . "<br/>" . "<br/>";

/* 5- Crie uma função chamada helloWorld que não recebe nenhum
argumento e apenas imprime "Hello, World!". */ 

function helloWorld (){
    echo "Hello, World! <br/> <br/>";
}
    echo helloWorld();

/* 6- crie uma função chamada greet que recebe um argumento $name e
imprime "Hello, [name]!". */

function greet($name){
    echo "Hello, " .$name . "! <br/> <br/>";
}
    echo greet("Ribino");

/* 7- Crie uma função chamada add que recebe dois números como
argumentos, soma-os e retorna o resultado. */

function add($n1,$n2){
    $n3 = $n1 + $n2;
    echo $n3 . "<br/> <br/>";
}
    echo add(5,5);

/* 8- Crie uma função chamada multiply que recebe dois números como
argumentos. O segundo argumento deve ter um valor padrão de 2. A
função deve retornar o produto dos dois números. */

function multiply($n1,$n2){
    $n2 = 2;
    $n3 = $n1 * $n2;
    echo $n3;
}
    echo multiply(5,6) . "<br/> <br/>";

/* 9- Crie uma variável com uma frase, e aplique todas as funções nativas
mostradas nos slides. */

$frase = "o macaco JOGA <br/>";
echo "frase escolhida foi: $frase";
echo strtolower($frase);
echo strtoupper($frase);
echo ucfirst($frase);
echo strlen($frase) . "<br/>";
echo str_replace('macaco','raposa', $frase);
echo substr($frase,0,11) . "<br/>";

/* 10- Crie variáveis e aplique as funções nativas matemáticas para manipulá-
las. */

$numero = 10.5;
echo ceil($numero) . "<br/>";
echo floor($numero) . "<br/>";
echo round($numero) . "<br/>";
echo rand(0,10) . "<br/>";
echo sqrt($numero) . "<br/>";