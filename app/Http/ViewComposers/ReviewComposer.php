<?php

namespace App\Http\ViewComposers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class ReviewComposer
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
        /** @var Collection $reviews */
        $reviews = Review::query()
            ->get();

        $view->with('reviews', $reviews);
    }
}
