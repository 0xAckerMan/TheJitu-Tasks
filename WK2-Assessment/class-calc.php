<?php

class Calc {

    public $num1;
    public $num2;
    public $cal;

    public function __construct($int1, $int2, $calc) {
        $this->num1 = $int1;
        $this->num2 = $int2;
        $this->cal = $calc;
    }

    public function calcMethod() {
      switch ($this->cal) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'sub':
            $result = $this->num1 - $this->num2;
            break;
        case 'mul':
            $result = $this->num1 * $this->num2;
            break;
        
        case "div":
            $result = $this->num1 / $this->num2;
            break;

        default:
            $result = "Error";
            break;
      }
      return $result;
    }
}

 ?>