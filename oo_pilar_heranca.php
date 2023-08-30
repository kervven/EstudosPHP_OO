<?php

class Carro extends Veiculo
{

    public $teto_solar = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }
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

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

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

}

class Veiculo
{

    public $placa = null;
    public $cor = null;

    function acelerar()
    {
        echo 'Acelerar';
    }

    function freiar()
    {
        echo 'Freiar';
    }
}

$carro = new Carro('SDSE23', 'Rosa pink');
$moto = new Moto('FDFE67', 'Preto');

echo '<pre>';
print_r($carro);
echo '<br/><br/>';
print_r($moto);
echo '</pre>';
echo '<hr/>';

$carro->abrirTetoSolar();
echo '<br/>';
$carro->acelerar();

echo '<hr/>';

$moto->empinar();
echo '<br/>';
$moto->acelerar();
?>