<?php

namespace LanguageTest\Application\Service\Question;

class CreateGrammarCommand{
    public $statement;
    public $level;
    public $answers;

    public function __construct($statement,$level,$answers){
        $this->statement = $statement;
        $this->level = $level;
        $this->answers = $answers;
    }
}