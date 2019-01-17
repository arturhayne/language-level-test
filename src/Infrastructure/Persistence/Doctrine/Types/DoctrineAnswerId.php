<?php

namespace LanguageTest\Infrastructure\Persistence\Doctrine\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType;
use LanguageTest\Domain\Model\Question\AnswerId;


class DoctrineAnswerId extends GuidType
{
    public function getName()
    {
        return 'AnswerId';
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof AnswerId) {
            $value = (string) $value;
        }

        return $value;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return AnswerId::createFromString($value);
    }
}