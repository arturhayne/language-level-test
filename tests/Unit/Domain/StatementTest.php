<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;
use LanguageTest\Domain\Model\Questions\Statement;


class StatementTest extends TestCase
{

    const SAMPLE_STATEMENT = 'To be or not to be?';

    public function test_it_should_create_statement(){
        $this->assertInstanceOf(Statement::class,
            Statement::create(self::SAMPLE_STATEMENT)
        );
    }

    public function test_it_sould_cotain_same_text(){
        $stringStatement = self::SAMPLE_STATEMENT;
        $statement = Statement::create(self::SAMPLE_STATEMENT);
        $this->assertEquals($stringStatement, (string) $statement);
    }

    public function test_it_should_not_allow_empty()
    {
        $this->expectException(\InvalidArgumentException::class);
        Statement::create('');
    }

    public function test_it_should_not_allow_less_than_10()
    {
        $this->expectException(\InvalidArgumentException::class);
        $teste = Statement::create('12345678');
    }
}