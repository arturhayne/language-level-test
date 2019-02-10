<?php

namespace LanguageTest\Infrastructure;


abstract class AllowedCorsOriginList{

    public static $domain = [
        'gmail.com',
        'google.com'
    ];

    public static $ipRange = [
        '10.2.0.2',
        '192.168.10.2'
    ];

}