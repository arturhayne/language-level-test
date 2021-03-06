<?php
namespace LanguageTest\Domain\Model\Questions;

use LanguageTest\Domain\Common\Identity;

class QuestionId extends Identity{

    public function equals(QuestionId $id)
    {   
        return (string) $this->value == (string) $id;
    }
}