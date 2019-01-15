<?php


namespace LanguageTest\Domain\Model\Questions;
use Doctrine\Common\Collections\ArrayCollection;


class GrammarQuestion extends ObjectiveQuestion{


    private function __construct(QuestionId $questionId, 
                                Statement $statement, 
                                ArrayCollection $answers){
        $this->validateQuestion($answers);
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

}