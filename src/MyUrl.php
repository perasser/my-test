<?php

namespace Perasser\MyTest;

use Cocur\Slugify\Slugify;

class MyUrl
{
    function slugify($url, $link) {
        $slugify = new Slugify();

        return $url . "/" . $slugify->slugify($link);
    }
}