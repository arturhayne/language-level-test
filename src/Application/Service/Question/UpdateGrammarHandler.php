<?php

namespace LanguageTest\Application\Service\Question;

use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;

class UpdateGrammarHandler{

    protected $repository;

    public function __construct(GrammarQuestionRepository $repository){
        $this->repository = $repository;
    }

    public function execute(UpdateGrammarCommand $command) : string {
        $grammarQuestion = $this->repository->get(
            QuestionId::fromString($command->id)
        );
        $grammarQuestion->update(
                                $command->statement,
                                $command->level,
                                $command->answers);
        return (string) $grammarQuestion->questionId();
    }
    
}