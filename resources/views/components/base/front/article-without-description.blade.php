<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-3">
            <img src="{{ asset('storage/images/'. $article->image) }}" class="w-100" />
        </div>
        <div class="col-9">
            <div>
        <span class="bg-primary text-white p-1 fs-6">
            {{ $article->category->title }}
        </span>
            </div>
            <div class="mt-2">
                <h3 class="fw-bolder">
                    {{ $article->title }}
                </h3>
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
    </div>
</div>
