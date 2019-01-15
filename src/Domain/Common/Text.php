<?php

namespace LanguageTest\Domain\Common;
use Ramsey\Uuid\Uuid;

abstract class Text{

    protected $value;

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

    protected function validateValue($value){
        if(!is_string($value)||!strlen($value)){
            throw new \InvalidArgumentException('Text field can not be null');
        }
    }
}