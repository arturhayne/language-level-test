<?php

namespace Tests\Unit\Domain;

use PHPUnit\Framework\TestCase;

use LanguageTest\Application\Service\Question\CreateGrammarHandler;
use LanguageTest\Application\Service\Question\CreateGrammarCommand;

class CreateGrammarHandlerTest extends TestCase
{

    private $createGrammardHandler;
    private $command;

    protected function setUp()
    {        
        $this->prophet = new \Prophecy\Prophet;
        //$repository  = $this->prophet->prophesize(NotepadDoctrineRepository::class);
        //$stub = $repository->reveal();
        $this->CreateGrammarHandler = new CreateGrammarHandler();
    }

    private function execute(){
        return $this->CreateGrammarHandler->execute($this->command);
    }

    public function test_should_create_grammar_question(){

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

        $this->command = new CreateGrammarCommand('this is a statement',
                                            1,
                                            $answers);
        $questionId = $this->execute();
        $this->assertNotNull($questionId);
    }

    public function test_should_return_string(){

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

        $this->command = new CreateGrammarCommand('this is a statement',
                                            1,
                                            $answers);

        $questionId = $this->execute();
        $this->assertInternalType('string',$questionId);
    }
}