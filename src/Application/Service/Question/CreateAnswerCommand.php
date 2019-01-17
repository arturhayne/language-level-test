<?php

namespace LanguageTest\Application\Service\Question;

class CreateAnswerCommand{
    public $isTrue;
    public $answerText;

    public function __construct($isTrue,$answerText){
        $this->isTrue = $isTrue;
        $this->answerText = $answerText;
    }
}