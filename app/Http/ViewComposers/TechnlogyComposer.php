<?php

namespace App\Http\ViewComposers;

use App\Technology;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class TechnlogyComposer
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
        /** @var Collection $technologies */
        $technologies = Technology::query()
            ->get();

        $view->with('technologies', $technologies);
    }
}
