<?php

namespace LanguageTest\Application\Service\Question;

class CreateGrammarCommand{
    public $id;

    public function __construct($id){
        $this->id = $id;
    }
}