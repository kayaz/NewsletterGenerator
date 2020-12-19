<?php

if (! function_exists('polishMonth')) {
    function polishMonth()
    {
        $miesiac = array('Jan' => 'Styczeń',
            'Feb' => 'Luty',
            'Mar' => 'Marzec',
            'Apr' => 'Kwiecień',
            'May' => 'Maj',
            'Jun' => 'Czerwiec',
            'Jul' => 'Lipiec',
            'Aug' => 'Sierpień',
            'Sep' => 'Wrzesień',
            'Oct' => 'Październik',
            'Nov' => 'Listopad',
            'Dec' => 'Grudzień');
        $nmiesiaca = date("M");
        return $miesiac[$nmiesiaca];
    }
}
