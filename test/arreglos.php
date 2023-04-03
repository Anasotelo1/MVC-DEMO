<?php

//Array (arreglo) más sencillo
$platos = ["cevivhe","Arroz con pollo","Carapulcra","aji de gallina","Lomo saltado"]
echo $platos[0];
echo $platos[1];

$amigos = array("José","Joel","Lorenzo","Cesar")
echo $amigos[1]; //segundo

//Array MULTI dimensional
$aplicaciones =[
  ["Photoshop","Corel Draw","Premier","Muse"],
  ["VSCode","xampp","NetBeans","Erwin","Notepad++"],
  ["Excel","SAP","AutoCAD","PowerBI","Project"]
];

//Obtener VSCode
echo $aplicaciones[1][0]; //1 = indice arreglo, 0 = indice valor 

//Obtener Muse 
echo $aplicaciones[0][3];

//Obtener SAP
echo $aplicaciones[2][1];


//Hasta aquí, cualquier de los arreglos anteriores,utiliza un INDICE (int)
//ARREGLO ASOCIATIVOS... KEY => VALUE
$datosPersonales = [
  "apellidos"    => "Llanos Mendoza",
  "nombres"      => "Josefina Abigail"
  "especialidad" => "Ingeneria de Software con IA",
  "email"        => "Llanosmendozajosefinaabigail@gmail.com",
  "edad"         => "18",
  "estaCasado"   => true,
  "peliculas"    => ["EndGame", "Pinocho", "IronMan"]  
];

//Obtener la especialidad 
echo $datosPersonales["especialidad"];

//Obtener la primera de tus películas favoritas
echo $datosPersonales["peliculas"][0]