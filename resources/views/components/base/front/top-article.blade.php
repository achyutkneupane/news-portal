<div>
    <div class="w-100 mb-2">
        <img src="{{ asset('storage/images/'. $article->image) }}" class="w-100" />
    </div>
    <div>
        <span class="bg-primary text-white p-1">
            {{ $article->category->title }}
        </span>
    </div>
    <div class="mt-2">
        <h2 class="fw-bolder display-6">
            <a href="{{ route('article-view', $article->slug) }}" alt="{{ $article->title }}" class="link-dark text-decoration-none">
                {{ $article->title }}
            </a>
        </h2>
    </div>
    <div class="d-flex justify-content-start gap-2">
        <div>
            {{ $article->created_at->isoFormat('MMMM D, YYYY ') }}
        </div>
        <div>|</div>
        <div>
            {{ $article->views }} Views
        </div>
    </div>
</div>
