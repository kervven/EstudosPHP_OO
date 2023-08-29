<?php
class Funcionario
{
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;


    //getters e setters
    function setNome($nome)
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
    }

    //metodos
    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filhos(s) e seu numero de telefone é $this->telefone";
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
$y->setNome('Henrique');
$y->setTelefone(81988054875);
$y->setNumFilhos(0);
//echo $y->resumirCadFunc();
echo '<br>';
echo $y->modificarNumFilhos(3);
echo '<br>';
//echo $y->resumirCadFunc();
echo '<br>';
echo $y->modificarTelefone(81988063326);
echo '<br>';
echo '<br>';
echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos e seu numero de telefone é ' . $y->getTelefone();

?>