<?php

namespace LanguageTest\Domain\Model\Questions;

class Answer{
    protected $answerId;
    protected $questionId;
    protected $isTrue;
    protected $answerText;

    private function __construct(AnswerId $answerId, QuestionId $questionId, 
                                bool $isTrue, AnswerText $answer)
    {
        //print_r($isTrue);
        $this->answerId = $answerId;
        $this->questionId = $questionId;
        $this->isTrue = $isTrue;
        $this->answerText = $answer;
    }
    
    public static function create(AnswerId $answerId, 
            QuestionId $questionId, 
            bool $isTrue,
            string $answer){
        return new static($answerId, $questionId, $isTrue, AnswerText::create($answer));
    }

    public function answerId(){
        return $this->answerId;
    }

    public function questionId(){
        return $this->questionId;
    }

    public function isTrue(){
        return $this->isTrue;
    }

    public function answerText(){
        return $this->answerText;
    }
}