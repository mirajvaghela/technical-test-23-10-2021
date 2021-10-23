<?php

/*
    Exercise 1 - Words without any repeating letters
*/

class WordsParser {
    private $word;

    public function  __construct($input) {
        $this->word = strtolower($input);
    }

    public function validWord() {
        $word_arr = str_split($this->word);

        $result = [];
        foreach ($word_arr as $char) {
            if (in_array($char, $result)) {
            if ($char == '-') {
                    continue;
                }
               
                return false;
            }

            $result[$char] = $char;
        }

        return true;
    }
}

