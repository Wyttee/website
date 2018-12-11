<?php

namespace App\Providers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\BaseComposer;
use App\Http\ViewComposers\MenuComposer;
use App\Http\ViewComposers\PostComposer;
use App\Http\ViewComposers\LinkComposer;
use App\Http\ViewComposers\HumanComposer;
use App\Http\ViewComposers\ReviewComposer;
use App\Http\ViewComposers\ProjectComposer;
use App\Http\ViewComposers\VacancyComposer;
use App\Http\ViewComposers\TechnlogyComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @param Factory $factory
     * @return void
     */
    public function boot(Factory $factory)
    {
        $factory->composer(['components.*'], BaseComposer::class);
        $factory->composer(['components.*'], MenuComposer::class);
        $factory->composer(['components.*'], LinkComposer::class);
        $factory->composer(['components.sections.blog'], PostComposer::class);
        $factory->composer(['components.sections.team'], HumanComposer::class);
        $factory->composer(['components.sections.team'], HumanComposer::class);
        $factory->composer(['components.sections.join'], VacancyComposer::class);
        $factory->composer(['components.sections.feedback'], ReviewComposer::class);
        $factory->composer(['components.sections.portfolio'], ProjectComposer::class);
        $factory->composer(['components.sections.technologies'], TechnlogyComposer::class);
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
