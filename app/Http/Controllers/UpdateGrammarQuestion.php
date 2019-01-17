<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use LanguageTest\Application\Service\Question\UpdateGrammarCommand;
use LanguageTest\Application\Service\Question\UpdateGrammarHandler;

use Illuminate\Http\Response;


class UpdateGrammarQuestion extends Controller
{
    private $handler;

    public function __construct(UpdateGrammarHandler $handler){
        $this->handler = $handler;
    }

    public function update($id, Request $request){        
        $command = new UpdateGrammarCommand(
            $id,
            $request->statement,               
            $request->level,
            $request->answers);
        $id = $this->handler->execute($command); 
        return response()->json(['id' => $id], Response::HTTP_CREATED);
    }
}
