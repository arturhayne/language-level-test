<?php
namespace LanguageTest\Domain\Common;
use Ramsey\Uuid\Uuid;


abstract class Identity{

    protected $value;

    protected function __construct($value = null){
        $this->value = $value ?: Uuid::uuid4();
    }

    public static function create ($value = null) : self{
        return new static ($value);
    }

    public static function createFromString(string $value): self
    {
        return new static($value);
    }

    public function __toString()
    {
        return (string) $this->value;        
    }
}