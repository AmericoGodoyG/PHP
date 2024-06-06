<?php 

    class Calculadora {

        public function somar($a, $b){

            return $a + $b;

        }


        public function subtrair($a, $b){

            return $a - $b;

        }


        public function multiplicar($a, $b){

            return $a * $b;

        }


        public function dividir($a, $b){

            if ($b != 0) {

                return $a / $b;

            } else {

                return "Não é possível divir zero";

            }

        }

    }


    $calculos = new Calculadora;
    echo $calculos->somar(10, 2) . '<br>';
    echo $calculos->subtrair(10, 2) . '<br>';
    echo $calculos->multiplicar(10, 2) . '<br>';
    echo $calculos->dividir(0, 1) . '<br>';

?>