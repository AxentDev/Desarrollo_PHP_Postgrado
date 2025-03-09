<?php
require_once("carro.php");
$MazdaCx5 = new Mazda();
$MazdaCx5->encender();
$MazdaCx5->subirPasajero();
$MazdaCx5->subirPasajero();
$MazdaCx5->acelerar(30);
$MazdaCx5->frenar(30);
$MazdaCx5->apagar();
$MazdaCx5->subirPasajero();
$MazdaCx5->encender();
$MazdaCx5->acelerar(40);
$MazdaCx5->acelerar(40);
$MazdaCx5->choque();
$MazdaCx5->frenar(10);
$MazdaCx5->acelerar(20);
$MazdaCx5->choque();
$MazdaCx5->acelerar(20);
$MazdaCx5->choque();
$MazdaCx5->cambiarEstado("Optimo Más Que Super Humano Alejo");



?>