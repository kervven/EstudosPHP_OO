<?php

class Pai
{
    private $nome = 'Emerson';
    protected $sobrenome = 'Araujo';
    public $humor = 'Irritado';

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    private function executarMania()
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
            $this->executarMania();
        } else {
            $this->responder();
        }
    }

}

/*$pai = new Pai();
echo $pai->humor;
echo '<br/>';
echo $pai->executarAcao(); */

class Filho extends Pai
{

    public function __construct()
    {
        echo '<hr/>';
        echo 'aqui é mostrado todos os metodos protegido, privados e publicos do objeto porque está dentro do construtor';
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
        echo '<hr/>';
    }

    private function executarMania()
    {
        echo 'cantar';
    }

    public function x()
    {
        $this->executarMania();
    }

    protected function responder()
    {
        echo 'olá';
    }

    /*    public function getAtributo($attr)
        {
            return $this->$attr;
        }

    protected function setAtributo($attr, $value)
    {
        $this->$attr = $value;
    } 

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    */
}

$pai = new Pai();

$filho = new Filho();
echo '<pre>';
print_r($filho);
echo '</pre>';

echo '<hr/>';
echo 'aqui é mostrado somente metodos publicos do objeto';
echo '<pre>';
print_r(get_class_methods($filho));
echo '</pre>';
echo '<hr/>';

$filho->executarAcao();
echo '<br/>';
$filho->x();



/*  
    - no processo de herança, atributos e metodos private não são herdados
    - quando damos o print_r do objeto filho, podemos ver quais atributos foram herdados da classe Pai para a classe Filho. No atributo privado, é mostrado a referência do atributo, ou seja, de onde pertence aquele atributo privado especifico, junto com seu valor. Esse atributo privado faz parte somente do contexto do objeto Pai e nao do objeto Filho.
    - se tertamos usar alguma função de get tentando puxa algum atributo privado da classe Pai, dará erro.
    - se tertanmos setar algum atributo privado do objeto pai, não irá funcionar, em especial nesse metodo de setar, que recebe como primeiro parametro o atributo o qual será modificado e em seguida o valor que será atribuido ao atributo, o que irá acontecer é que será criado o atributo correspondente caso nao exista no contexto da classe Filho, o atributo será criado e será do tipo public junto com um valor que foi passsado no sefundo atributo do metodo de setar.
    - mas conseguimos acessar e modificar atributos no contexto do objeto Filho.
    - o metodo nativo do php get_class_methods retorna em formato de array todos os metodos do objeto passado dentro do parametro, lembrando que somemente metodos publicos. Metodos protegidos que foram herdados por alguma classe, ainda é sim do contexto da classe que herdou, mas o metodo get_class_methods nao retorna metodos protegidos por serem exaramente protegidos da classe pai ou da propria classe Filho.
    - mas podemos ainda assim, conseguir ver todos os metodos herdados ou proprios do objeto, mesmo que os metodos sejam protegidos e privados. A forma que podemos fazer isso é inserir o metodo nativo get_class_methods passando como parametro o $this (dizendo para o metodo magico __construct que estamos querendo retornar todos os metodos do objeto o qual o construtor está criando) dentro do metodo magico __construct
    - IMPORTANTE: se os metodos magicos __get e __set forem herdados pelo o Filho, o Filho conseguirá acessar atributos privados da classe Pai, ou seja, o Filho poderá ver o valor do atributo privado nome da classe Pai. Isso acontece porque os metodos magicos __get e __set foram herdados, ou seja, por serem herdados do contexto da classe Pai, o Filho consegue acessar atributos privados da classe Pai. Mas o filho também conseguira setar atributos privados da classe Pai, mas nao no contexto da classe Pai (ou seja, diretamente) e sim somente na instancia desse atributo privado na classe Filho mas com referencia dizendo que esse atributo é da classe Pai.
    - IMPORTANTE: mas se os metodos magicos __get e __set forem criados dentro da propria classe Filho, ele nao conseguirá acessar atributos privados da classe Pai, porque os metodos magicos __get e __set ja estão somente no contexto da objeto Filho. Casp tentarmos setar algum atributo que nao esteja no contexto do objeto Filho, esse atributo passado no parametro será criado.
    - IMPORTANTE: o contexto dos metodos magicos __get e __set influenciam diretamente na logica da aplicação.
    - mas se algum metodo publico que for herdado, utilizar dentro dele outros metodos, podendo ser privados, o objeto Filho ainda consegue utilizar o metodo publico herdado mas que esse metodo também se utiliza de um metodo privado para poder fazer parte da aplicação. Por exemplo, na classe Pai tem um metodo privado e outro publico, mas o metodo publico, dentro dele, utiliza o metodo privado, quando esse metodo publico for herdado por alguma classe, essa classe que herdou conseguirar usar o metodo privado que está dentro do metodo publico que usa o metodo privado dentro ele. Mas a classe que herdou do Pai, nao tem dentro dela o metodo privado que em si. 
    - se por acaso criarmos um metodo igual que foi herdado da classe pai, o metodo herdado tem a precedencia de ser executado ao inves do metodo criado com mesmo nome dentro da classe Filho.
    - mas se criarmos um metodo de interface que utiliza esse metodo criado com o mesmo nome de algum metodo herdado, esse metodo criado no contextp do objeto Filho será executado.
    - mas metodos protegidos herdados, podem ser sobrescrito no contexto do objeto Filho, por exemplo: foi herdado um metodo protegio mas criei um metodo dentro do objeto Filho  com o mesmo nome do metodo protegido herdado, o metodo protegido com o mesmo nome do metodo protegido que foi herdado que criei dentro do objeto Filho terá maior precedencia.
*/
?>