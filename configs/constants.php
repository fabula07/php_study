<?php

const DB_HOST = 'database';
const DB_USER = 'root';
const DB_PASSWORD = '111';

const DATABASE = 'CS';
const DSN = 'mysql:host=' . DB_HOST . ';dbname=' . DATABASE;
const APP_DIR = BASE_DIR . '/app/';
const VIEW_DIR = BASE_DIR . '/views/';
const PAGE_DIR = VIEW_DIR . 'pages/';
const PARTS_DIR = VIEW_DIR . 'parts/';

define('DOMAIN', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN . '/assets';
const ASSETS_DIR = BASE_DIR . '/assets';

const IMAGES_URI = ASSETS_URI . '/img';
const IMAGES_DIR = ASSETS_DIR . '/img';

enum TABLES:string
{
     case Content = 'content';
     case User = 'users';

     case Orders  = 'orders';
     case Products = 'products';
     case OrderProduct = 'order_product';
}
