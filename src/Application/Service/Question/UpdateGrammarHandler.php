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
        $question = $this->repository->find(
            QuestionId::createFromString($command->id)
        );
        if($question == null){
            throw new \InvalidArgumentException('This question not exist!');
        }
        $question->update(
                                $command->statement,
                                $command->level,
                                $command->answers);
        $this->repository->save($question);
        return (string) $question->questionId();
    }
    
}