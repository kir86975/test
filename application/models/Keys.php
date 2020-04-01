<?php

/**
 * Created by PhpStorm.
 * User: Кисена
 * Date: 12.08.2016
 * Time: 22:13
 */
class Keys extends Model
{
    public function getData($textWithKeys = '')
    {
        $keys = [
            'raz' => '',
            'dva' => '',
            'tri' => ''
        ];

        $matches = [];
        $keysWithData = [];

        foreach($keys as $key => $value) {
            preg_match_all('/(?<='.$key.':).*?(?=raz:|dva:|tri:|$)/s', $textWithKeys, $matches);
            $matchesCount = count($matches[0]);
            $keysWithData[$key] = $matches[0][$matchesCount - 1];
        }

        $data = [
            'textWithKeys' => $textWithKeys,
            'keysWithData' => $keysWithData
        ];

        return $data;
    }
}