<?php 

namespace LanguageTest\Application\Service\Question;

class ArrayListTransformer implements ListTransformer{

    private $questionsArray;

    public function write($questions){
        
        $answers = [];
        $answersArray = [];
        foreach($questions as $question){
            $this->questionsArray[(string)$question->questionId()] = 
                new ListedQuestionDTO(
                    (string)$question->questionId(),
                    (string)$question->statement(),
                    $question->level()
                );
            $answers = array_merge($question->answers()->toArray(), $answers);
        }

        foreach($answers as $answer){
           
            $a = new ListedAnswerDTO(
                (string) $answer->answerId(),
                (string) $answer->questionId(),
                (string) $answer->isTrue(),
                (string) $answer->answerText()
            );
            $this->questionsArray[(string)$answer->questionId()]->setAnswers($a);
        }
    }

    public function read(){
        return $this->questionsArray;
    }

}