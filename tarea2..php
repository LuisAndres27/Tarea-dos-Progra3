<?php
echo "Ingrese su fecha de nacimiento (YYYY-MM-DD):";
$fecha_nacimientoto =fgets(STDIN);

$tiempo_nacimiento = strtotime ($fecha_nacimientoto);

$ano_actual = date ("Y");
$ano_nacimiento = date ("Y", $tiempo_nacimiento);

$edad = $ano_actual - $ano_nacimiento;

if (date("md")< date ("md", $tiempo_nacimiento)){
    $edad--;
}
echo "\n";



echo "tienes". $edad . "años de edad." ."\n";

$primerNumero = 12 ;

$segundoNumero = 13;

if ($primerNumero > $segundoNumero){
    echo "el numero". $primerNumero ." es mayor";
}else {
    echo  "el numero". $segundoNumero ." es mayor";
}

echo "\n";




echo "Ingrese un numero: ";
$numeroSeleccionado = fgets (STDIN);

if ($numeroSeleccionado % 2 == 0){
    echo $numeroSeleccionado."es un numero par"."\n";
}else {
    echo $numeroSeleccionado. "es un numeor impar"."\n";
}
echo "\n";


echo "Ingrese un numero: ";
$numeroSeleccionado = fgets (STDIN);

$factorial = 1;

while ($numeroSeleccionado > 1){
    $factorial = $factorial * $numeroSeleccionado;
    $numeroSeleccionado--;

}
echo "el factorial es".$factorial."\n";



// Generar 20 números aleatorios entre 1 y 100
for ($i = 0; $i < 20; $i++) {
    $numeros[] = rand(1, 100);
}



// Ordenar los números de mayor a menor utilizando
for ($i = 0; $i < count($numeros) - 1; $i++) {
    for ($j = $i + 1; $j < count($numeros); $j++) {
        if ($numeros[$i] < $numeros[$j]) {
            // Intercambiar los números
            $temp = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $temp;
        }
    }
}

// Mostrar los números ordenados
echo "Números ordenados de mayor a menor: " . implode(", ", $numeros)."\n";

$alumnos= array (

    array('alumno' => 'Juan', 'curso' => 'Matemáticas', 'nota' => 85),
    array('alumno' => 'María', 'curso' => 'Historia', 'nota' => 90),
    array('alumno' => 'Carlos', 'curso' => 'Ciencias', 'nota' => 75),
    array('alumno' => 'Laura', 'curso' => 'Literatura', 'nota' => 88),
    array('alumno' => 'Pedro', 'curso' => 'Inglés', 'nota' => 92),
    array('alumno' => 'Ana', 'curso' => 'Geografía', 'nota' => 80),
    array('alumno' => 'Luis', 'curso' => 'Arte', 'nota' => 85),
    array('alumno' => 'Sofía', 'curso' => 'Música', 'nota' => 78),
    array('alumno' => 'Miguel', 'curso' => 'Educación Física', 'nota' => 95),
    array('alumno' => 'Elena', 'curso' => 'Tecnología', 'nota' => 82)

);


foreach ($alumnos as $alumno) {
    echo "Alumno: " . $alumno['alumno'] . ", Curso: " . $alumno['curso'] . ", Nota: " . $alumno['nota'] . "\n";
}





