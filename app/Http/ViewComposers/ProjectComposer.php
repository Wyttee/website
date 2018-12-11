<?php

namespace App\Http\ViewComposers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class ProjectComposer
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * MenuComposer constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        /** @var Collection $projects */
        $projects = Project::query()
            ->take(6)
            ->get();

        $view->with('__list', $projects);
    }
}
