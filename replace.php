
<?php

$texto = "It all Fall Down.";

//palavra a ser substituida;
$procura= 'Fall';

//Palavra nova;
$substitui='Sua nova senha é:';

//criar outra variavel;
$nova_string=str_replace($procura, $substitui, $texto);
echo $nova_string;

