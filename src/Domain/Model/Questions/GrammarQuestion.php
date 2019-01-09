<?php


namespace LanguageTest\Domain\Model\Questions;
use Doctrine\Common\Collections\ArrayCollection;


class GrammarQuestion extends ObjectiveQuestion{

    protected $questionId;
    protected $statement;
    protected $answers;


    private function __construct(QuestionId $questionId, 
                                Statement $statement, 
                                ArrayCollection $answers){
                                    //parent::validateValue($value);
        $this->questionId = $questionId;
        $this->statement = $statement;
        $this->answers = $answers;
    }

    public static function create(QuestionId $questionId, 
                                string $statement, 
                                ArrayCollection $answers){
        return new static($questionId, 
                            Statement::create($statement), 
                            $answers);
    }
/*
    protected function validateQuestion(ArrayCollection $answers){
        $this->onlyOneRightAnswer($answers);
        $this->atLeatTwoAnswers($answers);
    }

    protected function onlyOneRightAnswer(ArrayCollection $answers){
        
    }

    protected function atLeatTwoAnswers(ArrayCollection $answers){
        if(count($answers)<2){
            throw new \InvalidArgumentException('The question must have at least two answers!');
        }
    }*/




}