<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;
use LanguageTest\Domain\Model\Questions\Answer;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\AnswerId;

class AnswerTest extends TestCase
{

    public function test_it_should_create_answer(){
        
        $answer = Answer::create(
            AnswerId::create(),
            QuestionId::create(),
            false,'teste');

        $this->assertInstanceOf(Answer::class,
            $answer
        );

    }
}