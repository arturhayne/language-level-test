<?php

namespace LanguageTest\Application\Service\Question;

class ListedAnswerDTO
{
    public $answerId;
    public $questionId;
    public $isTrue;
    public $answerText;

    /**
     * CreatedNoteDto constructor.
     * @param $id
     */
    public function __construct($id, $questionId, $isTrue, $answerText)
    {
        $this->answerId = $id;
        $this->questionId = $questionId;
        $this->isTrue = $isTrue;
        $this->answerText = $answerText;
    }
}