<?php

declare(strict_types=1);

use Webware\Test\Validator;

require_once __DIR__ . '/../vendor/autoload.php';

$array = [
    'adapter' => 'PDO',
    'schema'  => 'string',
    'field'   => 'string',
    'select'  => 'string',
    'table'   => 'string',
];

$validator = new Validator($array);
var_dump($validator);
