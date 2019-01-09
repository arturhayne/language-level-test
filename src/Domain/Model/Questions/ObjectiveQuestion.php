<?php

namespace LanguageTest\Domain\Model\Questions;

abstract class ObjectiveQuestion{

    CONST MIN_ANSWERS = 2;

    public function __construct(){
        $this->validateQuestion();
    }

    protected function validateQuestion(){
        $this->onlyOneRightAnswer();
        $this->atLeatTwoAnswers();
    }

    protected function onlyOneRightAnswer($answers){
        
    }

    protected function atLeatTwoAnswers($answers){
        if(count($answers)<self::MIN_ANSWERS){
            throw new \InvalidArgumentException('The question must have at least two answers!');
        }
    }

}