<?php

namespace LanguageTest\Infrastructure\Persistence\Doctrine\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType;
use LanguageTest\Domain\Model\Questions\QuestionId;

class DoctrineQuestionId extends GuidType
{
    public function getName()
    {
        return 'QuestionId';
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof QuestionId) {
            $value = (string) $value;
        }

        return $value;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return QuestionId::createFromString($value);
    }
}