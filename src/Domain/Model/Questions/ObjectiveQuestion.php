<?php

namespace LanguageTest\Domain\Model\Questions;

abstract class ObjectiveQuestion{

    CONST MIN_ANSWERS = 2;
    protected $questionId;
    protected $statement;
    protected $answers;

    protected function validateQuestion($answers){
        $this->onlyOneRightAnswer($answers);
        $this->atLeatTwoAnswers($answers);
    }

    private function onlyOneRightAnswer($answers){
        $i=0;
        foreach($answers as $answer){
            if($answer->isTrue()){
                $i++;
                if($i!=1){
                    throw new \InvalidArgumentException('The question must have only one answer!');
                }
            }

        }

    }

    private function atLeatTwoAnswers($answers){
        if(count($answers)<self::MIN_ANSWERS){
            throw new \InvalidArgumentException('The question must have at least two answers!');
        }
    }

}