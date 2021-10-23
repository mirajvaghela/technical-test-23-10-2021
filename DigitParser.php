<?php

/*
    Exercise 4 - Words without any repeating letters
*/

class DigitParser {
    private $digit;

    public function  __construct($digit) {
        $this->digit = $digit;
    }

    public function addDigits() {
        $total = $this->digit;
        while (strlen($total) > 1)  {
            $total = array_sum(str_split($total));
        }

        return $total;
    }
}

