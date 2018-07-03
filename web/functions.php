<?php
    function debug($arr){
        echo '<pre>'.print_r($arr,true).'</pre>';
    }

    function getCounter(){
        if(isset($_SESSION['cart.qty'])){
            return $_SESSION['cart.qty'];
        }else{
            return '0';
        }
    }

    function translit($s) {
    $s = (string) $s; // преобразуем в строковое значение
    $s = strip_tags($s); // убираем HTML-теги
    $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
    $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
    $s = trim($s); // убираем пробелы в начале и конце строки
    $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
    $s = strtr($s, array('а'=>'a',
        'б'=>'b',
        'в'=>'v',
        'г'=>'g',
        'д'=>'d',
        'е'=>'e',
        'ё'=>'e',
        'ж'=>'j',
        'з'=>'z',
        'и'=>'i',
        'й'=>'y',
        'к'=>'k',
        'л'=>'l',
        'м'=>'m',
        'н'=>'n',
        'о'=>'o',
        'п'=>'p',
        'р'=>'r',
        'с'=>'s',
        'т'=>'t',
        'у'=>'u',
        'ф'=>'f',
        'х'=>'h',
        'ц'=>'c',
        'ч'=>'ch',
        'ш'=>'sh',
        'щ'=>'shch',
        'ы'=>'y',
        'э'=>'e',
        'ю'=>'yu',
        'я'=>'ya',
        'ъ'=>'',
        'ь'=>'',
        ' '=>'_',
        '-'=>'_',
    ));
    $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
    $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
    return $s; // возвращаем результат
}

    function getFirstLetter($string){
        return strtoupper(mb_substr($string,0,1,"UTF-8"));
    }

    function setUserColor(){
        $colors = [
          1 => '#CD5C5C','#8B0000','#FF4500','#FF8C00','#FFD700','#BA55D3','#8A2BE2','#8B008B','#4B0082','#483D8B','#32CD32','#3CB371','#006400','#008B8B','#4682B4','#00BFFF','#000080'
        ];
        $max = count($colors);
        return $colors[rand(1,$max)];
    }

    function declension_word($number, $word) {
        $ar= array (2, 0, 1, 1, 1, 2);
        return $word[ ($number%100 > 4 && $number%100 < 20) ? 2 : $ar[min($number%10, 5)] ];
    }