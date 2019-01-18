<?php

namespace LanguageTest\Domain\Model\Questions;

interface GrammarQuestionRepository {
    public function save(GrammarQuestion $grammarQuestion);
    public function remove(QuestionId $questionId);
    public function find(QuestionId $questionId);
}