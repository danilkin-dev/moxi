<?php
switch ($modx->event->name) {
    case 'pdoToolsOnFenomInit':

        // Модификатор version для подключения стилей и скриптов на сайт, не получая закэшированный файл
        $fenom->addModifier('version', function ($input) {
            $filepath = MODX_BASE_PATH . $input;
            if (file_exists($filepath)) {
                return $input . '?v=' . date('dmYHis', filemtime($filepath));
            }
        });

        // Модификатор phone для вывода телефона без лишних знаков, пример 79009009090
        $fenom->addModifier('phone', function ($input) {
            $phone = preg_replace('/[^0-9]/', '', $input);
            if (strpos($phone, '8') === 0 && strlen($phone) == 11) {
                $phone = '+7' . substr($phone, 1);
            } else if (strpos($phone, '7') === 0 && strlen($phone) == 11) {
                $phone = '+' . $phone;
            }
            return $phone;
        });

        // Модификатор sanitize делает тоже самое что и stripmodxtags + удалялет фигурные скобки и html
        $fenom->addModifier('sanitize', function ($input) {
            $input = preg_replace("/\\[\\[([^\\[\\]]++|(?R))*?\\]\\]/s", '', $input);
            $input = preg_replace('/[{}]/', '', $input);
            return strip_tags($input);
        });

        // Модификатор dateRu для вывода месяцев на русском
        $fenom->addModifier('dateRU', function ($input) {
            $months = array(
                'Jan' => 'января',
                'Feb' => 'февраля',
                'Mar' => 'марта',
                'Apr' => 'апреля',
                'May' => 'мая',
                'Jun' => 'июня',
                'Jul' => 'июля',
                'Aug' => 'августа',
                'Sep' => 'сентября',
                'Oct' => 'октября',
                'Nov' => 'ноября',
                'Dec' => 'декабря',
            );

            return str_replace(array_keys($months), array_values($months), $input);
        });

        // Модификатор форматирование цены
        $fenom->addModifier('priceFormat', function ($input) {
            $price = str_replace(',', '.', $input);
            return number_format($price, 0, '.', ' ');
        });

        break;
}
