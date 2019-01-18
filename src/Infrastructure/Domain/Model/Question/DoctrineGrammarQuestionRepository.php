<?php

namespace LanguageTest\Infrastructure\Domain\Model\Questions;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;
use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;

class DoctrineGrammarQuestionRepository  implements GrammarQuestionRepository 
{

    private $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }
    
    public function save(GrammarQuestion $grammarQuestion){
        $this->em->persist($grammarQuestion);
        $this->em->flush($grammarQuestion);
		return $grammarQuestion;
    }

    public function remove(QuestionId $questionId){

    }

    public function find(QuestionId $questionId){

    }
}