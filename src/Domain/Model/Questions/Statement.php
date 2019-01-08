<?php

namespace LanguageTest\Domain\Model\Questions;
use LanguageTest\Domain\Common\Text;


class Statement extends Text{

    const MIN_CHAR = 10;

    protected function validateValue($value){
        parent::validateValue($value);
        if(strlen($value) < self::MIN_CHAR){
            throw new \InvalidArgumentException('Statement can not be samaller than 10 chars');
        }
    }
}