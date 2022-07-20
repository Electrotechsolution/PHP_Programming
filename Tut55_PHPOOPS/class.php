<?php
    class addnumber
    {
        public $num1 = "";  // public variable num1
        public $num2 = ""; // public variable num2
        public $result = ""; // public variable result

        // public function __construct()
        // public function add()
        // {   
        //     $this->num1 = 10; // assign value to num1
        //     $this->num2 = 20; // assign value to num2

        //     $this->result = $this->num1 + $this->num2; // add num1 and num2
        //     return $this->result; // return result
        // }
        public function add($num1, $num2)
        {
            $this->num1 = $num1; // assign value to num1
            $this->num2 = $num2; // assign value to num2

            $this->result = $this->num1 + $this->num2; // add num1 and num2
            return $this->result; // return result
        }

        public function sub($num1, $num2)
        {
            $this->num1 = $num1; // assign value to num1
            $this->num2 = $num2; // assign value to num2

            $this->result = $this->num1 - $this->num2; // add num1 and num2
            return $this->result; // return result
        }
    }
