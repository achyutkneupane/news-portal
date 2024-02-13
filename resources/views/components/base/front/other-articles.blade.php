<div class="container mt-5">
    @foreach($articles as $article)
        <x-base.front.article-with-description :article="$article" />
    @endforeach
    {{ $articles->links() }}
</div>
