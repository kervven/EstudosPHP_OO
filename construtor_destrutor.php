<?php

class Pessoa
{

    public $nome = null;
    public $idade = null;

    function __destruct()
    {
        echo 'objeto removido';
    }
    function __construct($nome, $idade)
    {
        echo 'objeto criado';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    function correr()
    {
        return $this->__get('nome') . ' está correndo';
    }

}

$pessoa = new Pessoa('rogeria', 30);
echo '<br /> Nome: ' . $pessoa->__get('nome');
echo '<br />' . $pessoa->correr();

echo '<br />';
unset($pessoa);


?>