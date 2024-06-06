<?php

/*
echo "Digite um numero: \n";
$numero = (int) fgets(STDIN);
echo "O número é: $numero\n";
*/

//cabeçário inicial
$nome = (string) $argv[1];
$saldo = (int) $argv[2];
$divisor = "******************";
$consultarSaldo = "1. Consultar saldo atual";
$opcaoSacar = "2. Sacar valor";
$opcaoDepositar = "3. Depositar valor";
$opcaoSair = "4. Sair";


echo $divisor . "\n";
echo "Titular: $nome\n";
echo "Saldo: R$$saldo\n";
echo $divisor . "\n";
echo $consultarSaldo . "\n";
echo $opcaoSacar . "\n";
echo $opcaoDepositar . "\n";
echo $opcaoSair . "\n";

$opcao = (int) fgets(STDIN);
$sair = false;

while($sair != true){
    switch($opcao){
        case 1:
            echo $divisor . "\n";
            echo "Titular: $nome\n";
            echo "Saldo : R$$saldo\n";
            echo $divisor . "\n";
            echo $consultarSaldo . "\n";
            echo $opcaoSacar . "\n";
            echo $opcaoDepositar . "\n";
            echo $opcaoSair . "\n";
            $opcao = (int) fgets(STDIN);
        break;

        case 2:
            echo "Qual valor deseja sacar?\n";
            $sacar = (int) fgets(STDIN);
            if ($sacar > $saldo || $sacar < 0) {
                echo "Dados incorretos, aperte enter para tentar novamente";
                $sacar = (int) fgets(STDIN);
            }else {
                $saldo-= $sacar;
                echo $consultarSaldo . "\n";
                echo $opcaoSacar . "\n";
                echo $opcaoDepositar . "\n";
                echo $opcaoSair . "\n";
                $opcao = (int) fgets(STDIN);
            }
        break;

        case 3:
            echo "Qual valor deseja depositar?\n";
            $depositar = (int) fgets(STDIN);
            if($depositar <= 0){
                echo "Dados incorretos, aperte enter para tentar novamente";
                $depositar = (int) fgets(STDIN);
            }else{
                $saldo+= $depositar;
                echo $consultarSaldo . "\n";
                echo $opcaoSacar . "\n";
                echo $opcaoDepositar . "\n";
                echo $opcaoSair . "\n";
                $opcao = (int) fgets(STDIN);
            }
        break;
        
        case 4:
            echo "Adeus";
            $sair = true;
        break;

        default :
            echo "Opção invalida, tente denovo\n";
            $opcao = (int) fgets(STDIN);
        break;
    }

}