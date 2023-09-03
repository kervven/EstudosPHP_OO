<?php

class Exemplo
{
    public static $atributo1 = 'sou um atributo estatico';
    public $atributo2 = 'sou um atributo normal';

    public static function metodo1()
    {
        echo "Método estático ";
    }

    public function metodo2()
    {
        echo "<br> Método normal <br> ";
    }
}

$x = new Exemplo();

$x->metodo2();

//exemplo de como um metodo estatico pode ser usados sem a necessidade um objeto da classe, se usa o nome da proria classe seguido do sinal de :: com o nome do metodo ou atributo estatico
Exemplo::metodo1();


/*
    - atributos e metodos estaticos da classe podem ser usados sem precisar de ser instanciado a um objeto atraves de ::
    - mesmo se tentarmos acessar atributos e metodos estaticos quando um objeto for instanciado, eles nao podem ser acessados por -> e sim por ::
    - metodos estaticos nao podem usar o $this.
    - metodos e atributos normais nao conseguem ser utilizados sem que sejam instanciado a um objeto.

*/
?>