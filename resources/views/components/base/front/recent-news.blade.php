<div>
    <div>
        <h2 class="fw-bold">
            Recent News
        </h2>
    </div>
    <div>
        @foreach($news as $news_item)
            <x-base.front.article-without-description :article="$news_item" />
        @endforeach
    </div>
</div>
