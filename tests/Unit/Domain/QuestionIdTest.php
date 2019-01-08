<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;
use LanguageTest\Domain\Model\Questions\QuestionId;

class QuestionIdTest extends TestCase
{

    public function test_it_should_create_answer(){
  
        $this->assertInstanceOf(QuestionId::class,
            QuestionId::create()
        );

    }
}