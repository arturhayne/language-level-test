<?php 

namespace LanguageTest\Application\Service\Question;

class ArrayListNoteTransformer implements ListTransformer{

    private $array;

    public function write($questions){
        
        $list = [];
        foreach($questions as $question){
            $list = array_merge($question->answers()->toArray(), $list);
        }

        foreach($list as $key=>$answer){
            $this->array[$key] = new ListeAnswerDTO(
                (string)$answer->id(),
                (string) $answer->title(),
                $answer->content(),
                (string)$answer->notepadId()
            );
        }
            
    }

    public function read(){
        return $this->array;
    }

}