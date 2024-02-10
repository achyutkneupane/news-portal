<?php

namespace App\View\Components\Base\Front;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleWithoutDescription extends Component
{
    public $article;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->article = Article::find(76);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.front.article-without-description');
    }
}
