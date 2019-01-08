<?php
namespace LanguageTest\Domain\Model\Questions;

use LanguageTest\Domain\Common\Identity;

class AnswerId extends Identity{

    public function equals(AnswerId $id)
    {   
        return (string) $this->value == (string) $id;
    }
}