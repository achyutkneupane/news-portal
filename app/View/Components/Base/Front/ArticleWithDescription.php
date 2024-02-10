<?php

namespace App\View\Components\Base\Front;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleWithDescription extends Component
{
    public $article;
    /**
     * Create a new component instance.
     */
    public function __construct($id)
    {
        $this->article = Article::find($id);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.front.article-with-description');
    }
}
