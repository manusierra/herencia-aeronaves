<?php

// Clase padre.
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
// Comienzan clases hijas.
//Aviación militar
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

// Aviación civil
class AeronaveCivil extends Aeronave
{
    public function transportar()
    {
        echo 'Transportar pasajeros <br>';
    }
}

//Helicoptero
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

//Ultraligero

class Ultraligero extends Aeronave
{
//Atributos
    public $tipomotor; //2 o 4 tiempos

//Métodos

    public function __construct($tipomotor, $funcion, $motor, $combustible, $fuselaje, $pasaje)
    {
        $this->tipomotor = $tipomotor;
        $this->funcion = $funcion;
        $this->motor = $motor;
        $this->combustible = $combustible;
        $this->fuselaje = $fuselaje;
        $this->pasaje = $pasaje;
    }

    public function motorizar()
    {
        echo 'El tipo de motor que equipa el ultraligero es de combusión a ' . $this->tipomotor . '.<br';
    }

}
