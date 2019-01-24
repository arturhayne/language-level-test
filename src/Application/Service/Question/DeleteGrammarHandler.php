<?php

namespace LanguageTest\Application\Service\Question;

use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;

class DeleteGrammarHandler{

    protected $repository;

    public function __construct(GrammarQuestionRepository $repository){
        $this->repository = $repository;
    }

    public function execute(DeleteGrammarCommand $command) : string {
        $question = $this->repository->find(
            QuestionId::createFromString($command->id)
        );
        if($question == null){
            throw new \InvalidArgumentException('This question not exist!');
        }
        $this->repository->remove($question);
        return 'OK';
    }
    
}