<?php

namespace LanguageTest\Application;

interface CorsRepository {
    public function findByIP(string $ip);
    public function findByDomain(string $domain);
}