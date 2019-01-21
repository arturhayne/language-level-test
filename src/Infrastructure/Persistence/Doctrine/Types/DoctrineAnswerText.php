<?php

namespace LanguageTest\Infrastructure\Persistence\Doctrine\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType;
use LanguageTest\Domain\Model\Question\AnswerText;

class DoctrineAnswerText extends GuidType
{
    public function getName()
    {
        return 'AnswerText';
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof AnswerText) {
            $value = (string) $value;
        }

        return $value;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return AnswerText::create($value);
    }
}