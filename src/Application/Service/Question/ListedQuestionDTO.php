<?php

namespace LanguageTest\Application\Service\Question;

class ListedQuestionDTO
{
    public $questionId;
    public $statement;
    public $level;
    public $answers;

    /**
     * CreatedNoteDto constructor.
     * @param $id
     */
    public function __construct($id, $statement, $level)
    {
        $this->questionId = $id;
        $this->statement = $statement;
        $this->level = $level;
        $this->answers = [];
    }

    public function setAnswers($answer){
        $this->answers[] = $answer;
    }
}