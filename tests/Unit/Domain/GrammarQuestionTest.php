<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;
use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\Answer;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\AnswerId;

use Doctrine\Common\Collections\ArrayCollection;


class GrammarQuestionTest extends TestCase
{

    public function test_it_should_has_only_one_right_answer(){
         $this->expectException(\InvalidArgumentException::class);
        $answers = new ArrayCollection();

        $questionId = QuestionId::create();
        $answers[] = Answer::create(AnswerId::create(),$questionId,TRUE,'texto');
        $answers[] = Answer::create(AnswerId::create(),$questionId,TRUE,'texto');

        $question = GrammarQuestion::create($questionId,
            'I have more than 10 chars', 
            $answers);
    }

    public function test_it_should_has_at_least_two_answers(){
        $this->expectException(\InvalidArgumentException::class);
        $answers = new ArrayCollection();
        $answers[] = $this->createMock(Answer::class);
        $question = GrammarQuestion::create(QuestionId::create(),
            'I have more than 10 chars', 
            $answers);
    }

    public function test_it_should_create_grammar_question(){
        $answers = new ArrayCollection();
        $questionId = QuestionId::create();
 
        $answers[] = Answer::create(AnswerId::create(),$questionId,FALSE,'texto1');
        $answers[] = Answer::create(AnswerId::create(),$questionId,TRUE,'texto2');
 
        $question = GrammarQuestion::create($questionId,
            'I have more than 10 chars', 
            $answers);
         
         $this->assertTrue(true);
    }


}