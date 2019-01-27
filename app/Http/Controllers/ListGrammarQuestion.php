<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LanguageTest\Application\Service\Question\ListGrammarHandler;

use Illuminate\Http\Response;

class ListGrammarQuestion extends Controller
{
    private $handler;

    public function __construct(ListGrammarHandler $handler){
        $this->handler = $handler;
    }

    public function list(){        
        $this->handler->execute(); 
        return response()->json(['list' => $this->handler->listTransformer()], Response::HTTP_CREATED);
    }
}
