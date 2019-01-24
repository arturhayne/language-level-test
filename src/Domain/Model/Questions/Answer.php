<?php

namespace LanguageTest\Domain\Model\Questions;

class Answer{
    protected $answerId;
    protected $questionId;
    protected $isTrue;
    protected $answerText;
    protected $question;

    private function __construct(AnswerId $answerId, QuestionId $questionId, 
                                bool $isTrue, AnswerText $answer)
    {
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

    public function question(){
        return $this->question;
    }

    public function setQuestion(?ObjectiveQuestion $question){
        $this->question = $question;
    }
}