<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use LanguageTest\Application\Service\Question\DeleteGrammarCommand;
use LanguageTest\Application\Service\Question\DeleteGrammarHandler;

use Illuminate\Http\Response;

class DeleteGrammarQuestion extends Controller
{
    private $handler;

    public function __construct(DeleteGrammarHandler $handler){
        $this->handler = $handler;
    }

    public function destroy($id){        
        $command = new DeleteGrammarCommand(
            $id);
        $this->handler->execute($command); 
        return response()->json("OK", Response::HTTP_CREATED);
    }
}
