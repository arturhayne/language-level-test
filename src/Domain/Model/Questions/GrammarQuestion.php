<?php


namespace LanguageTest\Domain\Model\Questions;
use Doctrine\Common\Collections\ArrayCollection;


class GrammarQuestion extends ObjectiveQuestion{


    private function __construct(QuestionId $questionId, 
                                Statement $statement, 
                                int $level){
        $this->questionId = $questionId;
        $this->statement = $statement;
        $this->level = $level;
        $this->answers = new ArrayCollection();
    }

    public static function create(QuestionId $questionId, 
                                string $statement, 
                                int $level,
                                array $answers){
        $grammarQuestion = new static($questionId, 
                            Statement::create($statement), 
                            $level);

        $grammarQuestion->addAnswers($answers);

        return $grammarQuestion;
    }

    private function addAnswers(array $arrayAnswers){
        foreach($arrayAnswers as $answer){
            $this->answers[] = Answer::create(AnswerId::create(), 
                                        $this->questionId,
                                        $answer['isTrue'],
                                        $answer['answerText']);
        }
        $this->validateAnswers();
    } 

}