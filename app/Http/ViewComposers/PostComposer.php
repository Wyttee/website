<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class PostComposer
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
        /** @var Collection $posts */
        $posts = Post::query()
            ->take(2)
            ->get();

        $view->with('posts', $posts);
    }
}
