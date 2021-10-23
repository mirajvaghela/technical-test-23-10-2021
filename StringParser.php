<?php

class StringParser {
    private $string1;
    private $string2;

    public function setString1($string1) {
        $this->string1 = $string1; 

        return $this;
    }

    public function setString2($string2) {
        $this->string2 = $string2; 

        return $this;
    }

    public function getString1() { 
        return $this->string1;
    }

    public function getString2() {
        return $this->string2;
    }

    public function mergeStrings() {
        $word1_arr = str_split($this->getString1());
        $word2_arr = str_split($this->getString2());

        $result = '';
        $prefix_arr = $word2_arr;
        $suffix_arr = $word1_arr;
        if (count($word1_arr) > count($word2_arr)) {
            $prefix_arr =  $word1_arr;
            $suffix_arr = $word2_arr;
        }

        for ($i=0; $i < count($prefix_arr); $i++) {
            $result  .= (isset($prefix_arr[$i]) ? $prefix_arr[$i] : '') . (isset($suffix_arr[$i]) ? $suffix_arr[$i] : '');
        }

        return $result;
    }
}


