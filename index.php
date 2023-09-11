<?php
error_reporting(E_ALL);

const BASE_DIR = __DIR__;

require_once BASE_DIR . '/vendor/autoload.php';


$data = [

];

#dd(json_encode($data));

require_once BASE_DIR . '/configs/constants.php';

try {
   require_once APP_DIR . 'index.php';

   require_once BASE_DIR . '/configs/router.php';
} catch (Exception $exception) {
    dd($exception->getCode() . ' - "' . $exception->getMessage() . '"');
}



