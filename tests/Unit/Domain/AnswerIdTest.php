<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;
use LanguageTest\Domain\Model\Questions\AnswerId;

class AnswerIdTest extends TestCase
{

    public function test_it_should_create_answer(){
  
        $this->assertInstanceOf(AnswerId::class,
            AnswerId::create()
        );

    }
}