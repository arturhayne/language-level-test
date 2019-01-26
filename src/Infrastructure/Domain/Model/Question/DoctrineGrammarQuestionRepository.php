<?php

namespace LanguageTest\Infrastructure\Domain\Model\Questions;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;


use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;//ObjectiveQuestion
use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Domain\Model\Questions\QuestionId;
use LanguageTest\Domain\Model\Questions\ObjectiveQuestion;


class DoctrineGrammarQuestionRepository extends EntityRepository  implements GrammarQuestionRepository 
{
    
    public function save(GrammarQuestion $grammarQuestion){
        $this->_em->persist($grammarQuestion);
        $this->_em->flush($grammarQuestion);
		return $grammarQuestion;
    }

    public function remove(GrammarQuestion $question){
        $this->_em->remove($question);
        $this->_em->flush();
    }

    public function ofId(QuestionId $questionId){
        return $this->_em->find(GrammarQuestion::class, $questionId);
    }

}