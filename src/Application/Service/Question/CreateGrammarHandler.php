<?php

namespace LanguageTest\Application\Service\Question;

use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;
 
class CreateGrammarHandler{

    protected $repository;

    public function __construct(GrammarQuestionRepository $repository){
        $this->repository = $repository;
    }

    public function execute(CreateGrammarCommand $command) : string {
        $grammarQuestion = GrammarQuestion::create(QuestionId::create(),
                                $command->statement,
                                $command->level,
                                $command->answers);
        $this->repository->save($grammarQuestion);
        return (string) $grammarQuestion->questionId();
    }
    
}