<?php 

namespace LanguageTest\Application\Service\Question;

interface ListTransformer{

    public function write($list);

    public function read();
}
