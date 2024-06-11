<?php

//cabeçário inicial


function cabecario($titular, $grana)
{
     $divisor = "******************";

    echo $divisor . "\n";
    echo "Titular: $$titular\n";
    echo "Saldo: R$$grana\n";
    echo $divisor . "\n";
}

$nome = (string) $argv[1]; 
$saldo = (int) $argv[2];

cabecario($nome, $saldo);


function opcoes()
{
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
}

opcoes();

$opcao = (int) fgets(STDIN);
$sair = false;

while($sair != true){
    switch($opcao)
    {
        case 1:
            cabecario($nome, $saldo);
            opcoes();
            $opcao = (int) fgets(STDIN);
        break;

        case 2:
            echo "Qual valor deseja sacar?\n";
            $sacar = (int) fgets(STDIN);
            if ($sacar > $saldo || $sacar < 0) {
                echo "Dados incorretos, aperte enter para tentar novamente";
                $sacar = (int) fgets(STDIN);
            }
            else 
            {
                $saldo-= $sacar;
                opcoes();
                $opcao = (int) fgets(STDIN);
            }
        break;

        case 3:
            echo "Qual valor deseja depositar?\n";
            $depositar = (int) fgets(STDIN);
            if($depositar <= 0)
            {
                echo "Dados incorretos, aperte enter para tentar novamente";
                $depositar = (int) fgets(STDIN);
            }
            else
            {
                $saldo+= $depositar;
                opcoes();

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