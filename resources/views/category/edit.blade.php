<x-back-layout>
    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Enter Title for Category" class="form-control" value="{{ $category->title }}" />
        </div>
        <div class="form-group mt-3">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" placeholder="Enter Slug for Category" class="form-control" value="{{ $category->slug }}" />
        </div>
        <div class="form-group mt-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Enter Description" class="form-control">{{ $category->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Category Image</label>
            <input type="file" id="image" name="image" class="form-control">
            @if($category->image)
            <img src="{{ asset('storage/images/'.$category->image) }}" height="100" />
            @endif
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </form>
</x-back-layout>
