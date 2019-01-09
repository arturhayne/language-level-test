<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;
use LanguageTest\Domain\Model\Questions\ObjectiveQuestion;


class ObjectiveQuestionTest extends TestCase
{

    public function test_it_should_has_at_least_two_answers(){

        $this->expectException(\InvalidArgumentException::class);
        $stub = $this->getMockForAbstractClass(ObjectiveQuestion::class);
        $stub->expects($this->any())
             ->method('atLeatTwoAnswers')
             ->willThrowException();
    }


}