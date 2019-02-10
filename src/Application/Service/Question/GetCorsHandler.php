<?php

namespace LanguageTest\Application\Service\Question;

use LanguageTest\Application\CorsRepository;



class GetCorsHandler{

    protected $repository;

    public function __construct(CorsRepository $repository){
        $this->repository = $repository;
    }

    public function execute(string $origin) : bool{
        if(filter_var($origin, FILTER_VALIDATE_IP)){
            return (string)$this->repository->findByIP($origin);
        }
        //$extract = new \LayerShifter\TLDExtract\Extract();
        //$result = $extract->parse('http://www.shop.github.com');
        //print_r($result->getRegistrableDomain());

        

        //print_r($url->publicSuffix); // com
        //print_r($url->registerableDomain);
        $url = \Purl\Url::parse($origin);
        return (string)$this->repository->findByDomain( $url->registerableDomain);  
    }
    
}