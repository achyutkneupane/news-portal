<x-back-layout>
    <a href="{{ route('article.create') }}" class="btn btn-primary">Add Article</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Category</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $article->title }}
                </td>
                <td>
                    {{ $article->slug }}
                </td>
                <td>
                    {{ $article->category->title }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $articles->links() }}
    </div>
</x-back-layout>
