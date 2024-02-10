<div>
    <div>
        <h2 class="fw-bold">
            Recent News
        </h2>
    </div>
    <div>
        @foreach($news as $news_item)
            <x-base.front.article-without-description :id="$news_item->id" />
        @endforeach
    </div>
</div>
