<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use LanguageTest\Domain\Model\Questions\GrammarQuestionRepository;
use LanguageTest\Domain\Model\Questions\GrammarQuestion;
use LanguageTest\Infrastructure\Domain\Model\Questions\DoctrineGrammarQuestionRepository;

use LanguageTest\Application\CorsRepository;
use LanguageTest\Infrastructure\InMemoryCorsRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /** @var EntityManager $em */
        $em = $this->app['em'];

        $this->app->bind(GrammarQuestionRepository::class, function($app)  use ($em){
            // This is what Doctrine's EntityRepository needs in its constructor.
            return new DoctrineGrammarQuestionRepository(
                $em,
                $em->getClassMetaData(GrammarQuestion::class)
            );
        });

        $this->app->bind(CorsRepository::class, function($app)  use ($em){
            // This is what Doctrine's EntityRepository needs in its constructor.
            return new InMemoryCorsRepository();
        });
    }
}
