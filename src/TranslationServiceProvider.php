<?php

namespace Logobinder\Translation;

/**
 * 
 * @author 
 */
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider {

    public function boot() {
        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
                ], 'migrations');
        $this->publishes([
            __DIR__ . '/config' => config_path()
                ], 'config');
        //dump('TranslationServiceprovider boot');
    }

    public function register() {
        //dump('TranslationServiceprovider register');
    }

}
