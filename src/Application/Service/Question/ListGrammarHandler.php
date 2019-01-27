<?php

namespace LanguageTest\Application\Service\Question;

use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;

class ListGrammarHandler{

    protected $repository;
    protected $listTransformer;

    public function __construct(GrammarQuestionRepository $repository,
        ListTransformer $listTransformer){
        $this->repository = $repository;
        $this->listTransformer = $listTransformer;
    }

    public function execute() {
        $grammarQuestionList = $this->repository->findAll();
        $this->listTransformer->write($grammarQuestionList);
    }

    public function listTransformer(){
        return $this->listTransformer->read();
    }
    
}