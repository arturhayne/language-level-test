<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;
use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\Answer;
use LanguageTest\Domain\Model\Questions\AnswerId;
use LanguageTest\Domain\Model\Questions\QuestionId;

use Doctrine\Common\Collections\ArrayCollection;


class GrammarQuestionTest extends TestCase
{

    public function test_it_should_has_at_least_two_answers(){
        $this->expectException(\InvalidArgumentException::class);
        $answers = new ArrayCollection();
        $answers[] = $this->createMock(Answer::class);
        $question = GrammarQuestion::create(QuestionId::create(),
            'I have more then 10 chars', 
            $answers);
    }


}