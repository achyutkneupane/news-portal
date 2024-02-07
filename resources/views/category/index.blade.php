<x-back-layout>
    <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $category->title }}
                </td>
                <td>
                    {{ $category->slug }}
                </td>
                <td>
                    {{ $category->description }}
                </td>
                <td>
                    @if($category->image)
                    <img src="{{ asset('storage/images/'.$category->image) }}" alt="{{ $category->title }}" height="100" />
                    @else
                    <span class="text-danger">No images uploaded</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-back-layout>
