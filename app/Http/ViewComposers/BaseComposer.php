<?php

namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class BaseComposer
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
        $view->with('__header_video_link', 'https://www.youtube.com/embed/QwIEeuHqID8?rel=0&loop=1&rel=0&showinfo=0&color=white');
    }
}
