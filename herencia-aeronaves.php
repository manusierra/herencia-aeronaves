<?php

require 'aeronave-metodos.php';

// Resultados con F14.

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

//Resultados B738
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

// Resultados UH

$UH = new Helicoptero('Derecha', 'Transporte tropas', '6000hp', '4000kg', 'Aleación', '6');

echo 'El B738 ';
$UH->llevar();
$UH->girar();

echo $UH->motor;
echo '<br>';
echo $UH->combustible;
echo '<br>';
echo $UH->fuselaje;
echo '<br>';
echo $UH->pasaje;
echo '<br>';

// Resultados ultraligero

$ultra = new Ultraligero('dos tiempos', 'Transporte tropas', '800hp', '2500kg', 'Aleación', '2');

$ultra->motorizar();
