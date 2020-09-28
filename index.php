

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

echo <br><br>;
?>

<?php 

// Objeto saxofón
// Declaramos clase.

class Saxo {
    //Declaramos atributos de saxo
    public $baño;
    public $tonalidad;
    public $boquilla;
    public $marca;

    // Declarar métodos.
    function comprar() {
        echo 'Se ha comprado un saxo';
        }
    function vender() {
        echo 'Se ha vendido un saxo';
    }

}

//Instanciamos un objeto.

$saxofon= new Saxo;

$saxofon -> comprar();
echo '<br>';
echo 'con baño' . $saxofon -> baño=' dorado, afinado en' . $saxofon -> tonalidad=' Bb, con boquilla'.$saxofon -> boquilla=' metálica y de la marca' . $saxofon -> marca=' Tone King.';


?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Creamos página web con JavaScript para ver similitudes -->
    <script>
    var valor = "Prueba JS";
    document.write(valor); // es lo mismo que escribir valor -> write en php. 
    </script>
    
</body>
</html>


<?php



?>