<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;
use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;

class GrammarQuestionTest extends TestCase
{

    public function test_it_should_has_only_one_right_answer(){
         $this->expectException(\InvalidArgumentException::class);

        $answers = [
            [
                "isTrue" => true,
                "answerText" => 'a'
            ],
            [
                'isTrue' => true,
                'answerText' => 'b'
            ]
        ];

        $question = GrammarQuestion::create(QuestionId::create(),
            'I have more than 10 chars', 1,
            $answers);
    }

    public function test_it_should_has_at_least_one_right_answer(){
        $this->expectException(\InvalidArgumentException::class);

       $answers = [
           [
               "isTrue" => false,
               "answerText" => 'a'
           ],
           [
               'isTrue' => false,
               'answerText' => 'b'
           ]
       ];

       $question = GrammarQuestion::create(QuestionId::create(),
           'I have more than 10 chars', 1,
           $answers);
   }

    public function test_it_should_has_at_least_two_answers(){
        $this->expectException(\InvalidArgumentException::class);
        
        $answers = [
            [
                "isTrue" => true,
                "answerText" => 'a'
            ]
        ]; 

        $question = GrammarQuestion::create(QuestionId::create(),
            'I have more than 10 chars', 1,
            $answers);
    }

    public function test_it_should_create_grammar_question(){
        $questionId = QuestionId::create();
 
        $answers = [
            [
                "isTrue" => true,
                "answerText" => 'a'
            ],
            [
                'isTrue' => false,
                'answerText' => 'b'
            ]
        ];
 
        $question = GrammarQuestion::create($questionId,
            'I have more than 10 chars', 1,
            $answers);
         
         $this->assertTrue(true);
    }
    


}