<?php

use Perasser\MyTest\MyUrl;

require_once "vendor/autoload.php";

$url = new MyUrl();
echo $url->slugify('https://www.example.org', 'Das ist ein langer Text.');