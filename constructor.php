<?php   

class Persona {
    //Atributos
    
    public $nombre;
    public $dni;

    //Métodos
    //Creamos un método constructor que es el primero que ejecuta el objeto. 
    //En PHP existe un método mágico: 
    // Con él le asignamos unos valores iniciales a los atributos. 
    
    function __construct($nombre,$dni) {
        //this se refiere a la propia clase asignando nombre a los atributos: Apuntamos al atributo a trabés de esta variable para poder asignarle un valor. 
        $this -> nombre=$nombre;
        $this -> dni=$dni;
    }

    function saludar() {
        echo 'Hola, qué tal, '.$this -> nombre . '.<br>';
    }
}

$alumno=new Persona('Angel','11222333B');
$alumno2=new Persona('Pedro','22333444C');
$alumno->saludar();
$alumno2->saludar();

?>