<?php

if($_POST["nombre"]==null)
    echo "<p style='color:orange;'>Hola</p>";
else
    echo "Nombre: "."<b>". $_POST["nombre"]."</b>"."<br>"."<br>";

if($_POST["ape"]==null)
    echo "<p style=color=red;>Hola</p>";
else
    echo "Apellidos: "."<b>". $_POST["ape"]."</b>"."<br>"."<br>";

if($_POST["edad"]==null)
echo "<p style=color=red;>Hola</p>";
else
    echo "Edad: "."<b>". $_POST["edad"]."</b>"."<br>"."<br>";

if($_POST["peso"]==null)
    echo "<p style=color=red;>Hola</p>";
else
    echo "Peso: "."<b>". $_POST["peso"]."</b>"."Kg"."<br>"."<br>";

if($_POST["sexo"]==null)
    echo "<p style=color=red;>Hola</p>";
else
    echo "Sexo: ". "<b>".$_POST["sexo"]."</b>"."<br>"."<br>";

if($_POST["eCi"]==null)
    echo "<p style=color=red;>Hola</p>";
else
    echo "Estado Civil: "."<b>". $_POST["eCi"]."<b>"."<br>"."<br>";

if($_POST["nombre"]==null)
    echo "<p style=color=red;>"."Hola"."</p>";
else{
    $afi=$_POST["aficiones"];
    echo "Aficiones: ";
    for($i=0;$i<count($afi);$i++)
    echo "<b>".$afi[$i]."</b>".",";
}

