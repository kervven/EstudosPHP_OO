<?php

class Pai
{
    private $nome;
    protected $sobrenome;
    public $humor;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    private function executarMaria()
    {
        echo 'assobiar';
    }

    protected function responder()
    {
        echo 'oi';
    }

    public function executarAcao()
    {
        $x = rand(1, 10);

        if ($x >= 1 && $x <= 8) {
            $this->executarAcao();
        } else {
            $this->responder();
        }
    }

}

$pai = new Pai();
echo $pai->humor;
echo '<br/>';
echo $pai->executarAcao();


?>