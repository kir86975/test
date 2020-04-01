<?php

/**
 * Created by PhpStorm.
 * User: Кисена
 * Date: 13.08.2016
 * Time: 11:40
 */
class RepeatingNumbers extends Model
{
    public function getData($numbersArray = [])
    {
        try {
            $numbersArray = json_decode($numbersArray, true);
            $numbersCounter = [];
            $repeatingNumbers = [];
            foreach ($numbersArray as $key => $value) {
                $numbersCounter[$value] = isset($numbersCounter[$value]) ? ++$numbersCounter[$value] : 1;
                if (($numbersCounter[$value] > 1)) {
                    $repeatingNumbers[$value] = $numbersCounter[$value];
                }
            }

            $data = [
                'numbersArray' => json_encode($numbersArray),
                'repeatingNumbers' => count($repeatingNumbers)
            ];

            file_put_contents('repeatingNumbers.txt', json_encode($repeatingNumbers));
        } catch (Exception $e){
            $data = ['repeatingNumbers' => $e->getMessage()];
        }

        return $data;
    }
}