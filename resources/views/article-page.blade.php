<x-front-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <img src="{{ asset('storage/images/'. $article->image) }}" class="w-75" />
        </div>
        <div class="text-center mt-4">
            <span class="bg-primary p-2 text-white">
                {{ $article->category->title }}
            </span>
            <h1 class="display-5 mt-2">
                {{ $article->title }}
            </h1>
        </div>
        <div class="d-flex justify-content-center gap-2 fs-5" style="color: #555555;">
            <div>
                {{ $article->created_at->isoFormat('MMMM D, YYYY ') }}
            </div>
            <div>|</div>
            <div>
                {{ $article->views }} Views
            </div>
        </div>
        <div class="mt-4" style="text-align: justify;">
            {{ $article->content }}
        </div>
    </div>
</x-front-layout>
