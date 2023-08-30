<?php

class Carro extends Veiculo
{

    public $teto_solar = true;

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    function abrirTetoSolar()
    {
        echo 'Abrir teto solar';
    }

    function alterarPosicaoVolante()
    {
        echo 'Alterar posição do volante';
    }

}

class Moto extends Veiculo
{
    public $contraPesoGuidao = true;

    function __get($atributo)
    {
        return $this->$atributo;
    }

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }


    function empinar()
    {
        echo 'Empinar';
    }

    function trocarMarchar()
    {
        echo 'Desengatar embreagem com o mão e engatar marcha com a pé';
    }

}

class Veiculo
{

    public $placa = null;
    public $cor = null;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }
    function acelerar()
    {
        echo 'Acelerar';
    }

    function freiar()
    {
        echo 'Freiar';
    }

    function trocarMarchar()
    {
        echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
    }
}

class Caminhao extends Veiculo
{

}

$carro = new Carro('SDSE23', 'Rosa pink');
$moto = new Moto('FDFE67', 'Preto');
$caminhao = new Caminhao('HYH12', 'Azul');

$carro->trocarMarchar();
echo '<br/>';
$moto->trocarMarchar();
echo '<br/>';
$caminhao->trocarMarchar();

?>