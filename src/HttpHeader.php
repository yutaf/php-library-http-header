<?php

/**
 * Class HttpHeader
 */
namespace Yutaf;

class HttpHeader
{
    public static function redirect($location)
    {
        header("Location: {$location}", true, 302);
    }
}
