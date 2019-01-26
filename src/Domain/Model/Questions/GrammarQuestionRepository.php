<?php

namespace LanguageTest\Domain\Model\Questions;

interface GrammarQuestionRepository {
    public function save(GrammarQuestion $grammarQuestion);
    public function remove(GrammarQuestion $grammarQuestion);
    public function ofId(QuestionId $questionId);
    public function findAll();
}