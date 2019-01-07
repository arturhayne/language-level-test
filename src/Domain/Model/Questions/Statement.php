<?php

namespace LanguageTest\Domain\Model\Questions;

class Statement{

    protected $value;

    const MIN_CHAR = 10;

    private function __construct($value){
        $this->validateValue($value);
        $this->value = $value;
    }

    public static function create($value) : self{
        return new static ($value);
    }

    public function __toString(){
        return (string) $this->value;
    }

    private function validateValue($value){
        if(!is_string($value)||!strlen($value)){
            throw new \InvalidArgumentException('Statement can not be null');
        }

        if(strlen($value) < self::MIN_CHAR){
            throw new \InvalidArgumentException('Statement can not be samaller than 10 chars');
        }
    }
}