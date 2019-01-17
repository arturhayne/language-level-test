<?php

namespace LanguageTest\Infrastructure\Domain\Model\Questions;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;
use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;

class DoctrineGrammarQuestionRepository  implements GrammarQuestionRepository 
{
    public function save(GrammarQuestion $grammarQuestion){
    }

    public function remove(QuestionId $questionId){

    }

    public function find(QuestionId $questionId){

    }
}