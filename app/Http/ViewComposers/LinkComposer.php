<?php

namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class LinkComposer
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
        $view->with('__links', [
            'in' => 'https://www.linkedin.com/company/ogd-solutions/',
            'facebook' => 'https://www.facebook.com/OGD-Solutions-214552309144764/',
            'youtube' => 'https://www.youtube.com/channel/UCTzGIAGzUbUQGk3T5erBJzA',
            'insta' => 'https://www.instagram.com/ogd.solutions/'
        ]);
    }
}
