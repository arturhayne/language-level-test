<?php

namespace LanguageTest\Application\Service\Question;

use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;


class CreateGrammarHandler{

    /*protected $repository;

    public function __construct(QuestionRepository $repository){
        $this->repository = $repository;
    }*/

    public function execute(CreateGrammarCommand $command) : string {
        $grammarQuestion = GrammarQuestion::create(QuestionId::create(),
                                $command->statement,
                                $command->level,
                                $command->answers);
        return (string) $grammarQuestion->questionId();
    }
    
}