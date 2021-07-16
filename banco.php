<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta ->sacar(valorASacar 300);
$primeiraConta ->saldo -= 300;
$primeiraCOnta ->defineCpfTItular(cpf'123.456.789-10');

echo $primeiraConta ->recuperaSaldo();
echo $primeiraConta ->recuperaCpfTitular();