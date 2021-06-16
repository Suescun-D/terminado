
<!-- en este sacamos el numero de empleados -->


<?php include("conexion.php") ?>

<?php 

$i = 0;

foreach($arraycsv as $value){

    if($value[2] == "No"){
        
        $i = $i + 1;

       
    }

    $num = 105 - $i;
}
// DESSSSSCOMENTARRR

 echo 'numero de empleados: ',$num,'</br>';

?>

<!-- en este sacare los menores a 25 años -->

<?php 
$a = 0;


foreach ($arraycsv as $value) {
    

$d=strtotime($value[1]);
$f = date("Y-m-d", $d);

$fecha_nacimiento = new DateTime($f);
$hoy = new DateTime();
$edad = $hoy->diff($fecha_nacimiento);

$x = $edad->y;

if($x <= 25){

    $a = $a + 1;
}



}

    echo 'Menores a 25: ',$a,'</br>';




?>



<!-- aqui el salario promedio de los menores de 25 años -->


<?php 
$suma = 0;
$b = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x <= 25 and $value[2] !== "No"){
        $b = $b + 1;
        $suma = $suma + $value[3];

    }


}
$suma = $suma / $b;

echo 'salario promedio de los menores de 25 años: ',$suma,'</br>';


?>


<!-- Aqui los que son mayores de 25 y menores de 34 -->


<?php 

$c = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x >= 25 and  $x <=34 and $value[2] !== "No"){
        $c = $c + 1;
    }


}
    echo 'Cantidad de empleados con edades entre 25 y 34 años: ',$c,'</br>';

?>

<!-- salario promedio de los empleados de 25 entre 34 -->


<?php 
$suma = 0;
$c = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x >= 25 and  $x <=34 and $value[2] !== "No"){
        $c = $c + 1;
        $suma = $suma + $value[3];

    }


}
$suma = $suma / $c;
echo 'Salario promedio de empleados con edades entre 25 y 34 años: ',number_format($suma, 2, '.', ','),'</br';

?>

<!-- Cantidad de empleados mayores a 34 -->

<?php
$c = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x > 34 and $value[2] !== "No"){
        $c = $c + 1;
       
        

    }


}

    echo 'Cantidad de empleados mayores de 34 años: ',$c,'</br>';



?>

<!-- salario promedio de mayores a 34 -->


<?php 
$suma = 0;
$c = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x > 34 and $value[2] !== "No"){
        $c = $c + 1;
        $suma = $suma + $value[3];

    }


}
    $suma = $suma / $c ;
    echo 'Salario promedio de empleados mayores de 34 años: ',number_format($suma, 2, '.', ','),'</br>';

?>



<!-- Cantidad de estudiantes -->
<?php
$ef = 0;
foreach ($arraycsv as $value){

	if($value[4] !== "--"){
       
        $ef = $ef + 1;
    }

}
$ef = $ef - 1;
echo 'Cantidad de estudiantes: ',$ef,'</br>';

?>


<!-- Cantidad de estudiantes menores de 25 años -->


<?php
$ef = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

	if($value[4] !== "--"){
       
        if($x < 25){

$ef = $ef + 1;
        }        


    }

}

echo 'Cantidad de estudiantes menores de 25 años: ',$ef,'</br>';

?>


<!-- Calificación promedio de estudiantes menores de 25 años -->


<?php
$ef = 0;
$sf = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

	if($value[4] !== "--"){
       
        if($x < 25){

            $ef = $ef + 1;
            $flo = floatval($value[4]);
            $sf = $sf + $flo;

        }        


    }

}
$sf = $sf / $ef;
echo 'Calificación promedio de estudiantes menores de 25 años: ',$sf,'</br>';

?>

<!-- Cantidad de estudiantes con edades entre 25 y 34 años -->


<?php 

$c = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x >= 25 and  $x <=34 and $value[4] !== "--"){
        $c = $c + 1;

    }


}
    echo 'Cantidad de estudiantes con edades entre 25 y 34 años: ',$c,'</br>';

?>

<!-- Calificación promedio de estudiantes con edades entre 25 y 34 años -->

<?php 
$sf = 0;
$c = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x >= 25 and  $x <=34 and $value[4] !== "--"){
        $c = $c + 1;
        $flo = floatval($value[4]);
        $sf = $sf + $flo;

    }


}
    $sf = $sf / $c;
    echo 'Calificación promedio de estudiantes con edades entre 25 y 34 años: ',number_format($sf, 2, '.', ','),'</br>';

?>

<!-- Cantidad de estudiantes mayores de 34 años -->

<?php
$c = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x > 34 and $value[4] !== "--"){
        $c = $c + 1;
              

    }


}
    echo 'Cantidad de estudiantes mayores de 34 años: ',$c,'</br>';



?>





<!-- Calificación promedio de estudiantes mayores de 34 años -->
<?php
$sf = 0;
$c = 0;
foreach ($arraycsv as $value){

    $d=strtotime($value[1]);
    $f = date("Y-m-d", $d);

    $fecha_nacimiento = new DateTime($f);
    $hoy = new DateTime();
    $edad = $hoy->diff($fecha_nacimiento);

    $x = $edad->y;

    if($x > 34 and $value[4] !== "--"){
        $c = $c + 1;
        $flo = floatval($value[4]);
        $sf = $sf + $flo;
        

    }


}
    $sf = $sf / $c;
    echo 'Calificación promedio de estudiantes mayores de 34 años: ',number_format($sf, 2, '.', ',');



?>