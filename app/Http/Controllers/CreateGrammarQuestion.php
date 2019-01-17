<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use LanguageTest\Application\Service\Question\CreateAnswerCommand;
use LanguageTest\Application\Service\Question\CreateGrammarCommand;
use LanguageTest\Application\Service\Question\CreateGrammarHandler;


use Illuminate\Http\Response;

class CreateGrammarQuestion extends Controller
{
    private $handler;

    public function __construct(CreateGrammarHandler $handler){
        $this->handler = $handler;
    }

    public function store(Request $request){        
        $command = new CreateGrammarCommand(
            $request->statement,               
            $request->level,
            $request->answers);
        $id = $this->handler->execute($command); 
        return response()->json(['id' => $id], Response::HTTP_CREATED);
    }
}
