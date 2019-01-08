<?php

namespace LanguageTest\Domain\Model\Questions;

abstract class ObjectiveQuestions{

    /**
     * @var QuestionId
     */
    protected $questionId;
    /**
     *  @var string
     */
    protected $statement;
    /** 
    * @var Answer []
    */
    protected $answers;

    protected function oneRightAnswer(){

    }

    protected function atLeatTwoAnswers(){
        
    }

}