<?php

class Conta 
{
    public $cpfTitular;
    public $nomeTitular;
    private $saldo;

    public function sacar(float $valorASacar): void
    {
        if ($valorAsacar > $this=>saldo) {
            echo "Saldo indisponível";

        } else {
            $this->saldo -= $valorASacar;
        }
    }

        public function depositar(float |$valoraADepositar):void 
        {
            if ($valorADepositar > 0) {
                $conta['saldo'] += $valorADepositar;

            } else {
                exibeMensagem (mensagem: 'Depositos precisam ser positivos');

            }
            return $conta;
            
        }
        
        public function transferir(float $valorATransferir, Conta $contaDestino): void
        {
            if ($valorATransferir > $this->saldo) {
                echo "Saldo indisponível";
                return;
            }
    
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }




}

