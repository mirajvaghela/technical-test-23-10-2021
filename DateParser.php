<?php

class DateParser {
    private $descriptors = ['first', 'second', 'third', 'fourth', 'fifth', 'last'];
    private $exclude_words = ['the'];

    public function parseDate($date_string) {
        $date_string = $this->formatDateString($date_string);
        if (!$this->validateDateString($date_string)) {
            echo 'Date format is not supported';
            exit();
        }

        $unixtime = strtotime($date_string);
        return date("Y-m-d", $unixtime);
    }

    // Validates if only supported descriptors are passed
    public function validateDateString($date_string) {
        foreach ($this->descriptors as $descriptor) {
            if (strpos($date_string, $descriptor) !== false) {
            return true;
        }
    }

        return false;
    }

    // strips unwanted words from the string
    public function formatDateString($date_string) {
        return str_replace($this->exclude_words, '', strtolower($date_string));
    }
}