<?php

namespace LanguageTest\Application\Service\Question;

use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;

class ListGrammarHandler{

    protected $repository;

    public function __construct(GrammarQuestionRepository $repository){
        $this->repository = $repository;
    }

    public function execute() : array {
        $grammarQuestionList = $this->repository->findAll();
        return $grammarQuestionList;
    }
    
}