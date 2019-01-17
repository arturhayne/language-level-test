<?php

namespace LanguageTest\Domain\Model\Questions;

abstract class ObjectiveQuestion{

    CONST MIN_ANSWERS = 2;
    protected $questionId;
    protected $statement;
    protected $answers;
    protected $level;

    protected function validateAnswers(){
        $this->onlyOneRightAnswer();
        $this->atLeatTwoAnswers();
    }

    private function onlyOneRightAnswer(){
        $trueAnswers=0;
        foreach($this->answers as $answer){
            if($answer->isTrue()){
                $trueAnswers++;
            }
        }
        if($trueAnswers>1){
            throw new \InvalidArgumentException('The question must have only one right answer!');
        }
        if($trueAnswers<1){
            throw new \InvalidArgumentException('The question must have at least one right answer!');
        }

    }

    private function atLeatTwoAnswers(){
        if(count($this->answers)<self::MIN_ANSWERS){
            throw new \InvalidArgumentException('The question must have at least two answers!');
        }
    }

    public function questionId(){
        return $this->questionId;
    }

    public function statement(){
        return $this->statement;
    }

    public function level(){
        return $this->level;
    }

    public function answers(){
        return $this->answers;
    }

}