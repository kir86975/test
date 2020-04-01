<?php

/**
 * Created by PhpStorm.
 * User: Кисена
 * Date: 15.08.2016
 * Time: 0:09
 */
class TwoDimensionalArray
{
    private $inputData = [];

    public function getData($twoDimensionalArray)
    {
        $this->inputData = explode("\r\n", $twoDimensionalArray);
        foreach($this->inputData as $key => $value) {
            $this->inputData[$key] = explode(" ", $value);
        }

        $allCombinationsArray = $this->getCombinations();

        $data = [
            'twoDimensionalArray' => $twoDimensionalArray,
            'allCombinationsArray' => $allCombinationsArray
        ];

        return $data;
    }

    private function getCombinations($leftPart = [], $iterator = 0)
    {
        $result = [];
        if (isset($this->inputData[$iterator])) {
             foreach ($this->inputData[$iterator] as $key => $value) {
                 $newLeftPart = array_merge($leftPart, [$value]);

                 if ($iterator === count($this->inputData) - 1) {
                     $result[] = $newLeftPart;
                 } else {
                     $result = array_merge($result, $this->getCombinations($newLeftPart, $iterator + 1));
                 }
             }
        }

        return $result;
    }
}