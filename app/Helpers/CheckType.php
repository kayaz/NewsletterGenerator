<?php

if (! function_exists('checkType')) {
    function checkType($string)
    {
        if(isset($string)) {
            $filepath = asset('uploads/'.$string);
            $img = public_path('/uploads/' . $string);

            if(file_exists($img)) {
                if(exif_imagetype($filepath)) {
                    $data = getimagesize($img);
                    return '<img src="' . $filepath . '" alt="Pobierz obrazek" border="0" width="' . $data[0] . '" height="' . $data[1] . '" style="width:' . $data[0] . 'px;height:' . $data[1] . 'px;margin:0;padding:0;border:none;display:block">';
                }
            } else {
                return 'nie ma';
            }
        }
    }
}
