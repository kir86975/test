<?php

class View
{
    function generate($contentView, $templateView = 'main', $data = null)
    {
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }

        include '../application/views/'.$templateView.'.php';
    }
}