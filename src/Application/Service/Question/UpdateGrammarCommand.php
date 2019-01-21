<?php

namespace LanguageTest\Application\Service\Question;

class UpdateGrammarCommand{
    public $id;
    public $statement;
    public $level;
    public $answers;

    public function __construct($id, $statement,$level,$answers){
        $this->id = $id;
        $this->statement = $statement;
        $this->level = $level;
        $this->answers = $answers;
    }
}