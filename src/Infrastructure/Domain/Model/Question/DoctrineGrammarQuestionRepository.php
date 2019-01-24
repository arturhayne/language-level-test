<?php

namespace LanguageTest\Infrastructure\Domain\Model\Questions;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;//ObjectiveQuestion
use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\ObjectiveQuestion;


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

    public function remove(GrammarQuestion $question){
        $this->em->remove($question);
        $this->em->flush();
    }

    public function find(QuestionId $questionId){
        return $this->em->find(GrammarQuestion::class, $questionId);

    }
}