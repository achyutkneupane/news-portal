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
    public function __construct($article)
    {
        $this->article = $article;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.base.front.article-without-description');
    }
}
