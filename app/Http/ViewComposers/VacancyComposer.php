<?php

namespace App\Http\ViewComposers;

use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class VacancyComposer
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
        /** @var Collection $vacancies */
        $vacancies = Vacancy::query()
            ->get();

        $view->with('vacancies', $vacancies);
    }
}
