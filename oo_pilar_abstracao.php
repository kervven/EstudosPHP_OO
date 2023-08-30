<?php
class Funcionario
{
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;


    //getters e setters (overloading / sobrecarga)

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    /*function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getTelefone()
    {
        return $this->telefone;
    }

    function getNumFilhos()
    {
        return $this->numFilhos;
    }*/

    //metodos
    function resumirCadFunc()
    {
        return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " fihos(s) e seu numero de telefone é " . $this->__get('telefone');
    }


    function modificarNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
        return "o numero de filhos de $this->nome foi alterado para $this->numFilhos";
    }

    function modificarTelefone($telefone)
    {
        $this->telefone = $telefone;
        return "o numero de telefone de $this->nome foi alterado para o novo numero $this->telefone";
    }
}

$y = new Funcionario();
$y->__set('nome', 'Weslley');
$y->__set('telefone', '11933948166');
$y->__set('numFilhos', '4');
//echo $y->resumirCadFunc();
echo '<br>';
echo $y->modificarNumFilhos(3);
echo '<br>';
echo $y->resumirCadFunc();
echo '<br>';
echo $y->modificarTelefone(81988063326);
echo '<br>';
//echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filhos e seu numero de telefone é ' . $y->__get('telefone');
?>