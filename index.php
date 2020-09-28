

<?php 

// Declaramos clase y atributos. Con 'public'.

class Vivienda {   // Clases siempre capitalizadas. 
    public $habitaciones;
    public $precio;
    public $altura;
    public $orientacion;

// Declaramos métodos

    function vender() {
        echo 'la vivienda se venderá';
    } 

    function comprar() {
        echo 'la vivienda se comprará';
     }
     function alquilar() {
         echo 'la vivienda se alquilará';
     }
}

//Instanciar: Crear un objeto a partir de una clase. Con 'new'. 

$piso= new Vivienda;

// Ejecutamos la función vender para esa Vivienda. 

echo $piso -> vender();
echo '<br>';
echo $piso -> habitaciones=4;


?>