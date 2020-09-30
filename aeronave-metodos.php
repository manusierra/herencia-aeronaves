<?php

class Aeronave
{

    //Atributos

    public $motor;
    public $combustible;
    public $fuselaje;
    public $pasaje;

    //Métodos
    public function __construct($motor, $combustible, $fuselaje, $pasaje)
    {
        $this->motor = $motor;
        $this->combustible = $combustible;
        $this->fuselaje = $fuselaje;
        $this->pasaje = $pasaje;
    }

    public function aterrizar()
    {
        echo 'Aterriza <br>';
    }

    public function despegar()
    {
        echo 'Despega <br>';
    }

    public function repostar()
    {
        echo 'Reposta <br>';

    }

//    public function __destruct

}

// Herencia nos ahorra repetir el código de arriba. Indicamos que AeronaveCombate es una hija de Aeronave.

class AeronaveCombate extends Aeronave
{
    //Atributos
    public $municion;

    //Métodos
    // Se deben construir los valores de la clase padre y añadir el nuevo que se incluye en esta clase hija particular.
    public function __construct($municion, $motor, $combustible, $fuselaje, $pasaje)
    {
        $this->municion = $municion;
        $this->motor = $motor;
        $this->combustible = $combustible;
        $this->fuselaje = $fuselaje;
        $this->pasaje = $pasaje;
    }

    public function disparar()
    {
        echo 'Disparar objetivo <br>';
    }
}

// Creamos hacer una instancia de un avión de combate sin haber puesto nada en la función. Sólo con la herencia. Toma el método despegar() de la clase padre.

$f14 = new AeronaveCombate('misiles', '12000hp', '1500kg', 'Aluminio', '1');
$f14->repostar();
$f14->despegar();
$f14->aterrizar();
$f14->disparar();

echo $f14->motor;
echo '<br>';
echo $f14->combustible;
echo '<br>';
echo $f14->fuselaje;
echo '<br>';
echo $f14->pasaje;
echo '<br>';

class AeronaveCivil extends Aeronave
{
    public function transportar()
    {
        echo 'Transportar pasajeros <br>';
    }
}

$B738 = new AeronaveCivil('6000hp', '15000kg', 'Aleación', '182');

echo 'El B738 ';
$B738->repostar();
$B738->transportar();

echo $B738->motor;
echo '<br>';
echo $B738->combustible;
echo '<br>';
echo $B738->fuselaje;
echo '<br>';
echo $B738->pasaje;
echo '<br>';

class Helicoptero extends Aeronave
{
    //Atributos
    public $sentidogiro; // sentido de giro de las palas
    public $funcion; // transporte_pasajeros, transporte_carga, salvamento

    //Metodos
    public function __construct($sentidogiro, $funcion, $motor, $combustible, $fuselaje, $pasaje)
    {
        $this->sentidogiro = $sentidogiro;
        $this->funcion = $funcion;
        $this->motor = $motor;
        $this->combustible = $combustible;
        $this->fuselaje = $fuselaje;
        $this->pasaje = $pasaje;
    }

    public function transportar()
    {
        echo 'Transportar pasajeros <br>';
    }

    public function llevar()
    {
        echo 'El helicóptero se destina a ' . $this->funcion . '<br>';
    }

    public function girar()
    {
        echo 'Las palas del helicótero giran hacia la ' . $this->sentidogiro . '<br>';
    }
}

$UH = new Helicoptero('Derecha', 'Transporte tropas', '6000hp', '4000kg', 'Aleación', '6');

echo 'El B738 ';
$UH->llevar();
$UH->girar();

echo $B738->motor;
echo '<br>';
echo $B738->combustible;
echo '<br>';
echo $B738->fuselaje;
echo '<br>';
echo $B738->pasaje;
echo '<br>';
