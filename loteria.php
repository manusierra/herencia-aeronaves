<?php

Class Loteria {

    public $numeroaletorio;
    public $numeroseleccionado;

    function __construct($numero) {
        $this->numeroseleccionado=$numero;
        $this->numeroaleatorio=rand(1,10);
    }

    function jugar() {
        if($this->numeroseleccionado==$this->numeroaleatorio) {
            echo 'Enhorabuena, has ganado. ';
        }else {
            echo 'Lo siento, has perdido. ';
        }
    }

    function __destruct() {
        echo '<br> Game Over. ';
    }

}

$partida=new Loteria($_POST['numero']);
$partida->jugar();

?>