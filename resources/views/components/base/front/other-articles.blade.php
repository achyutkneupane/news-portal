<div class="container mt-5">
    @foreach($articles as $article)
        <x-base.front.article-with-description :id="$article->id" />
    @endforeach
</div>
