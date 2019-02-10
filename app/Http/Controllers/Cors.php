<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LanguageTest\Application\Service\Question\GetCorsHandler;

class Cors extends Controller
{
    private $handler;

    public function __construct(GetCorsHandler $handler){
        $this->handler = $handler;
    }

    public function get($origin) : string{
        return $this->handler->execute($origin);
    }
}
