<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.header', 'header');
        Blade::component('components.footer', 'footer');
        Blade::component('components.sections.solution', 'solution');
        Blade::component('components.sections.advantages', 'advantages');
        Blade::component('components.sections.portfolio', 'portfolio');
        Blade::component('components.sections.development', 'development');
        Blade::component('components.sections.technologies', 'technologies');
        Blade::component('components.sections.feedback', 'feedback');
        Blade::component('components.sections.blog', 'blog');
        Blade::component('components.sections.team', 'team');
        Blade::component('components.sections.join', 'join');
        Blade::component('components.sections.touch', 'touch');
        Blade::component('components.sections.contact', 'contact');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
