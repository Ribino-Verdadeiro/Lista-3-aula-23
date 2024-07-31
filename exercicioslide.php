<?php 

function calcularAliquota($salario){

    if ($salario <= 1903.98){
        echo 'você nao vai pagar impostos!';
    }elseif ($salario >= 1903.99 && $salario <= 2826.65){
        echo "O valor que voce vai pagar de Alíquota é: R$:" . ($salario * 0.075); 
        }elseif ($salario >= 2826.66 && $salario <= 3751.05){
            echo "O valor que voce vai pagar de Alíquota é: R$:" .($salario * 0.15);
            }elseif ($salario >= 3751.06 && $salario <= 4664.68){
                echo "O Valor que voce vai pagar de Alíquota é: R$:" .($salario * 0.225);
                }elseif ($salario >= 4664.69){
                    echo "O Valor que voce vai pagar de Alíquota é: R$:" .($salario * 0.275);
                    }

}

echo calcularAliquota(5000);