<?php
/**
 * scritp1_Gutierrez.php
 * 
 * Descripción: Operaciones básicas de una calculadora.
 * @author : Francisco Javier Gutiérrez Pérez
 * @version : 2.0
 * @copyright : Linencia MIT
 */

/**
 * Suma dos números
 *
 * @param : $num1 Primer operando
 * @param : $num2 Segundo operando
 * @return : La suma de los dos números
 * @version : 1.0
 */
function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
 * Resta dos números
 *
 * @param : $num1 Primer operando
 * @param : $num2 Segundo operando
 * @return : La suma de los dos números
 * @version : 1.0
 */
function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
 * Multiplica dos números
 *
 * @param : $num1 Primer operando
 * @param : $num2 Segundo operando
 * @return : El producto de dos números
 * @version : 1.0
 */
function multiplicar($num1, $num2) {
  return $num1 * $num2;
}

/**
 * Divide dos números
 *
 * @param : Dividendo
 * @param : Divisor
 * @return : Devuelve la división y un mensaje de error si divide por cero
 * @version : 1.0
 */  
function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}

?>
