<?php

namespace App\Providers;

use App\Services\DatabaseTranslationLoader;
use Illuminate\Translation\TranslationServiceProvider as IlluminateTranslationServiceProvider;

class TranslationServiceProvider extends IlluminateTranslationServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function register(): void
    {
		parent::register();
    }

	protected function registerLoader(): void
	{
		$this->app->singleton('translation.loader', function ($app) {
			return new DatabaseTranslationLoader($app['files'], $app['path.lang']);
		});
	}
}
