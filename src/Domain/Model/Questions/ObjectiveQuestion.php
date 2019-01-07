<?php

namespace LanguageTest\Domain\Model\Questions;

abstract class ObjectiveQuestions{

    /**
     * @var QuestionId
     */
    protected $questionId;
    /**
     *  @var string
     */
    protected $statement;

    protected $answers;

}