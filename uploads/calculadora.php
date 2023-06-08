<?php 
    class Calculadora{
        public $op;
        public $num1;
        public $num2;

        public function __construct(){
            $this->op ="null";
            $this->num1=0;
            $this->num2=0;
        }

        public function getOp() {
            return $this->op;
        }

        public function setOp($op) {
            $this->op = $op;
        }

        public function getNum1(){
            return $this->num1;
        }
        public function setNum1($num1) {
            $this->num1 = $num1;
        }

        public function getNum2() {
            return $this->num2;
        }

        public function setNum2($num2) {
            $this->num2 = $num2;
        }

        public function calcular($op, $num1, $num2){
            if(is_numeric($num1) AND is_numeric($num2)){
                $resultado=0;
                $res="";
                switch($op){
                    case "+":
                        $resultado=$num1+$num2;
                        break;
                    case "-":
                        $resultado=$num1-$num2;
                        break;
                    case "*":
                        $resultado=$num1*$num2;
                        break;
                    case "/":
                        if($num2==0){
                            $resultado="No se puede dividir por cero";
                        }else{
                            $resultado=$num1/$num2;
                        }
                        break;
                }
                return $resultado;
            }else{
                return "Los datos deben ser numericos";
            }
            
        }
    }
?>