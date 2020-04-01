<?php
/**
 * Created by PhpStorm.
 * User: prg
 * Date: 05.08.2016
 * Time: 15:22
 */
class Tags extends Model
{
    public function getData($taggedText = '')
    {
        $matches = [];

        preg_match_all('/(?<=\[)[^\/].+?(?=:.*\])/', $taggedText, $matches);

        $tags = [];
        foreach ($matches[0] as $key => $value) {
            $tags[$value] = [];
        }

        $tagsDescription = [];
        $tagsContent = [];
        foreach($tags as $key => $value) {
            preg_match('/(?<=\['.$key.':).*?(?=\])/', $taggedText, $matches);
            $tagsDescription[$key] = $matches[0];

            preg_match_all('/(?<=\['.$key.':'.$matches[0].'\]).*?(?=\[\/'.$key.'\])/s', $taggedText, $matches);
            $tagsContent[$key] = $matches[0];
        }

        $firstArray = $tagsContent;
        $secondArray = $tagsDescription;

        $data = [
            'taggedText' => $taggedText,
            'firstArray' => $firstArray,
            'secondArray' => $secondArray
        ];

        return $data;
    }
}