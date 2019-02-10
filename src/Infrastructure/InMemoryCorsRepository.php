<?php

namespace LanguageTest\Infrastructure;

use LanguageTest\Infrastructure\AllowedCorsOriginList;
use LanguageTest\Application\CorsRepository; 


class InMemoryCorsRepository  implements CorsRepository 
{
    public function findByIP(string $ip){
        if(in_array($ip, AllowedCorsOriginList::$ipRange)){
            return true;
        }
        return false;
    }
    public function findByDomain(string $domain){
        print_r($domain);
        if(in_array($domain, AllowedCorsOriginList::$domain)){
            return true;
        }
        return false;
    }
}