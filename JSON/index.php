<?php
//vsriable que lee la URL

$url="https://byrontosh.github.io/SOAJSON/personal.json";


 //variable para leer  el archivo
$miVar=file_get_contents($url);

//variable para decodificar

$decodjson= json_decode($miVar);


echo "informacion JSON desde la url: https://byrontosh.github.io/SOAJSON/personal.json";
echo "<br>";

foreach($decodjson as $p){
echo "NOMBRE: " .$nombre = $p->nombre;
echo "<br>";
echo "DEPARTAMENTO: " .$departamento = $p->depto;
echo "<br>";
echo "CARGO: " .$cargo = $p->cargo;
echo "<br>";
echo "EMAIL: " .$email = $p->email;
echo "<br>";
echo "GENERO: " .$genero = $p->genero;
echo "<br>";
echo "TELEFONO: " .$telefono = $p->telefono;
echo "<br>";
echo "DIRECCION: ";
echo "<br>";
$cont="";
foreach($p->direccion as $d){
echo $d. "---";
$cont=$cont. "---".$d;
}

$con=mysqli_connect("mysql-wendy19.alwaysdata.net","wendy19","arquitectura") or die ("LA BASE DD NO SE ENCUENTRA");
mysqli_set_charset ($con,"utf8");
mysqli_select_db ($con,"wendy19_empresa");

$consulta = "INSERT INTO personal (nombre,departamento,cargo,email,genero,direccion,telefono) VALUES
 ('$nombre','$departamento','$cargo','$email','$genero','$cont','$telefono');";
$resultado= mysqli_query($con,$consulta);
echo "<br>";
}

if($resultado==true){
    echo "<br>";
    echo "REGISTRO GUARDADO EXITOSAMENTE";
    }
else {
    echo "<br>";
    echo " ERROR no se guardaron los registros";
    }
    

    


?>