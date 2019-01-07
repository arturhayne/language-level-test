<?php
namespace LanguageTest\Domain\Model\Questions;

use LanguageTest\Domain\Model\Common\Identity;

class QuestionId extends Identity{

    public function equals(QuestionId $id)
    {   
        return (string) $this->value == (string) $id;
    }
}