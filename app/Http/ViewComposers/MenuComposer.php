<?php

namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MenuComposer
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
        $view->with('__menu', [
            '#solutions' => 'Solutions',
            '#advantages' => 'Advantages',
            '#portfolio' => 'Portfolio',
            '#development' => 'Development process',
            '#technologies' => 'Technologies',
            '#feedback' => 'Feedback',
            '#team' => 'Team',
            '#contact' => 'Contact',
        ]);
    }
}
