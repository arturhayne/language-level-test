<?php

namespace LanguageTest\Application\Service\Question;

class DeleteGrammarCommand{
    public $id;

    public function __construct($id){
        $this->id = $id;
    }
}