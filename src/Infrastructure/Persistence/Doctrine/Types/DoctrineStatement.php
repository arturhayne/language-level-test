<?php

namespace LanguageTest\Infrastructure\Persistence\Doctrine\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType;
use LanguageTest\Domain\Model\Question\Statement;

class DoctrineStatement extends GuidType
{
    public function getName()
    {
        return 'Statement';
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof Statement) {
            $value = (string) $value;
        }

        return $value;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return Statement::create($value);
    }
}